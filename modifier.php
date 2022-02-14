<?php include "header.php"; ?>
  
<?php
bd();
require_once "Articles.php";

$id=$_GET['id'];

$entry = Articles::retrieveByPK($_GET['id']);


?>


<form method="POST" action="modifier_1.php?id=<?= $entry->id ?>">

      Titre : <input type="text" name="titre" value="<?= $entry->titre ?>">
        description : <input type="text" name="description" value="<?= $entry->description ?>">
        <br />
       prix : <input type="int" name="prix"  value="<?= $entry->prix ?>">
        <br />
        Image : <input type="text" name="image" value="<?= $entry->image?>">
        <br>
        <input type="submit" value="Envoyer">
    </form>

<?php


echo "l'article a été modifié avec succès";
?>
<?php include "footer.php"; ?>

