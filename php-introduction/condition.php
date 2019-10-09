<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $temperature = 18;?>
    <?php
    if( $temperature >= 15 ) {
        // code à exécuter si la condition est TRUE
        echo $vetement_du_jour = "T-shirt";
       } else {
         // code à exécuter si la condition est FALSE
         echo $vetement_du_jour = "Pull-over";
       }
    ?>
    <?php $langue='français'; $age = 22;?>
    <?php if ($langue == 'français' and $age >= 18) {
        echo 'Bonjour Monsieur';
    } else {
        echo 'Aurevoir';
    }
    ?>
    
</body>
</html>