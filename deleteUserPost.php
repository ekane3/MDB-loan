<?php 

$id_del = $_POST['id_del'];
//var_dump($_POST);
try {
    // Connexion a la base de données
    include('connexion.php');

    // si le bouton supprimer est cliqué
    if ( isset( $_POST["deleteUser"])){

        $req=$bdd->prepare('delete from users where id=:id');
        $req->bindParam(':id',$id_del);
        $req->execute();
        header("Location:users.php");

    }

} catch (Exception $e) {
    echo "non visible";
    die("Error".$e->getMessage());
}

    