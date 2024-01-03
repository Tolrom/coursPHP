<?php

include './connectBdd.php';

if(isset($_POST["submit"])){
    if(!empty($_POST["nom"]) 
    AND !empty($_POST["prenom"]) 
    AND !empty($_POST["email"]) 
    AND !empty($_POST["pass"]) 
    AND !empty($_POST["pass_verif"])){
        if($_POST["pass_verif"] === $_POST["pass"]){
            if(empty(getUserByMail($bdd,$_POST["email"]))){
                $nom = cleanInput($_POST["nom"]);
                $prenom = cleanInput($_POST["prenom"]);
                $email = cleanInput($_POST["email"]);
                $hash = password_hash($_POST["pass"],PASSWORD_DEFAULT);
                addUser($bdd,$nom,$prenom,$email,$hash);
                header('location:./inscription.php?error=4');
            }
            else {
                header('location:./inscription.php?error=2');
            }
        }
        else {
            header('location:./inscription.php?error=3');
        }
    }
    else {
        header('location:./inscription.php?error=1');
    }
}

function getUserByMail($bdd,$email){
    try{
        $requete = $bdd->prepare("SELECT id FROM utilisateur WHERE email = ?");
        $requete->bindParam(1,$email,PDO::PARAM_STR);
        $requete->execute();
        $data = $requete->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    catch (Exception $e){
        die('Error : '.$e->getMessage());
    }
}

function addUser($bdd,$nom,$prenom,$email,$pass){
    try {
        $requete = $bdd->prepare("INSERT INTO utilisateur(nom,prenom,email,pass) VALUE(?,?,?,?)");
        $requete->bindParam(1,$nom,PDO::PARAM_STR);
        $requete->bindParam(2,$prenom,PDO::PARAM_STR);
        $requete->bindParam(3,$email,PDO::PARAM_STR);
        $requete->bindParam(4,$pass,PDO::PARAM_STR);
        $requete->execute();
    }
    catch (Exception $e){
        die('Error : '.$e->getMessage());
    }
}

function cleanInput(?string $value):?string{
    return htmlspecialchars(strip_tags(trim($value)),ENT_NOQUOTES);
}
?>