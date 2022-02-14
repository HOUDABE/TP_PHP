<?php
 include "./header.php";?>

<?php

bd();

include_once "Articles.php";

$entry =Articles::all();

foreach($entry as  $monarticle){
    echo "<a href='unarticle.php?id=".$monarticle->id."'> $monarticle->image $monarticle->titre </a>==>
     

    <a href='modifier.php?id=".$monarticle->id."'>  Modifier</a>=>
    
    
    <a href='supprimer.php?id=".$monarticle->id."'>  Supprimer</a><hr>";}
    
    ?>

   

<?php include "footer.php"; ?>
