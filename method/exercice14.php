<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nbr1">
        <input type="text" name="nbr2">
        <button type="submit" value="calculer" name="submit">Calculer</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST["nbr1"] AND !empty($_POST["nbr2"]))){
            $val = $_POST["nbr1"]+$_POST["nbr2"];
            echo "L'addition des deux valeurs est égale à $val ";
        }
    }
?>