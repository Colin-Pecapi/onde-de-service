// Le serveur de dev ne permet pas de page sans type, mais la  prod oui
var suffix = ods.env ? '' : ''

// Valeur globale du dernier lien cliqué.
// Ajouté pour éviter de charger plusieurs pages lors du scroll
ods.link = ''
/**
 * Redirige la page en la faisant schroller
 * @param {Lien de la nouvelle page} link 
 */
function redirectTo(e) {
  link = getHash(e.target.href)
  ods.link = link

  // Si :
  // il n'y a pas index ou bienvenue
  // ce n'est pas égale à '/'
  // ods.oneSection à false
  if (window.location.pathname.search(/index/) != -1 || window.location.pathname.search('^\/$') != -1 || !ods.oneSection) {
    // if (true) {
    // Change l'url du site
    getPage(link, false)

    e.preventDefault()
  } else {
    // Si la page n'est pas index.php ou /, il faut recharger la page complete et utilser l'ancre
    window.location.replace('/#' + link)
  }
  return false
}

/**
 * Récupere la page en Ajax
 * @param {Lien de la nouvelle page} url 
 * @param {Si l'action est appelé suite à un slide} slide 
 */
function getPage(link, slide) {
  url = link + suffix
  // window.location.origin + '/' +
  $.get(url,
    function (data) {
      if (slide) {
        // Slide : L'url change en remplaçant l'actuelle dans l'historique
        history.replaceState(null, link, link + suffix)
      } else {
        // https://webmasters.googleblog.com/2014/02/infinite-scroll-search-friendly.html
        // ...we recommend including pushState (by itself, or in conjunction with replaceState)...
        // Click : Une nouvelle page est ajouté dans l'historique
        history.pushState(null, link, link + suffix)
      }

      return data
    })
}

/**
 * Extrait le Hash d'une url
 * @param {Chaine a nettoyer} link 
 */
function getHash(link) {
  return link = link.split('#')[link.split('#').length - 1]
}

window.onload = function () {

  // Si la page a utilisé la navigation par ancre classique
  if (window.location.hash != '') {
    $('html, body').stop().animate({
      scrollTop: $(window.location.hash).offset().top - 40
    }, 500)
  }

  // Si la page est partiellement chargé
  if (ods.oneSection) {
    currentPage = ($('section')[0]).id
    // Quand la liste page à la section d'après
    after = false
    // La précédente page incluse.
    prev = ''
    // charger le reste grace au tableau ods.page
    ods.pages.forEach(function (page) {

      // Si la page est avant la page courante
      if (page != currentPage) {
        $.ajax({
          url: 'pages/' + page + suffix,
          method: 'GET',
          data: '',
          dataType: 'html',
          async: false // Evite que les pages chargent dans le désordre
        }).done(
          function (data) {
            if (!after) {
              $('#' + currentPage).before(data)
              $('#' + currentPage).before('<hr class="separator primary my-4">')
            } else {
              // Si la page est après la page courante ( il faut penser à retourner le tableau ou a prepend la classe venant d'etre ajouté)
              $('#' + prev).after(data)
              $('#' + prev).after('<hr class="separator primary my-4">')
              prev = page
            }
            // Si le code fonctionne, le JS considere que la page est complete
            ods.oneSection = false;
          }

        )
      } else {
        after = true
        prev = page
      }
    })


    $('html, body').stop().animate({
      scrollTop: $('#' + currentPage).offset().top - 40
    }, 500)
  }

  // @Todo : si j'utilise scrollspy, il y a une fonction pour ça
  // Charge la page quand l'utilisateurs schroll.
  // Quand le lien deviens active, appeler sa page asocié.

  /**
   * Chargement des pages avec Ajax lors du shroll dessus pour simuler le click et ammélieorer le référencement google
   */

  // https://stackoverflow.com/questions/19401633/how-to-fire-an-event-on-class-change-using-jquery/19401707

  // Balises à chercher
  var $div = $('li.nav-item>.nav-link')

  // Création de l'observer sur la mutation changement de classe
  var observer = new MutationObserver(function (mutations) {
    mutations.forEach(function (mutation) {
      if (mutation.attributeName === 'class') {
        link = getHash(mutation.target.href)
        // Charge uniquement si le navLink est 'active'
        // Et si la page est celle venant d'être cliqué, si il y a eu un click 
        if ($(mutation.target).hasClass('active')) {

          // Soit c'est le slide : link = false ou '' et class est active
          // Soit c'est du slide induit par un click : link = lien et class est active et link = link
          if (!ods.link || (!!!ods.link && (link == ods.link))) {

            // Chargement de la page avec Jquery
            getPage(link, true)
          }

          // Réinitialisation de ods.link à false une fois que le liens cliqué est atteint
          if ((link == ods.link)) {
            ods.link = false
          }
        }
      }
    })
  })
  $.each($div, function (key, navLink) {
    // Initialisation des evenement sur la navigation 1 à 1 :
    observer.observe(navLink, {
      attributes: true
    })
  })
}