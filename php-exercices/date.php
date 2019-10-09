<?php 
    if(isset($_GET['mois'])&& isset($_GET['annee'])){

    $mois=$_GET['mois'];
    $annee=$_GET['annee'];
    $jour = 1;
    $dateact = strtotime($mois-$jour-$annee);
    $date="$annee-$mois-$jour";
    $nbjour=cal_days_in_month(CAL_GREGORIAN,$mois,$annee);
    $numJour = date('N',$dateact);
    echo $numJour;
    // echo $date;
    // echo $dateact;
    $list = array(
    "1" => "Janvier",
    "2" => "Fevrier",
    "3" => "Mars",
    "4" => "Avril",
    "5" => "Mai",
    "6" => "Juin",
    "7" => "Juillet",
    "8" => "Aout",
    "9" => "Septembre",
    "10" => "Octobre",
    "11" => "Novembre",
    "12" => "Decembre",
);
$listJour=array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    table, th, td {
    border: 1px solid black;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="date.php">
    <select name="mois">
    <option value="1">Janvier</option>
    <option value="2">fevrier</option>
    <option value="3">mars</option>
    <option value="4">avril</option>
    <option value="5">mai</option>
    <option value="6">juin</option>
    <option value="7">Juillet</option>
    <option value="8">Aout</option>
    <option value="9">Septembre</option>
    <option value="10">Octobre</option>
    <option value="11">Novembre</option>
    <option value="12">Decembre</option>
    </select>
    Année
    <input type="number" name="annee" min="1" max="2020">
    <input type="submit">
    <table>
        <thead>
            <tr>
            <th></th>
            <th></th>
            <th></th>
            <th><?php echo "$list[$mois]-$annee" ?>
            <th></th>
            <th></th>
            <th></th>
            </tr>
            <tr><?php foreach ($listJour as $day){
                echo "<th>".$day."</th>";}?>
            </tr>
            <tr>
                <?php 
                switch ($numJour){
                    case 1:
                    echo "";
                    break;
                    case 2:
                    echo "<th></th>";
                    break;
                    case 3:
                    echo "<th></th> <th></th>";
                    break;
                    case 4:
                    echo "<th></th> <th></th> <th></th>";
                    break;
                    case 5:
                    echo "<th></th> <th></th> <th></th> <th></th>";
                    break;
                    case 6:
                    echo "<th></th> <th></th> <th></th> <th></th> <th></th>";
                    break;
                    case 7:
                    echo "<th></th> <th></th> <th></th> <th></th> <th></th> <th></th>";
                    break;
                }
                for($b = 1; $b <=$nbjour; $b ++){
                    echo "<th>". $b . "</th>";
                    if($numJour % 7 == 0){
                        echo "</tr> <tr>";
                    }
                    $numJour++;
                }
                ?>
            </tr>
        </thead>
    </table>
    
    
    <hr>
    <?php 
    
    $date=new DateTime('2016-08-02 15:00');
    echo $date->format('l j F Y H:i');


    ?>
    <hr>
    <?php 
    
    $date= strtotime('2016-05-16');
    $datemtn=time();
    $datediff = $datemtn - $date;
    echo round($datediff/(60*60*24));
    ?>
    <hr>
    <?php 
    
    $nombre = cal_days_in_month(CAL_GREGORIAN, 02, 2017);
    echo $nombre
    ?>
    <hr>
    <?php 
    $todaydate = '2019-10-08';
    $newdate = new DateTime($todaydate);
    $newdate->add(new DateInterval('P20D'));
    $futurdate=$newdate->format('Y-m-d');
    echo $futurdate
    ?>
    <hr>
    <?php 
    $todaydate = '2019-10-08';
    $newdate = new DateTime($todaydate);
    $newdate->modify(' - 20 days ');
    $futurdate=$newdate->format('Y-m-d');
    echo $futurdate
    ?>
    <hr>
    <?php 
    
    
    ?>
</body>
</html>