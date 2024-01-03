<?php
    //importe la connexion BDD
    include './connectBdd.php';
    //récupérer le paramètre GET id
    if(isset($_GET["id"]) AND !empty($_GET["id"])){
        //récupération de l'utilisateur
        $user = getUtilisateurById($bdd,$_GET["id"]);
        //test si $user est vide
        if(!$user){
            //redirection si l'utilisateur n'existe pas
            header("Location:./index.php");
        }else{
            if(isset($_POST['submit'])){
                if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email'])){ 
                // AND ($_POST['nom'] != $user['nom'] OR $_POST['prenom'] != $user['prenom'] OR $_POST['email'] != $user['email'])){
                    updateUtilisateur($bdd,$_GET["id"],$_POST['nom'],$_POST['prenom'],$_POST['email']);
                    header("Location:./index.php");
                }
            }
        //1 Ajouter un test si le formulaire est submit
            //2 Tester si les champs sont bien remplis
                //3 Si les champs sont remplis appeler une fonction qui va mettre à jour l'utilisateur  en BDD 
                 //4 Appeler la fonction updateUtilisateur
                 //5 redirection vers la page index.php
        }
    }
     //fonction qui retourne un utilisateur par son ID
    function getUtilisateurById($bdd,$id){
        $requete = $bdd->prepare("SELECT nom,prenom,email FROM utilisateur WHERE id = ?");
        $requete->bindParam(1,$id,PDO::PARAM_INT);
        $requete->execute();
        $data = $requete->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    function updateUtilisateur($bdd,$id,$nom,$prenom,$email){
        $requete = $bdd->prepare("UPDATE utilisateur SET nom = ?, prenom = ?, email = ? WHERE id = ?");
        $requete->bindParam(1,$nom,PDO::PARAM_STR);
        $requete->bindParam(2,$prenom,PDO::PARAM_STR);
        $requete->bindParam(3,$email,PDO::PARAM_STR);
        $requete->bindParam(4,$id,PDO::PARAM_INT);
        $requete->execute();

    }
    //6 ajouter la fonction qui met à jour l'utiliateur ($bdd, $id, $nom, $prenom, $email)
    //  update utilisateur set nom = valeur, prenom = valeur, email = valeur
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'utilisateur</title>
</head>
<body>
    <form action="" method="post">
        <label for="nom">Saisir votre nom :</label>
        <input type="text" name="nom" value="<?=$user["nom"]?>">
        <label for="prenom">Saisir votre prénom :</label>
        <input type="text" name="prenom"value="<?=$user["prenom"]?>">
        <label for="email">Saisir votre email :</label>
        <input type="email" name="email" value="<?=$user["email"]?>">
        <input type="submit" value="Modifier" name="submit">
    </form>
</body>
</html>