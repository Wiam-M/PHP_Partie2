<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice1</title>
</head>
<body>
    <h1>Exercice1: Créez une boucle qui affiche les nombres de 0 à 10.</h1>
    <?php
    // for ($i=0; $i <=10 ; $i++) { 
    //    echo " ".$i;
    // }
    $i = 0;
    while ($i <= 10) {
        ?>
        <p><?= $i?></p>
        <?php $i ++;
       
    }
    ?>
</body>
</html>