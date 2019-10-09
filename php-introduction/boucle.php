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
    $nombre_de_lignes = 1;
    while($nombre_de_lignes<=120){
        echo '' . $nombre_de_lignes . ' : Boucle while 120 lignes' . '<br>' . '';
        $nombre_de_lignes++;
    }
    ?>
    <?php 
    for($nombre_de_ligne=1; $nombre_de_ligne<=120; $nombre_de_ligne++){
        echo '' . $nombre_de_ligne . ' : Boucle for 120 lignes' . '<br>' . '';
    }
    ?>
    <?php 
    $nombre = array('un','deux','trois','quatre','cinque','six','sept','huit','neuf','dix');
    foreach($nombre as $chiffre){
        echo $chiffre . '<br>';
    }
    ?>
    <?php 
    $pays = array (
        'BE'=>'Belgique',
        'FR'=>'France',
        'A'=>'Allemange',
        'NL'=>'Pays-Bas',
        'TR'=>'Turquie',
        'TU'=>'Tunisie',
        'RU'=>'Russie',
        'JP'=>'Japon',
        'CO'=>'Corée',
        'CH'=>'Chine'
    );
    echo'<select>';
    foreach($pays as $select => $row){
        echo '<option value=' . $row . '>' . $row . '</option>';
    }
    echo'</select>';
    ?>

    
</body>
</html>