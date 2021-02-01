<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   
<div class="design">
<h1 id="middle"> SE CONNECTER</h1>
   <form action="signtraitement.php" method="POST">
   <h2 class="para"> Email
   <input type="email" class="textinput" name="email" placeholder="E-mail" required>
   </h2>
   <h2 class="para">Password
   <input type="password" class="textinput" name="password" placeholder="Password" required></h2>
    <button type="submit" class="button" name="connexion" value="submit">connexion</button>
     
    <button onclick="myFunction()" id="page">Decouvrir </button>
    </form>
    <script>
function myFunction() {
  location.replace("../index.php")

}
</script>
     <a href="login.php" class="change">Creer un compte</a>
    </div>
</body>
</html>