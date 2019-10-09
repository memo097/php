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
    $sexe = 'féminin';
    $age = '23';
    if ($age >='21' and $age <= '40'){
    if ($sexe == 'féminin'){
        echo "Bonjour, bienvenue parmi nous!";
    }else { echo"Désolé, vous ne remplissez pas les critères de sélection.";
    }}else{
        echo "Désolé, vous ne remplissez pas les critères de sélection.";
    }
    ?>

    <?php 
    $sexe = 'male';
    $age = '23';
    if (($age >='21' and $age <='40') && ($sexe == 'féminin')){
        echo "Bonjour, bienvenue parmis nous!";
    }echo "Désolé, vous ne remplissez pas les critères de sélection.";
    ?>
</body>
</html>