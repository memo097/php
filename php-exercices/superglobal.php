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
// session_start();
// $_SESSION['nom']="Ozcan";
// $_SESSION['prenom']="Mehmet";
// $_SESSION['age']= 22;

// echo $_SERVER['REMOTE_ADDR'] . "<br>";
// echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
// echo $_SERVER['SERVER_NAME'];
if(isset($_POST['pseudo'])&& isset($_POST['motsdepasse'])){
setcookie('pseudo',$_POST['pseudo'],time() +40*23*3600,null,null,false,true);
setcookie('motsdepasse',$_POST['motsdepasse'],time() +40*23*3600,null,null,false,true);
}
?>
<form method="POST" action="superglobal.php">
Pseudo
<input type="name" name="pseudo">
Mots de passe
<input type="name" name="motsdepasse">
<input type="submit" name="submit">
</form>
<a href="teste.php">Vers test2</a>
</body>
</html>