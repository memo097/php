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
    $pays = array ('Maman', 'Papa' , 'Frere', 'Soeur', 'Moi', 'Petit Frere');
    print_r($pays);
    $plats = ['Soupe au Poulet','Steak frite','Pâtes'];
    print_r($plats);
    $anime = ['Hunter x Hunter','Demon Slayer','Death Note','One Piece','Naruto'];
    echo $anime[3];
    ?>
    <br><br>
    <?php 
    $moi = array (
        'prenom' => 'Mehmet',
        'nom' => 'Ozcan',
        'age' => 22,
        'hobbies' => array('pc','tv','running'),
    );
    print_r($moi);
    ?>
    <br><br>
    <?php 
    $web_development = array (
        'frontend' => array(),
        'backend' => array(),
    );
    array_push($web_development['frontend'],'xhtml');
    array_push($web_development['backend'],'ruby');
    array_push($web_development['frontend'],'css');
    $web_development['frontend'][0]='html';
    array_push($web_development['backend'],'flash');
    array_push($web_development['frontend'],'javascript');
    unset($web_development['backend'][1]);
    ?>
    <pre><?php print_r($web_development) ?></pre>
</body>
</html>