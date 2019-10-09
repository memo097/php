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
    if(isset($_GET['nom'])&& isset($_GET['prenom'])){
        echo 'Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'];
    }
    ?>
    <hr>
    <?php 
    if(isset($_GET['age'])){
        echo 'Bonjour ' . $_GET['age'];
    }else{
        echo 'La variable âge n\'existe pas ';
    }
    ?>
    <hr>
    <?php 
    if(isset($_GET['dateDebut'])&& isset($_GET['dateFin'])){
        echo 'Bonjour nous sommes le ' . $_GET['dateDebut'] . ' les cours prennent fin le ' . $_GET['dateFin'];
    }
    ?>
    <hr>
    <?php 
    if (isset($_GET['langage'])&& isset($_GET['serveur'])){
        echo 'Bonjour tu es dans le serveur ' . $_GET['serveur'] . ' et tu utilise le langage ' . $_GET['langage'];
    }
    ?>
    <hr>
    <?php 
    if (isset($_GET['semaine'])){
        echo 'Bonjour ' . $_GET['semaine'] . ' semaine se sont écouler depuis le début de la formation';
    }
    ?>
    <hr>
    <?php 
    if (isset($_GET['batiment'])&& isset($_GET['salle'])){
        echo 'Nous sommes dans le ' . $_GET['batiment'] . ' eme batiment dans la ' . $_GET['salle'] . ' eme salle';
    }
    ?>
</body>
</html>