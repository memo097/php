<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action='excuse.php' method='post'>
    Nom de l'enfant : <input type='texte' name='enfant' min='1' max='20'><br><br>
    Nom de l'institutrice : <input type='texte' name='institutrice' minlength='1' maxlength='10'><br><br>
    Raison de l'absence : <br>
    <input type='radio' name='raison' value='maladie'> maladie<br>
    <input type='radio' name='raison' value='décès'> décès <br>
    <input type='radio' name='raison' value='activité'> activité<br>
    <input type='radio' name='raison' value='personnelle'> personnelle<br>
    <input type='submit'>
    </form>
   <?php
    if($_POST['raison']== 'maladie'){
        echo 'Bonjour, '. $_POST['institutrice'] . '. ' . $_POST['enfant'] . ' ne va pas pouvoir se presenter en cours aujourd\'hui parce qu\'il est malade.';
    }elseif($_POST['raison']== 'décès'){
        echo 'Bonjour, '. $_POST['institutrice'] . '. ' . $_POST['enfant'] . ' à eu un décès et donc ne va pas pouvoir se presenter en cours aujourd\'hui.';
    }elseif($_POST['raison']== 'activité'){
        echo 'Bonjour, '. $_POST['institutrice'] . '. ' . $_POST['enfant'] . ' à un concours de danse aujourd\'hui et ne va pas pouvoir se presenter en cours.';
    }elseif($_POST['raison']== 'personnelle'){
        echo 'Bonjour, '. $_POST['institutrice'] . '. ' . $_POST['enfant'] . ' à des problèmes personnelles et ne va pas pouvoir se presenter en cours aujourd\'hui.';
    }


   ?> 
</body>
</html>