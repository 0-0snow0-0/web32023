<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php 
     $servername = "localhost";
     $username ="root";
     $password = "root";
     $db ="recette";
     $conn = new mysqli($servername, $username, $password, $db);

     if($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     echo "Connection successfully";

     $sql = "INSERT INTO fraise (nom, no_ingrediant,photo, dificulte)
        VALUES ('','','','')";
        $nom = $no_ingrediant = $photo = $dificulte = "";
    
        $nomErreur = $no_ingrediantErreur = $photo2Erreur = $dificulte ="";
    
        $erreur = false;

        if($_SERVER["REQUEST_METHOD"] != "POST" || $erreur == true) {
            echo "Erreur ou 1ere fois";
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="row g-0">
            <div>
                <div class="offset-3 col-md-6 text-center mt-5" >
                    <h3 class="fw-light">Ajout d'une nouvelle recette aux fraises</h3>
                </div>
                
                <div class="offset-3 col-md-6">
                    <label for="nomL" class="form-label">Nom de la recette</label>
                    <input type="text" id="nomL" name="nom" class="form-control" placeholder="Pavlova aux fraises"><br>
                </div>

                <div class="offset-3 col-md-6">
                    <label for="no_ingrediantL" class="form-label">Nombre d'ingrediant</label>
                    <input type="number" id="no_ingrediantL" name="no_ingrediant" class="form-control" placeholder="0" min="1" max="30"><br>
                </div>
                
                <div class="offset-3 col-md-6">
                    <label for="imgL" class="form-label">Image du produit</label>
                    <input type="text" id= "imgL" name="image" class="form-control" placeholder="URL"><br>
                </div>
                <div class="offset-3 col-md-6">
                    <label for="dificulteL" class="form-label">Niveau de difficulté</label>
                    <select class="form-select" aria-label="Default select example" id="dificulteL" name="dificulte">
                        <option selected class="form-control">Selectionez la difficulté</option>
                        <option value="Très facile">Très facile</option>
                        <option value="Facile">Facile</option>
                        <option value="Moyen">Moyen</option>
                        <option value="Intermédiaire">Intermédiaire</option>
                        <option value="Expert ou Difficile">Expert ou Difficile</option>
                    </select>
                </div>

                <div class="offset-3 col-md-6 my-4">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </form>
        <?php
        }

        function test_input($data){
            $data = trim($data);
            $data = addslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>