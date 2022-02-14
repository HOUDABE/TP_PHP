<?php include "header.php";
?>
<?php
//  recuperation des variables 
$id=$_GET['id'];
$titre=$_POST['titre'];
$description=$_POST['description'];
$prix=$_POST['prix'];
$image=$_POST['image'];
// 2 Travail en BD (Modification)

bd();
require "Articles.php";  
$entry = Articles::retrieveByPK($_GET['id']);
  

$entry->titre=$titre;
$entry->description=$description;
$entry->prix = $prix;
$entry->image = $image;
$entry->save();