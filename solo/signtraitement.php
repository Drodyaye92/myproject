<?php 
require_once "connexion.php";
$email=$_POST['email'];
$password=$_POST['password'];
if(isset($_POST['connexion'])){
       
       extract($_POST);

      if(!empty($email) && !empty($password))
{ 
         $q = $db->prepare("SELECT * FROM utilisateur WHERE email=:email");
         $q ->execute(['email' =>$email]);
         $result = $q->fetch();
         if($result == 1){

         
if(password_verify($password,$_POST['password']))
if($result == true){$hashpassword= $result['pass'];
  

   
   {
       if(filter_var($email, FILTER_VALIDATE_EMAIL))
       {
           
               if(password_verify($password, $data['password']))
                   {
                      $_SESSION['user'] = $data['email'];
                       header('Location: http://localhost/myproject/index.php');
                      die();
                   }
              else
               { 
                  header('Location: index.php?login_err=password'); die();
               }
       }
       else
          { 
             header('Location: signin.php?login_err=email'); die(); 
          }
   }
   else
   { header('Location: signin.php?login_err=already'); die(); 
   }
}
}
}
}

?>
 

 