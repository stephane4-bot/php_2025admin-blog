<?php
session_start();
require_once "database/database.php";





$pageTitle = 'Page  Dashboard';

// Début du tampon de la page de sortie
ob_start();

// Inclure le layout de la page d'accueil
require_once 'ressources/views/blog/index_html.php';

// Récupération du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

// Inclure le layout de la page de sortie
require_once 'ressources/views/layouts/blog-layout/blog-layout_html.php';
