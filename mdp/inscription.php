<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 17</title>
    <style>
        * {
            margin : 5px;
        }
        form {
            width : 25%;
            display : flex;
            flex-direction : column;
            flex-wrap : wrap;
        }
        input {
            /* align-self : flex-end; */
        }
    </style>
</head>
<body>
    <form action="./register.php" method="post">
        <label for="nom">Saisir votre nom :</label>
        <input type="text" name="nom">
        <label for="prenom">Saisir votre prénom :</label>
        <input type="text" name="prenom">
        <label for="email">Saisir votre email :</label>
        <input type="email" name="email">
        <label for="pass">Saisir votre mot de passe :</label>
        <input type="password" name="pass">
        <label for="pass_verif">Confirmer votre mot de passe :</label>
        <input type="password" name="pass_verif">
        <input type="submit" value="Enregistrer" name="submit">
    </form>
    <p>
        <?php
            //tester si la super globale $_GET["error"] existe
            if(isset($_GET["error"])){
                //tester la valeur de $_GET["error"]
                switch ($_GET["error"]) {
                    case 1:
                        echo "Les champs ne sont pas tous remplis";
                        break;
                    case 2:
                        echo "Les informations sont incorrectes";
                        break;
                    case 3:
                        echo "Les mots de passe sont différents";
                        break;
                    case 4:
                        echo "Le compte a été ajouté en BDD";
                        break;
                    default:
                        # code...
                        break;
                }
            }
        ?>
    </p>
</body>
</html>