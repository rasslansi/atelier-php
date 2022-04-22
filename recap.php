<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Recap</title>
</head>
<body>
    <div class="container">
        <div class="row welcome">
            <h1>This is your order</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title welcome">
                    <?php include "others.php";
                    echo "#Order N°";
                    echo randomNumber();
                    ?>
                </h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?php
                        echo "nom : ";
                        echo $_POST['nom'];
                        ?>
                    </li>
                    <li class="list-group-item">
                        <?php
                        echo "quantité : ";
                        echo $_POST['quantity'];
                        ?>
                    </li>
                    <li class="list-group-item">
                        <?php
                        echo "adresse : ";
                        echo $_POST['adresse'];
                        ?>
                    </li>
                    <li class="list-group-item">
                        <?php
                        echo "type : ";
                        echo $_POST['type'];
                        ?>
                    </li>
                    <li class="list-group-item">
                        <?php 
                        echo "ingredients : ";
                        for($i = 0; $i < count($_POST['ingred']); $i++) {
                            echo $_POST['ingred'][$i];
                            echo " , ";
                        }
                        ?>
                        
                    </li>
                    <li class="list-group-item welcome">
                        <?php
                        echo "prix = ";
                        if($_POST['quantity'] >10) {
                            echo $_POST['quantity'] * 4* 0.9;
                        } else {
                            echo $_POST['quantity'] * 4;
                        }
                        echo "dt";

                        ?>
                    </li>
                </ul>  
            </div>


        </div>
    </div>
</body>
</html>