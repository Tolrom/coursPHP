<?php
    //importer le fichier de connexion BDD
    include './connectBdd.php';
    //tester si le bouton est cliqué
    if(isset($_POST["submit"])){
        //tester si les 2 champs de formulaire sont bien remplis
        if(!empty($_POST["mail"]) AND !empty($_POST["password_utilisateur"])){
            $email = cleanInput($_POST["mail"]);
            //récupérer le compte
            $recup = getUserByMail($bdd,$email);
            //test si le compte existe
            if(!empty($recup)){
                $password = cleanInput($_POST["password_utilisateur"]);
                //tester si le mot de passe correspond
                if(password_verify($password,$recup["password_utilisateur"])){
                    //démarrer une session
                    session_start();
                    //créer une session
                    $_SESSION["nom"] = $recup["nom"];
                    $_SESSION["prenom"] = $recup["prenom"];
                    $_SESSION["activated"] = true;
                    //redirection vers le formulaire
                    header('location:./connexion.php?error=1');
                }
                else{
                    //redirection vers le formulaire
                    header('location:./connexion.php?error=2');
                }
            }else{
                //redirection vers le formulaire
                header('location:./connexion.php?error=3');
            }

        }
        //les champs ne sont pas tous remplis
        else{
            //redirection vers le formulaire
            header('location:./connexion.php?error=4');
        }
    }
    function getUserByMail($bdd,$email){
        try {
            $requete = $bdd->prepare('SELECT id,nom,prenom,email,
            password_utilisateur FROM utilisateur WHERE email = ?');
            $requete->bindParam(1,$email,PDO::PARAM_STR);
            $requete->execute();
            $data = $requete->fetch(PDO::FETCH_ASSOC);
            return $data;
        } 
        catch (Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }

    function cleanInput(string $value):string
    {
        return htmlspecialchars(strip_tags(trim($value)),ENT_NOQUOTES);
    }
?>