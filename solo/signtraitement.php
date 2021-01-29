<?php 
if(isset($_POST['connexion'])){
       
       extract($_POST);
       if(!empty($email) && !empty($pass)){
$q = $db->prepare("SELECT * FROM utilisateur WHERE email=:email");
$q ->execute(['email' =>$email]);
$result = $q->fetch();
var_dump($result);
}
if($result == true){
    //le compte existe bien
    $hashpassword= $result['$password'];
    }
    if(password_verify($pass,result ['password'])){
    echo "le mot de passe est bon,connection en cours";
       }
    }
    ?>