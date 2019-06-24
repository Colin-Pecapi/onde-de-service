<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-primary" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="/">
      <img class="text-center" height="42" src="img/logo-services-la-personne.png" alt="Logo">

    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto my-2 my-lg-0">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger text-center font-weight-bold" style="
          font-family: Apple Chancery, cursive;
          text-shadow: blue 0.3em 0.3em 1em; font-size: 1rem" href="#bienvenue"  onclick="redirectTo(event)">Onde de service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger text-center" href="#mon-statut" onclick="redirectTo(event)">Mon statut</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger text-center" href="#mon-parcours" onclick="redirectTo(event)">Mon parcours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger text-center" href="#garde-d-enfants" onclick="redirectTo(event)">Garde d’enfants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger text-center" href="#garde-d-enfants-tarif" onclick="redirectTo(event)">Tarifs garde d’enfant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger text-center" href="#soutien-scolaire" onclick="redirectTo(event)">Soutien scolaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger text-center" href="#soutien-scolaire-tarif" onclick="redirectTo(event)">Tarifs soutien scolaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger text-center" href="#contact" onclick="redirectTo(event)">Contact</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<script>
ods = {
  oneSection : false,
  pages : ['bienvenue',
          'avantages',
          'mon-parcours',
          'garde-d-enfants',
          'garde-d-enfants-tarif',
          'soutien-scolaire',
          'soutien-scolaire-tarif',
          'contact',
],
env : window.location.hostname == 'onde-de-service.fr'
};
</script>
