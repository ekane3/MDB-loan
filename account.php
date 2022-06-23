<?php
  session_start();
  if ( isset($_SESSION['password'])&& isset($_SESSION['firstname']) ) {
  include('connexion.php');
  $st = $bdd->query("SELECT * FROM users WHERE firstname='".$_SESSION['firstname']."' AND password='".$_SESSION['password']."' ");
  $st->execute();
  $donnees = $st->fetch();
?>