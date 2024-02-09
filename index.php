<?php

// question 1

$name = "Enzo";

// question 2

$age = 18;
$weight = 57.8;
$height = 1.77;

// question 4

$bmc = 20;
$bmc = $weight/($height * $height);


// question 5 

$myInt = 1548;


// question 7

$myColor = 'blue';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> <?= 'Bonjour '.$name.' comment vas-tu? tu as'.$age.' ans. Tu pèses '.$weight * 1000,' grammes et tu mesures '.$height.' mètre.<br>Ton IMC est  de '.$bmc.' <br>Voici mon nombre '.$myInt ?></h1>

    <p><?= 'Ma couleur en majuscule : '.strtoupper($myColor).'<br>Ma couleur en minuscule : '.strtolower($myColor) ?></p>

    <style></style>

</body>

</html>