<?php
session_start();
try{ 
   //Connexion a la base de données
  include('connexion.php');
  //phpinfo();
  //Notre fonction permettant de nettoyer les variables envoyées sur le serveur
  function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
  }

  $login = valid_donnees($_POST["login"]);
  $pass= valid_donnees($_POST["pass"]);

  if ( isset($_POST['login']) && isset($_POST['pass']) ) {//verification des champs

    $st = $bdd->query("SELECT * FROM users WHERE firstname='".$_POST['login']."' AND password='".$_POST['pass']."' ");
    $datarow= $st->rowCount();
    $st->execute();
    $data = $st->fetch();

    //si on trouve un seul enregistrement dans la BD ca veut dire que l'utilisateur existe
    if ($datarow ==1 ){
   //Declaration de nos variables de connexion
     
      $_SESSION['firstname'] =$login ;
      $_SESSION['type'] =$data['type'] ;
      $_SESSION['password'] =$data['password'] ;
      $_SESSION['id'] = $data['id'];
        //$_SESSION['statut'] = ("admin") ? header("Location: accueil.php"); : header("Location: accueilEtudiant.php"); ;
      header("Location: stat.php");
      $return = "vous etes bien connecté !";  
    }
    else{
      header("Location: index.php");
      $return = "Faux mot de passe !";
    }


}
}
catch(Exception $e)
{
 die('Erreur : '.$e->getMessage());
}