<?php
require_once "database/database.php";
$pagetitle ="page d'accueil";

ob_start();


// recuper la views de la page d'accueil
require_once('ressources/views/blog/about_html.php');


// recuperer le contenu du tampon  de la page d'accuiel
$pageContent= ob_get_clean();

require_once('ressources/views/layouts/blog-layout/blog-layout_html.php');
?>