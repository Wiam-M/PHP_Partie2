<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus</title>
</head>
<body>
<h1>Bonus: Créez un tableau contenant les 12 mois de l'année. Afficher ces mois dans un "select".</h1>

<select>
      <?php
      $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
      $tablength = count($tab);
      for($i = 0; $i < $tablength; $i++){
        ?>
        <option><?= $tab[$i] ?></option>
        <?php
      }
      ?>
    </select>

<select>
    <?php
        $monthArray = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
        foreach ($monthArray as $value) {
            ?>
                <option value="valeuri"><?= $value?></option>
            <?php
        };
    ?>
      </select>
</body>
</html>