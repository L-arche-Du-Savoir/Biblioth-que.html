<?php
$severname= "localhost" ;
$dbname = "nom debd"
$username = "utilisateur";
password ="motdepasse";

try{
    $bdd = new PDO("mysql:$host;dbname=$dbname;charset=utf8mb4"?$username,$password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    die("Erreur de connexion : " .$e->getmessage())
}

if{isset($_POST('ok'))
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $pseudo= $_POST['pseudo'];
    $mdp= $_POST['pass'];
    $email= $_POST['email'];
    $requete = $bdd->prepare("INSERT INTO users values (0,pseudo,nom,prenom,mdp,email");
    $requete->execute[
        array(
            "pseudo" == $pseudo,
            "nom" == $nom,
            "prenom" ==$prenom,
            "password" ==$password,
            "email" == $email

        )
     ];
     if(!filter_var($email,FILTER_VALIDATION_EMAIL)){
        $errors[] = "Email invalide";
     }
     if(strlen($password)< 8){
        $errors[] = "Mot de passe trop court";
     }
     if(empty($errors)){

     }else{
        affiche error
     }
}