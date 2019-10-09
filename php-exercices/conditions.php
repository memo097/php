<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $age = 22;
    if($age >=18){
        echo "Vous êtes majeur.";
    }else {
        echo "Vous êtes mineur.";
    }
    ?>
    <hr>
    <?php 
    $IsEasy = false;
    if($IsEasy == true){
        echo "C'est facile !!";
    }else {
        echo "C'est difficile !!!";
    }
    ?>
    <hr>
    <?php 
    $age = 22;
    $genre = 'homme';
    if($age >= '18' && $genre == 'homme'){
        echo "Vous êtes majeur Monsieur";
    }elseif($age >= '18' && $genre == 'femme'){
        echo "Vous êtes majeur Madame";
    }elseif($age < '18' && $genre =='homme'){
        echo "T'es mineur gamin";
    }elseif($age < '18' && $genre =='femme'){
        echo "T'es mineur gamine";
    }else{
        echo "je ne comprend pas ";
    }
    ?>
    <hr>
    <?php
    $magnitude = 7;
    switch($magnitude){
        case 1:
        echo "Micro-séisme impossible à ressentir.";
        break;
        case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
        case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
        case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;
        case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;
        case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
        case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
        case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
        case 9:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
        break;
    }
    ?>
    <hr>
    <?php 
    $genre = 'homme';
    if($genre != 'femme'){
        echo 'C\'est une développeuse !!!';
    }else{
        echo 'C\'est un développeur !!!';
    }
    ?>
    <hr>
    <?php 
    $age = 22;
    if($age >='18'){
        echo 'Tu es majeur';
    }else {
        echo 'Tu es mineur';
    }
    ?>
    <hr>
    <?php 
    $maVariable = false;
    if($maVariable == true){
        echo 'c\'est ok !!';
    }else{
        echo 'c\'est pas bon !!!';
    }
    ?>
    <hr>
    <?php 
    $test = true;
    if($test){
        echo 'c\'est ok !!';
    }else {
        echo 'c\'est pas bon !!!';
    }
    ?>
</body>
</html>