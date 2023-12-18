<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 16</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="Entrez votre nom">
        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <input type="email" name="email" placeholder="Entrez votre email">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="file" name="fichier">
        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['password'])){
            if(!empty($_FILES['fichier']['tmp_name'])){
                $ext = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
                if($ext === "png" OR $ext === "PNG" OR $ext === "jpg" OR $ext === "JPG" OR $ext === "jpeg" OR $ext === "JPEG"){
                    move_uploaded_file($_FILES['fichier']['tmp_name'],'./fichier/'.$_FILES['fichier']['name']);
                }
                else {
                    echo "<p>Type de fichier non pris en charge!</p>";
                }
            }
            else {
                echo "<p>Il n'y a pas de fichier !</p>";
            }
        }
        else {
            echo "<p>Veuillez remplir tous les champs du formulaire !</p>";
        }
    }
?>