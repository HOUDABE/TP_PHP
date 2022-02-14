
<?php
include_once "function.php";
bd();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<title></title>
</head>

<body>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                     <h1>AJOUTE DES PRODUITS</h1>

                <form method="post" action="./ajouter.php" >
                   

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">titre d'article</label>
                        <input type="text" class="form-control" name="titre" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">description</label>
                        <textarea type="text" class="form-control" name="description" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">prix</label>
                        <input type="number" class="form-control" name="prix" required>
                    </div>

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">chemin de l'image</label> 
                        <input type="name" class="form-control" name="image" required>
                    </div>

                    <button type="submit" name="valider" class="btn btn-primary">ajouter un autre article</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>



<?php
// if(isset($_POST['valider']))
// {
    if(isset($_POST['titre']) AND 
    isset($_POST['description']) AND
     isset($_POST['prix']) AND 
     isset($_POST['image']) )
{
 
    require_once "Articles.php";

    $entry = new Articles;
    $entry->titre = $_POST['titre'];
    $entry->description= $_POST['description'];
    $entry->prix = $_POST['prix'];
    $entry->image = $_POST['image'];
    $entry->save();
     
    }
// }

?>
