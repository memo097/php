<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="conditions-switch.php" method="post" id="form5">
    Qu'elle est ton score ? :
    <input type="number" name="score" min="0" max="20">
    <input type="submit" form="form5">
    </form>

<?php 
$note = $_POST['score'];
    switch (true){
        case($note == '1' || $note == '2' || $note  == '3'):
            echo "Ce travail est nul";
            break;
        case($note =='4' || $note == '5'):
            echo "Ce travail est pas foufou";
            break;
        case($note == '6' || $note == '7' || $note  == '8' || $note == '9'):
            echo "Ce travail n'est pas terrible";
            break;
        case($note == '10'):
            echo "Tout juste!";
            break;
        case($note == '11' || $note == '12' ||      $note == '13' || $note == '14'):
            echo "C'est pas mal.";
            break;
        case($note == '15' || $note == '16' || $note == '17' || $note == '18'):
            echo "Bravo!";
            break;
        case($note == '19' || $note == '20'):
            echo "Police!Arrêtez ce tricheur!";
            break;
    }
?>


</body>
</html>