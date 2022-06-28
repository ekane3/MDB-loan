<?php 

session_start();
$id= $_POST['id_material'];
$rendu = 1;
var_dump($_POST);
try {
    // Connexion a la base de données
    include('connexion.php');

    // si le bouton supprimer est cliqué
    if ( isset( $_POST["reservEqui"])){

        $req=$bdd->prepare('update borrow set rendu=:rendu where id_material=:id_material AND user_id=:user_id');
        $req->bindParam(':id_material',$id);
        $req->bindParam(':user_id',$_SESSION['id']);
        $req->bindParam(':rendu',$rendu);
        $req->execute();
        header("Location:stat.php");

    }

} catch (Exception $e) {
    echo "non visible";
    die("Error".$e->getMessage());
}

    