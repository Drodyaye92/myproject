<?php
require_once "connexion.php";

$email=$_POST['email'];
$password=$_POST['password'];


$q=$db->prepare("INSERT INTO utilisateur (email,pass) VALUES(:email,:pass)");
$q->bindParam(':email',$email);
$q->bindParam(':pass',password_hash($password,PASSWORD_DEFAULT));
$q->execute();
?>

