<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
</head>
<body>
    <h1>Exercice5: Initialisez une variable à 200. Tant que cette variable est supérieure à 0, décrémentez avec un pas de 12.</h1>
    <?php
        // for ($i=200; $i >0 ; $i-= 12) { 
        //         echo $i ."<br>";      
        // }
        $i = 200;
        while ($i > 0) {
           $i-= 12;
           echo "i décremente avec un pas de 12 : " . $i ."<br>";
        }
    ?>
</body>
</html>