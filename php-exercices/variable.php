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
    $nom = 'Ozcan';
    $prenom = 'Mehmet';
    $age = 22;
    echo 'Bonjour ' . $prenom . ', enfant de la famille ' . $nom . ' ayant atteint de level ' . $age . '!'
    ?>
<hr>
    <?php
    $km = 1;
    echo $km . "<br>";
    $km = 3;
    echo $km . "<br>";
    $km = 125;
    echo $km . "<br>";
    ?>
    <hr>
    <?php 
    $prenom = 'Mehmet';
    $age = 22;
    $poid = 60.5;
    $sport = false;
    echo 'Je m\'appelle ' . $prenom . ' j\'ai ' . $age . ' ans. Je pèse ' . $poid . ' kg et je pratique pas de sport' . $sport .'.';    
    ?>
    <hr>
    <?php 
    $addition = 3 + 4;
    echo $addition . "<br>";
    $multiplication = 5 * 20;
    echo $multiplication . "<br>";
    $division = 45 / 5;
    echo $division . "<br>";
    ?>
    <hr>
    <?php 
    $tshirt = 785;
    $ristourne = 30 / 100;
    $prixreduction = $tshirt * $ristourne;
    $prixtotal = $tshirt - $prixreduction;
    echo 'Le prix de départ est de ' . $tshirt . ' euros. Le prix subbit une ristourne de 30% donc de ' . $prixreduction . ' euros. Le prix total a payer est de ' . $prixtotal . ' euros.';
    ?>

</body>
</html>