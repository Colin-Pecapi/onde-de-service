<head>
<meta charset="utf-8">

  <!-- Global site tag (gtag.js) - Google Analytics 
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141494474-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-141494474-1');
  </script>

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-9377219523814739",
      enable_page_level_ads: true
    });
  </script>


 Google Tag Manager --
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5MSP95C');</script>
-- End Google Tag Manager -->

  <!-- Fin des balise google -->
<?php
// Permet de gérer dynamiquement les métas et les données propres à chaques pages
// Cas 1 : Toutes la page -> charger soit tout le tableau, soit rien.
// Cas de chaques pages :  chacunes indique son slug avant d'appeler le head et ces données sont chargés ici

// Organisation :
// 1 fichier json chargé ici contiens toutes les infos
// Ici un include du fichier php qui fait le choix de quelles données traiter
include "pages/meta.php";

$metaTitle = $meta['title'] ? $meta['title'].' - ' : '';  
$metaDescription = $meta['description'] ? $meta['description'] : "J’interviens personnellement auprès des enfants et des élèves pour de la garde d'enfants et du soutien scolaire.";  

?>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description"
    content="<?php echo $metaDescription?>">

  <meta name="keywords" content="Services à la personne,
  Onde de service,   Garde d’enfants,  Tarifs garde d’enfant,  Soutien scolaire,  Tarifs soutien scolaire,  Contact,   Services, à, la, personne,
  Onde,  Garde,enfants,  Tarifs,  Soutien,scolaire,  Contact, Sensibilité Montessori, Sensibilité, Montessori, Sensibilite, Beaux-Arts, Montpellier, 34000, 34, 34090, 34070, CAF, 
  Élèves de primaire, Élèves, primaire, eleves, 
  Collèges et lycée, Collèges,lycée, Colleges, lycee, Brevet et Bac, Brevet, Bac, Prépa concours, Prépa, concours, Prepa,domicile,
  ">

  <meta name="author" content="Isabelle Cazanave-pin">

  <title><?php echo $metaTitle?>Onde de service</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic'
    rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.css" rel="stylesheet">

</head>

<body id="main">
  
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MSP95C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include "pages/navigation.php"; ?>

