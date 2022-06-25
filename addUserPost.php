<?php 

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];
$type = $_POST['type']; 
//var_dump($_POST);
try {
    // Connexion a la base de données
    include('connexion.php');

    // Si le bouton du modal d'enregistrer un nouvel user est  cliqué
    if ( isset( $_POST["addUser"])){

        $req=$bdd->prepare('insert into users(firstname, lastname, email,password,birthday, type) values(:firstname, :lastname, :email, :password, :birthday, :type)');
        $req->bindParam(':firstname',$firstname);
        $req->bindParam(':lastname',$lastname);
        $req->bindParam(':password',$password);
        $req->bindParam(':email',$email);
        $req->bindParam(':birthday',$birthday);
        $req->bindParam(':type',$type);
        $req->execute();
        header("Location:users.php");

    }

    // Si le bouton du modal modifier un nouvel user est  cliqué
    if ( isset( $_POST["updateUser"])){

        $req=$bdd->prepare('update users set firstname=:firstname, lastname=:lastname, email=:email,password=:password,birthday=:birthday, type=:type  where id=:id');
        $req->bindParam(':id',$id);
        $req->bindParam(':firstname',$firstname);
        $req->bindParam(':lastname',$lastname);
        $req->bindParam(':password',$password);
        $req->bindParam(':email',$email);
        $req->bindParam(':birthday',$birthday);
        $req->bindParam(':type',$type);
        $req->execute();
        header("Location:users.php");

    }

    // si le bouton supprimer est cliqué
    if ( isset( $_POST["deleteUser"])){

        $req=$bdd->prepare('delete from users where id=:id');
        $req->bindParam(':id',$id);
        $req->execute();
        header("Location:users.php");

    }

} catch (Exception $e) {
    echo "non visible";
    die("Error".$e->getMessage());
}

    