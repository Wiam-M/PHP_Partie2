<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
</head>
<body>
    <h1>Exercice3: Créez une variable initialisé à 1. Tant que cette variable n'a pas atteint 15, affichez 'On y est presque'.</h1>
    <?php
    // for($i=1;  $i<15 ;$i++){
    //     echo $i."<br>". " On y est presque ";
    // }
    $i = 1;
    while($i < 15){
        echo  $i. " On y est presque "."<br>";
        $i++;
    }
    ?>
</body>
</html>