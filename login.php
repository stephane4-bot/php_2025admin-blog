<?php
session_start();
require_once "database/database.php";


$errors = [];

if (isset($_POST['login'])) {

    

    if (   !empty($_POST['email']) && !empty($_POST['password'] )) {

                    // verifier les information de connexion
            $query ="SELECT * FROM users
            WHERE (email = :email OR username = :email)";
            $query =$pdo->prepare($query);

            $query->execute([
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            ]);

            $user= $query->fetch();

            if($user && password_verify( $_POST['password'], $user["password"])){
                $_SESSION['auth'] =$user;
                $_SESSION['auth'] =$user['role'];

                //redirection en fonction du role
                switch ($user['role']) {
                    case 'admin': 
                        header('location: admin-dashboard.php');
                        break;
                }
          
            }else{
                $errors['email'] ="Email ou mot de passe incorrect";
            }
             }else{ 
                $errors['login']="tous les champs doivent etre remplis";
            
                 }
                  }

           if($user && password_ verify($_POST['password'], $user["password"])){
            

           }
    
        }
echo('vide');

 }

    

    



$pageTitle = 'Page  login';

// Début du tampon de la page de sortie
ob_start();

// Inclure le layout de la page d'accueil
require_once 'ressources/views/users/login_html.php';


// Récupération du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

// Inclure le layout de la page de sortie
require_once 'ressources/views/layouts/blog-layout/blog-layout_html.php';

