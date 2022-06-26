<?php 

$id = $_POST['id'];
$codebarre = $_POST['codebarre'];
$materiel_name = $_POST['materiel_name'];
$description = $_POST['description'];
$purchased_date = $_POST['purchased_date'];
$purchased_price = $_POST['purchased_price'];
$supplier = $_POST['supplier'];
$id_institution = 1;

//var_dump($_POST);
try {
    // Connexion a la base de données
    include('connexion.php');

    // Si le bouton du modal d'enregistrer un nouvel user est  cliqué
    if ( isset( $_POST["addUser"])){

        $req=$bdd->prepare('insert into material(codebarre, name, description,purchased_date,purchased_price, supplier, id_institution) values(:codebarre, :name, :description, :purchased_date, :purchased_price, :supplier, :id_institution)');
        $req->bindParam(':codebarre',$codebarre);
        $req->bindParam(':name',$materiel_name);
        $req->bindParam(':description',$description);
        $req->bindParam(':purchased_date',$purchased_date);
        $req->bindParam(':purchased_price',$purchased_price);
        $req->bindParam(':supplier',$supplier);
        $req->bindParam(':id_institution',$id_institution);
        $req->execute();
        header("Location:users.php");

    }

    // Si le bouton du modal modifier un nouvel user est  cliqué
    if ( isset( $_POST["updateUser"])){

        $req=$bdd->prepare('update users set codebarre=:codebarre, name=:name, email=:email,description=:description, purchased_date=:purchased_date, purchased_price=:purchased_price, supplier=:supplier  where id=:id');
        $req->bindParam(':id',$id);
        $req->bindParam(':codebarre',$codebarre);
        $req->bindParam(':name',$materiel_name);
        $req->bindParam(':description',$description);
        $req->bindParam(':purchased_date',$purchased_date);
        $req->bindParam(':purchased_price',$purchased_price);
        $req->bindParam(':supplier',$supplier);
        $req->execute();
        header("Location:materiels.php");

    }

} catch (Exception $e) {
    echo "non visible";
    die("Error".$e->getMessage());
}

    