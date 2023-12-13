<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="nom">
        <button type="submit" value="envoyer" name="submit">Envoyer</button>
    </form>
</body>
</html>
<?php
    if(isset($_GET['nom'])){
        echo $_GET['nom'];
    }
?>