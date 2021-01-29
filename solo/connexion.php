<?php
try{
    $user='root';
    $pass="";
    $db=new PDO("mysql:host=localhost;dbname=user",$user,$pass);
    echo"connexion a la base de donnee"."<br/>";

}
catch(PDOException $e){
Print"erreur!:".$e->getMessage()."<br/>";

}
