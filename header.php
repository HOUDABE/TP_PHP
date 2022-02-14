<?php 
session_start(); 
require "function.php";
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br />
    <a href="./header.php">accueil</a> -   
    <a href="./liste_article.php">Affiche la listes des articles </a><br> 
   
    <?php
     if (isset($_SESSION['user'])==true) {
         echo "Vous êtes connecté en tant que ". $_SESSION['user'];
         ?>
         
         <?php
     }
     else {
        echo "Vous n'êtes pas connecté";
     } 
    
    ?> 
    <br />
    