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
    $number = 0;
    while($number <=10){
        echo $number++ ."<br>";
    }
    ?>
    <hr>
    <?php 
    $first = 0;
    $second = 3;
    while($first <= 20){
        $resultat = $first * $second;
        $first++;
        echo $resultat . "<br>";
    }
    ?>
    <hr>
    <?php 
    $first = 100;
    $second = 33;
    while($first >= 10){
        $resultat = $first * $second;
        $first--;
        echo $resultat . "<br>";
    }
    ?>
    <hr>
    <?php 
    $exc = 1;
    while($exc <=10){
        echo $exc . "<br>";
        $exc = $exc + ($exc/2);
    }
    ?>
    <hr>
    <?php 
    for($combien=1;$combien<15;$combien++){
        echo $combien;
        echo " On y arrive presque." . "<br>";
    }
    ?>
    <hr>
    <?php 
    for($combien=20;$combien>0;$combien--){
        echo $combien;
        echo " C'est presque bon." . "<br>";
    }
    ?>
    <hr>
    <?php 
    for($combien=1;$combien<100;){
        echo $combien = $combien + 15;
        echo " On tient le bon bout." . "<br>";
    }
    ?>
    <hr>
    <?php 
    for($combien=200;$combien>0;){
        echo $combien = $combien -12;
        echo " Enfin !!!!." . "<br>";
    }
    ?>
</body>
</html>