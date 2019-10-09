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
    $temperature  = 34; // Joue avec cette valeur pour tester ton script.

    if( $temperature > 21 ) {
      // code à exécuter si la condition est TRUE
        $vetement_du_jour = "T-shirt";
      
    }elseif ( $temperature > 10 ){
        $vetement_du_jour = "Pull-over";
    
    }else {
       // code à exécuter si toutes les conditions précédentes sont FALSE
        $vetement_du_jour = "Pull-over, écharpe et bonnet";
    }
     
    echo $vetement_du_jour;
    ?><br>
    <?php 
    $chambre_est_sale = true;
    if ( $chambre_est_sale = true){
        echo "Range ta chambre, on dirait la cage d'un bonobo!";
    } else {
        echo "Ta chambre est trop propre, vis un peu!";
    }
    ?><br>
    <?php
    $chambre_est_sale = 'dégoutante';
    if ( $chambre_est_sale == 'dégoutante'){
    echo "Burg t'es degeux";
    }elseif ( $chambre_est_sale == 'sale'){
        echo "Range ta chambre.";
    }elseif ( $chambre_est_sale == 'en ordre'){
        echo "Clean !";
    }elseif ( $chambre_est_sale == 'immaculé'){
        echo "Ça brille !!!";
    }elseif ( $chambre_est_Sale == 'maniaque'){
        echo "Ça fait pas un peut trop ?";
    }else{
        echo "Je comprend pas ";
    }
    ?>
    <br>
    <?php
    $heure = 06.00;
    if ($heure >= 05.00 and $heure <= 09.00){
        echo 'Bonjour il est '. $heure . ' h!';
    }elseif ($heure >= 09.01 and $heure <= 12.00){
        echo "Bonne journée !";
    }elseif ($heure >= 12.01 and $heure <= 16.00){
        echo "Bon après-midi !";
    }elseif ($heure >= 16.01 and $heure <= 21.00){
        echo "Bonne soirée !";
    }elseif ($heure >= 21.01 or $heure <= 04.59){
        echo "Bonne nuit !";
    }else{
        echo "What ?";
    }
    ?>
    <br>
    <form action="conditions.php" method="get">
    Qu'elle âge as-tu : <input type="number" name="ages"> <input type="submit">
    </form>
    <?php
    if($_GET['ages'] >= '115'){
        echo "Wow! Toujours vivant?";
    }elseif($_GET['ages'] >='18' AND $_GET['ages'] < '115'){
        echo "Salut l'adulte!";
    }elseif($_GET['ages'] >='12' AND $_GET['ages']<'18'){
        echo "Salut l'ado!";
    }elseif($_GET['ages'] >='0' AND $_GET['ages'] <'12'){
        echo "Salut petit!";
    }else{
        echo "Tu ne connais pas ton âge ??";
    }
    ?>
    <br>
    <form action="conditions.php" method="get" id="form2">
        Qu'elle âge as-tu : <input type="number" name="age"><input type="submit" form="form2"><br>
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female
    </form>
    <?php 
    if($_GET['age'] >= '115' ){
        echo "Wow! Toujours vivant?";
    }elseif($_GET['age'] >='18' AND $_GET['age'] < '115' AND $_GET['gender'] == 'male'){
        echo "Salut Mec !";
    }elseif($_GET['age'] >='18' AND $_GET['age'] < '115' AND $_GET['gender'] == 'female'){
        echo "Salut Meuf !";
    }elseif($_GET['age'] >='12' AND $_GET['age']<'18' AND $_GET['gender'] == 'male'){
        echo "Salut l'adolescent !";
    }elseif($_GET['age'] >='12' AND $_GET['age']<'18' AND $_GET['gender'] == 'female'){
        echo "Salut l'adolescente !";
    }elseif($_GET['age'] >='0' AND $_GET['age'] <'12' AND $_GET['gender'] == 'male'){
        echo "Salut gamin !";
    }elseif($_GET['age'] >='0' AND $_GET['age'] <'12' AND $_GET['gender'] == 'female'){
        echo "Salut gamine !";
    }else{
        echo "Tu ne connais pas ton âge ??";
    }
    ?>




    <form action="conditions.php" method="get" id="form3">
    Qu'elle âge as-tu : <input type="number" name="age"><br>
    Qu'elle est ton sexe : 
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female<br>
    Parles-tu Anglais :
    <input type="radio" name="langue" value="true"> Oui
    <input type="radio" name="langue" value="false"> Non<br>
    <input type="submit" form="form3">
    </form>
    <?php 
    if($_GET['gender'] == 'male'){
    if($_GET['langue'] == 'true'){
    if($_GET['age'] >= '115'){
        echo "Wow! Still alive, old man?";
    }elseif($_GET['age'] >='18' AND $_GET['age'] < '115'){
        echo "Hello Sir!";
    }elseif($_GET['age'] >='12' AND $_GET['age']<'18'){
        echo "Hello Teenage boy!";
    }elseif($_GET['age'] >='0' AND $_GET['age'] <'12'){
        echo "Hello boy!";
    }else{
        echo "Don't you know how old you're ?";
}}else{
    if($_GET['langue'] == 'false'){
        if($_GET['age'] >= '115'){
            echo " Wow ! Vous êtes toujours en vie vieille homme ?";
        }elseif($_GET['age'] >='18' AND $_GET['age'] < '115'){
            echo "Bonjour Monsieur";
        }elseif($_GET['age'] >='12' AND $_GET['age']<'18'){
            echo "Salut jeune homme!";
        }elseif($_GET['age'] >='0' AND $_GET['age'] <'12'){
            echo "Salut gamin!";
        }else{
            echo "Toujours pas née ?!";
        }
    }
}}
    else{
        if($_GET['langue'] == 'true'){
            if($_GET['age'] >= '115'){
                echo "Wow! Still alive, old lady?";
            }elseif($_GET['age'] >='18' AND $_GET['age'] < '115'){
                echo "Hello Lady!";
            }elseif($_GET['age'] >='12' AND $_GET['age']<'18'){
                echo "Hello Teenage girl!";
            }elseif($_GET['age'] >='0' AND $_GET['age'] <'12'){
                echo "Hello girl!";
            }else{
                echo "Don't you know how old you're ?";
        }}else{
            if($_GET['age'] >= '115'){
                echo "Wow! Toujours en vie la vieille??";
            }elseif($_GET['age'] >='18' AND $_GET['age'] < '115'){
                echo "Bonjour madame!";
            }elseif($_GET['age'] >='12' AND $_GET['age']<'18'){
                echo "Salut meuf";
            }elseif($_GET['age'] >='0' AND $_GET['age'] <'12'){
                echo "Salut gamine!";
            }else{
                echo "Toujours pas née ?";
        }}}
    ?>

    <form action="conditions.php" method="get" id="form4">
    Qu'elle est ton score ? :
    <input type="number" name="score" min="0" max="20">
    <input type="submit" form="form4">
    </form>
    <?php 
    if($_GET['score']>='19'){
        echo "Police ! Arrêtez ce tricheur !";
    }elseif($_GET['score']>='15' AND $_GET['score']<='18'){
        echo "Bravo!";
    }elseif($_GET['score']>='11' AND $_GET['score'] <='14'){
        echo "C'est pas mal";
    }elseif($_GET['score']== '10'){
        echo "Tout juste!";
    }elseif($_GET['score']>='6' AND $_GET['score'] <='9'){
        echo "Ce travail n'est pas terrible";
    }else{
        echo "Ce travail est nul";
    }
    ?>
</body>
</html>