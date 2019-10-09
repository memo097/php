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
    $genre = 'male';
    $bonjour = 'Bonjour Monsieur';
    if($genre == 'male'){
        echo $bonjour;
    }else{
        echo "Bonjour Madame ";
    }
    ?>
    <?php 
    $genre = 'femelle';
    $bonjour = ($genre == 'male') ? 'Bonjour Monsieur' : 'Bonjour Madame';
    echo $bonjour;
    ?>
</body>
</html>