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
<h1 id="middle"> CREER UN COMPTE</h1>
   <form action="traitement.php" method="POST">
   <h2 class="para"> Email
   <input type="email" class="textinput" name="email" placeholder="E-mail" required>
   </h2>
   <h2 class="para">Password
   <input type="password" class="textinput" name="password" placeholder="Password" required></h2>
    <button type="submit" class="button" name="connexion" value="submit">envoyer</button>
    </form> 
     <a href="signin.php" class="change">Se connecter</a>
    </div>
</body>
</html>