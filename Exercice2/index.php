<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice2</title>
</head>
<body>
    <h1>Exercice2: Créez deux variables. L'une initialisée à 0 et l'autre avec un nombre aléatoire de 1 à 100. Tant que la variable n'a pas atteint 20, multiplier la première variable par la deuxième est afficher le résultat.</h1>
    <?php
    $rand = random_int(1, 100);
    $var = 0;
    while ($var <= 20) {
       $var++;
       $product = $rand * $var;
       echo "<br>" . $product;

    }
    // for ($i=0; $i < 20 ; $i++) { 
    //    $product = $rand * $i;
    //    echo "<br>" . $product;
    // };
   
    ?>
</body>
</html>