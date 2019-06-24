<?php
// Permet de gérer dynamiquement les métas et les données propres à chaques pages
// Cas 1 : Toutes la page -> charger soit tout le tableau, soit rien.
// Cas de chaques pages :  chacunes indique son slug avant d'appeler le head et ces données sont chargés ici

// Organisation :
// 1 fichier json chargé ici contiens toutes les infos
$metaJson = json_decode(file_get_contents('pages/meta.json'), true);
// Choix de quelles données traiter

$url = $_SERVER['PHP_SELF']; 
$reg = '#^(.+[\\\/\/\/])*(.+)*\.php#';

// génération du metaTitle en fonction de la page lue 
// $filephp =  preg_replace($reg, '$2', $url);
// $file = preg_replace('#\/#', '', $filephp);
// $meta_title = $file;
$metaTitle = $metaTitle ?: 'default';
$meta = $metaJson[$metaTitle];
//var_dump($meta);
?>