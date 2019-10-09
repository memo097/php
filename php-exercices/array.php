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
    $mois = array ('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre');
    print_r($mois);
    echo $mois[2];
    echo $mois[5];
    $mois[7]='Août';
    print_r($mois);
    ?>
    <hr>
    <?php 
    $departements = array(
        01 => 'Ain',
        03 => 'Allier',
        07 => 'Ardèche',
        15 => 'Cantal',
        26 => 'Drôme',
        38 => 'Isère',
        42 => 'Haute-Loire',
        63 => 'Puy-de-Dôme',
        69 => 'Rhône',
        73 => 'Savoie',
        74 => 'Haute-Savoie'
    );
    print_r($departements);
    echo $departements[69];
    $departements[57]='Metz';
    print_r($departements);
    foreach($departements as $cle => $lieux){
        echo 'Le département' . $lieux . ' a le numéro' . $cle . '.' . '<br>';
    }
    ?>
    <hr>
    <?php 
    $inviter =array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
    foreach ($inviter as $invitation){
        echo 'Salut ' . $invitation . ', devine quoi ! Je me marie dans samedi dans deux semaines ! J\'espère te compter parmi les invités ! Gros bisous :)' . '<br>';
    }
    
    ?>
    
</body>
</html>