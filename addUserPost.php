<?php 

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

} catch (Exception $e) {
    echo "non visible";
    die("Error".$e->getMessage());
}

    