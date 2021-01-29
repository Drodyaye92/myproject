<?php 
require_once "connexion.php";
$email=$_POST['email'];
$password=$_POST['password'];
if(isset($_POST['connexion'])){
       
       extract($_POST);
       if(!empty($email) && !empty($password)){
$q = $db->prepare("SELECT * FROM utilisateur WHERE email=:email");
$q ->execute(['email' =>$email]);
$result = $q->fetch();

}
if($result == true){
    //le compte existe bien
    $hashpassword= $result['pass'];
    }
    if(password_verify($password,$_POST['password'])){
    echo "le mot de passe est bon,connection en cours";
       }
    }
    ?>