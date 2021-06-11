<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>
<body>
    <h1>Exercice4: Initialisez une variable à 1. Tant que cette variable est inférieure à 100, incrémentez avec un pas de 15.</h1>
    <?php
 
    // for ($i=1; $i <100 ; $i+= 15) { 
    //    echo "le nombre est: ". $i ."<br>";
    // }

    $i = 1;
    while($i <= 100) {
      echo "le nombre est: $i <br>";
      $i+=15;
    }
     ?>
    <!-- <h2> <?= $i?> </h2> -->

  
</body>
</html>