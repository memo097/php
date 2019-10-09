<?php 
    function image(){
        if(isset($_FILES["fileToUpload"])){
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $upload0k = 1;
            $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POSET["submit"])){
    $check = getimagesize($FILES["fileToUpload"]["tmp_name"]);
    if($check !== false){
        echo "fichier OK" . $check["mime"] . ".";
        $upload0k = 1;
    } else {
        echo "Ce fichier n'est pas une image";
        $upload0k = 0;
    }
}
// Verifie si le fichier existe
if (file_exists($target_file)){
    echo "Fichier existant.";
    $upload0k = 0;
}
// Verifie la taille du fichier
if ($_FILES["fileToUpload"]["size"]> 5000000){
    echo "Y'a des limites quand meme.";
    $upload0k = 0;
}
if($FileType != "pdf"){
    echo "Fichier correcte uniquement.";
    $upload0k = 0;
}
if($upload0k == 0){
    echo "Oups ca n'a pas marché.";
} else{
    if(move_upload_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
        $array = explode('.', $_FILES['fileToUpload']['name']);
        $fileName = $array[0];
        echo "Le fichier " . basename($_FILES["fileToUpload"]["name"]). " a bien été uploadé." . "<br>" . "le nom de votre fichier est : " . $fileName . "<br>" . "votre fichier est en " . $FileType . "<br>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

        }

    }
?>
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
    if(isset($_POST['gender'])){
        echo 'Salut ' . $_POST['gender'] . ' ' . $_POST['name'] . ' ' . $_POST['lastname'] . '<br>';
    }else {
        echo '<form action="index.php" method="post" anctype="multipart/form-data">
        <select name="gender" id="">
        <option value="mr">Mr</option>
        <option value="mme">Mme</option>
        </select>
        <label for="name">Nom : </label>
        <input type="text name="name" value="">
        <label for="lastname">Prenom : </label>
        <input type="text" name="lastname" value="">
        <label for="fileToUpload"> Ajouter un fichier</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <button type="submit">envoyer</button>
        </form>';
    };
    echo image()
    ?>
</body>
</html>