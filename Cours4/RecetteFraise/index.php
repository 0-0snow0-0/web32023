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
        //echo "Connection successfully";

        $conn->query('SET NAMES utf8');
        $sql = "SELECT * FROM fraise";
        $result = $conn->query($sql);
    
        if($result->num_rows > 0){ 
    ?>  
        <table class="table table-sm table-dark">
            <thead> 
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Nombre d'ingrediant</th>
                <th scope="col">Photo</th>
                <th scope="col">Dificulté</th>
                </tr>
            </thead>
            <tbody>
    <?php
            while($row = $result->fetch_assoc()){
                
            // echo "<br>". "id: " . $row["id"]. " -Nom: " . $row["nom"]. " -Numéro d'ingrediant: " . $row["no_ingrediant"]. " -Dificulté: " . $row["dificulte"]. '<img src ="' . $row["photo"] . '" height="100" width="100"/>'. "<br>";
            
                echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["nom"]."</td>";
                    echo "<td>".$row["no_ingrediant"]."</td>";
                    echo "<td>".'<img src ="' . $row["photo"] . '" height="100" width="100"/>'."</td>";
                    echo "<td>".$row["dificulte"]."</td>";
                echo "</tr>";
                
            }
        }else{
            echo "0 results";
        }
        $conn->close();

    ?>

            </tbody>
        </table>
        <button type="button" class="btn btn-primary"><a href="ajouter.php?id=2" class="text-decoration-none text-white">Ajouter</a></button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>