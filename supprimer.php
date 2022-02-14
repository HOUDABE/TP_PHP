<?php include "header.php"; ?>
  
<?php
bd();
require_once "Articles.php";
// Variables GET
$id=$_GET['id'];

$entry = Articles::retrieveByPK($id);

$entry->delete();

echo "l'utilisateur a été supprimé :)";
?>
<?php include "footer.php"; ?>