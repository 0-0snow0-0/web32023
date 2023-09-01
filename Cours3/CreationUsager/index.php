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
    //les variables du formulaire vide
        $nom = $pswd = $pswd2 = $courriel = $image = $sexe = $dateNaissance = "";
        $transport1 = $transport2 = $transport3 = $transport4 = false;
    //les variables d'erreurs vides
        $nomErreur = $pswdErreur = $pswd2Erreur = $courrielErreur = $imageErreur = $sexeErreur = $dateNaissanceErreur = $transport1Erreur = $transport2Erreur = $transport3Erreur = $transport4Erreur ="";
    //La variable qui permet de savoir s'il y a au moins une erreur dans le formulaire
        $erreur = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "POST";

            if(empty($_POST['nom'])){
                $nomErreur = "Le nom est requis";
                $erreur = true;
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "POST";

            if(empty($_POST['pswd'])){
                $pswdErreur = "Le mot de passe est requis";
                $erreur = true;
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "POST";

            if(empty($_POST['pswd2'])){
                $pswd2Erreur = "La confirmation du mot de passe est requise";
                $erreur = true;
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "POST";

            if(empty($_POST['courriel'])){
                $courrielErreur = "Le courriel est requis";
                $erreur = true;
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "POST";

            if(empty($_POST['image'])){
                $imageErreur = "L'image est requise";
                $erreur = true;
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "POST";

            if(empty($_POST['sexe'])){
                $sexeErreur = "Le sexe est requis";
                $erreur = true;
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "POST";

            if(empty($_POST['dateNaissance'])){
                $dateNaissanceErreur = "La date de naissance est requise";
                $erreur = true;
            }
        }

        //transport
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "POST";

            if(empty($_POST['transport1'])){
                $transport1Erreur = "Le moyen de transport est requis";
                $validationTransport = true;
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "POST";

            if(empty($_POST['transport2'])){
                $transport2Erreur = "Le moyen de transport est requis";
                $validationTransport = true;
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "POST";

            if(empty($_POST['transport3'])){
                $transport3Erreur = false;
                $validationTransport = true;
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "POST";

            if(empty($_POST['transport4'])){
                $transport4Erreur = "Le moyen de transport est requis";
                $validationTransport = true;
            }
        }

        if($_SERVER["REQUEST_METHOD"] != "POST" || $erreur == true) {
            echo "Erreur ou 1ere fois";
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="row g-0">
        <div>
            <div class="offset-3 col-md-6 text-center mt-5" >
                <h3 class="fw-light">Création d'utilisateur</h3>
            </div>
            
            <div class="offset-3 col-md-6">
                <label for="nomL" class="form-label">Nom</label>
                <input type="text" id="nomL" name="nom" class="form-control" placeholder="Davy Charles"><br>
            </div>

            <div class="offset-3 col-md-6">
                <label for="pswdL" class="form-label">Mot de passe</label>
                <input type="password" id="pswdL" name="pswd" class="form-control" placeholder="••••••••"><br>
            </div>

            <div class="offset-3 col-md-6">
                <label for="pswd2L" class="form-label">Confirmation de mot de passe</label>
                <input type="password" id="pswd2L" name="pswd2" class="form-control" placeholder="••••••••"><br>
            </div>

            <div class="offset-3 col-md-6">
                <label for="courrielL" class="form-label">Adresse courriel</label>
                <input type="email" id="courrielL" name="courriel" class="form-control" placeholder="example@courriel.com"><br>
            </div>

            <div class="offset-3 col-md-6">
                <label for="imgL" class="form-label">Image avatar</label>
                <input type="text" id= "imgL" name="image" class="form-control" placeholder="URL"><br>
            </div>

            <div>
                <div class="offset-3 col-md-6">
                    <label for="sexe" class="form-label">Sexe</label>  
                </div>

                <div class="offset-4 col-md-5">
                    <input type="radio" id="masculin" name="sexe" value="Masculin">
                    <label for="masculin">Masculin</label>  <br>
                    <input type="radio" id="feminin" name="sexe" value="Feminin">
                    <label for="feminin">Féminin</label>    <br>
                    <input type="radio" id="nonGenre" name="sexe" value="NonGenre">
                    <label for="nonGenre">Non genré</label> <br>
                </div>
            </div>
            
        
            <div class="offset-3 col-md-6">
                <label for="dateNaissance" class="form-label">Date de naissance</label>
                <input type="date" name="dateNaissance" class="form-control"> <br>
            </div>

            <div>
                <div class="offset-3 col-md-6">
                    <label for="transort" class="form-label">Transport</label>  
                </div>

                <div class="offset-4 col-md-5">
                    <input type="checkbox" id="t1" name="ransport1" value="Auto">
                    <label for="t1"> Auto </label> <br>
                    <input type="checkbox" id="t2" name="transport2" value="Autobus">
                    <label for="t2"> Autobus </label> <br>
                    <input type="checkbox" id="t3" name="transport3" value="Marche">
                    <label for="t3"> Marche </label> <br>
                    <input type="checkbox" id="t4" name="transport4" value="Vélo">
                    <label for="t4"> Vélo </label> <br>
                </div>
            </div>
            

            <div class="offset-3 col-md-6 my-4">
                <input type="submit" >
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