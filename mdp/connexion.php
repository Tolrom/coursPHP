<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <p>
        <?php
            //afficher les informations de l'utilisateur
            //démarrer la session
            session_start();
            //tester si utilisateur est connecté
            if(isset($_SESSION["activated"])){
                echo $_SESSION["nom"]." ".$_SESSION["prenom"];
            }
        ?>
    </p>
    <form action="./verifconnexion.php" method="post">
        <label for="mail">Saisir le mail :</label>
        <input type="email" name="mail">
        <label for="password_utilisateur">Saisir votre mot de passe :</label>
        <input type="password" name="password_utilisateur">
        <input type="submit" value="Connexion" name="submit">
    </form>
    <p>
        <?php
            //traitement des erreurs
            //test si $_GET["error"] existe
            if(isset($_GET["error"])){
                switch ($_GET["error"]) {
                    case 1:
                        echo "utilisateur connecté";
                        break;
                    case 2:
                        echo "Information de connexion invalide";
                        break;
                    case 3:
                        echo "Information de connexion invalide";
                        break;
                    case 4:
                        echo "Veuillez remplir les champs du formulaire";
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