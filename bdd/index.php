<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 17</title>
</head>
<body>
    <form action="" method="post">
        <label for="nom">Saisir votre nom :</label>
        <input type="text" name="nom">
        <label for="prenom">Saisir votre prénom :</label>
        <input type="text" name="prenom">
        <label for="email">Saisir votre email :</label>
        <input type="email" name="email">
        <label for="pass">Saisir votre mot de passe :</label>
        <input type="password" name="pass">
        <input type="submit" value="Ajouter" name="submit">
        <br>
        <button name="show">Liste des utilisateurs</button>
    </form>
</body>
</html>
<?php
    include './connectBdd.php';

    if(isset($_POST["submit"])){
        //tester si les champs sont remplis
        if(!empty($_POST["nom"]) AND !empty($_POST["prenom"]) 
        AND !empty($_POST["email"]) AND !empty($_POST["pass"])){
            ajouterUtilisateur($_POST["nom"], $_POST["prenom"], $_POST["email"], md5($_POST["pass"]),$bdd);
            echo "L'utilisateur ".$_POST["nom"]." a été ajouté en BDD";
        }
    }
   
    if(isset($_POST['show'])){
        $tab = getAllUtilisateur('utilisateur',$bdd);
        if(!empty($tab)){
            foreach($tab as $donnees){
                echo '<p> Prénom : '.$donnees['prenom'].' Nom :   '.$donnees['nom'].' email :  '.$donnees['email'].'</p> <a href="./modifierUtilisateur.php?id='.$donnees['id'].'">Modifier l\'utilisateur</a>'; 
            }
        }
        else {
            echo 'Aucun utilisateur dans la table';
        }
    }

    //Fonction pour ajouter un utilisateur en BDD
    function ajouterUtilisateur($nom,$prenom,$email,$password,$bdd){
        //bloc pour exécuter le code
        try {
            $requete = $bdd->prepare('INSERT INTO utilisateur(nom,prenom,email,pass)VALUE
            (?,?,?,?)');
            $requete->bindParam(1,$nom,PDO::PARAM_STR);
            $requete->bindParam(2,$prenom,PDO::PARAM_STR);
            $requete->bindParam(3,$email,PDO::PARAM_STR);
            $requete->bindParam(4,$password,PDO::PARAM_STR);
            $requete->execute();
        }
        //bloc pour récupérer les erreurs 
        catch (Exception $e) {
            //affichage de l'erreur
            die("Error : ".$e->getMessage());
        }
    }
    function getAllUtilisateur($table,$bdd){
        try{  
            $requete = $bdd->prepare('SELECT * FROM '.$table);
            $requete->execute();
            $requete = $requete->fetchAll();
            return $requete;
        }
        catch (Exception $e) {
            //affichage de l'erreur
            die("Error : ".$e->getMessage());
        }
    }
?>