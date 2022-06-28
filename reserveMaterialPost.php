<?php 
session_start();

$materiel_id = $_POST['id_material'];
$rendu = 0;

//var_dump($_POST);
try {
    // Connexion a la base de données
    include('connexion.php');

    // Si le bouton du modal d'enregistrer un nouvel user est  cliqué
    if ( isset( $_POST["reservEqui"])){

        $req=$bdd->prepare('insert into borrow(user_id, id_material, borrowed_date, return_date, rendu ) values(:user_id, :id_material, current_date(),DATE_ADD(current_date(), INTERVAL 5 DAY), :rendu)');
        $req->bindParam(':user_id',$_SESSION['id']);
        $req->bindParam(':id_material',$materiel_id);
       // $req->bindParam(':borrowed_date',$borrowed_date);
        //$req->bindParam(':return_date',$return_date);
        $req->bindParam(':rendu',$rendu);
        $req->execute();
        header("Location:loanme.php");

    }


} catch (Exception $e) {
    echo "non visible";
    die("Error".$e->getMessage());
}

    