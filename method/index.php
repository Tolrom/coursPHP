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
        <input type="text" name="operateur">
        <input type="text" name="nbr2">
        <button type="submit" value="calculer" name="submit">Calculer</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        if((!empty($_POST['nbr1']) OR $_POST['nbr1']=='0') AND (!empty($_POST['nbr2']) OR $_POST['nbr2']=='0')  AND !empty($_POST['operateur'])){
            if($_POST['operateur'] == '+'){
                $val = $_POST['nbr1']+$_POST['nbr2'];
            }
            else if($_POST['operateur'] == '-'){
                $val = $_POST['nbr1']-$_POST['nbr2'];
            }
            else if($_POST['operateur'] == '/'){
                if($_POST['nbr2'] == '0'){
                    $val = "totalement impossible car c'est une division par zéro !!!";
                }
                else{
                    $val = $_POST['nbr1']/$_POST['nbr2'];
                }
            }
            else if($_POST['operateur'] == '*'){
                $val = $_POST['nbr1']*$_POST['nbr2'];
            }
                echo "Le résultat de l'opération est $val";
        }
        else {
            echo "Tous les champs ne sont pas remplis!";
        }
    }
?>