<?php include "header.php"; ?>

<?php
// Connecter à la base d

bd(); 
require_once "Articles.php";


$entry = Articles::retrieveByPK($_GET['id']);
 
echo $entry->titre;

?>
<?php include "footer.php"; ?>