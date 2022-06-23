<?php
session_start();
unset($_SESSION['type']);
unset($_SESSION['firstname']);
unset($_SESSION['password']);
session_destroy();
header('Location: index.php');
/*$sql = "UPDATE users SET name=?, surname=?, sex=? WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$name, $surname, $sex, $id]);*/
