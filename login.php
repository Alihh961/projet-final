<?php
<<<<<<< HEAD

session_start();

$erreur = "";
if (isset($_POST["valider"])) {
include("infos.php");
include("connexion.php");
$verify = $pdo->prepare("select * from users where pseudo=? and password=? limit 1");
$verify->execute(array($pseudo, $pass_crypt));
$user = $verify->fetchAll();
if (count($user) > 0) {

$_SESSION["prenom_nom"] = ucfirst(strtolower($user[0]["prenom"])) .
" "  .  strtoupper($user[0]["nom"]);
$_SESSION["connecter"] = "yes";
header("location:session.php");
=======
 
session_start();
if(isset($_SESSION["connecter"])){
    header("location:indexM.php");//* me rediriger vers la session si l'utilisateur est déjà connecté *//
}
// $pageTitle="login";
$erreur = "";
if (isset($_POST["valider"])) {
include("infos.php"); /* recuperer les infos entre pas l'utilisateur */
include("connexion.php"); /* connecter a la base de donne */
$stmt = $pdo->prepare("select * from wika where email=? and password=? limit 1");
$stmt->execute(array($email, $pass_crypt));
$user = $stmt->fetchAll();
$userCount = $stmt->rowCount();

if ($userCount > 0) /* si l'email existe et le mdp est bonne , ouvrir la session */ {

$_SESSION["prenom_nom"] = ucfirst(strtolower($user[0]["prenom"])) .
" "  .  strtoupper($user[0]["nom"]);
$_SESSION["connecter"] = "oui";
header("location:indexM.php");
>>>>>>> 521aaa4cfd12cbb18eb3b48c69b929b16b7bfbfa
} else
header("location:login.php") ;

}
?>
 
<!DOCTYPE  html>
<html>
<head>
<meta  charset="utf-8"  />
<style>
* {
font-family: arial;
}
body {
margin: 20px;
}
 
form {
position: absolute;
top: 50%;
left: 50%;
margin-left: -150px;
margin-top: -100px;
}
h1 {
text-align: center;
color: #FFFAFA;
background: gray;
}
 
input[type=submit] {
<<<<<<< HEAD
border: solid  1px  rgba(255, 84, 32, 1);
=======
border: solid  1px  violet;
>>>>>>> 521aaa4cfd12cbb18eb3b48c69b929b16b7bfbfa
margin-bottom: 10px;
float: right;
padding: 15px;
outline: none;
border-radius: 7px;
width: 120px;
}
input[type=text],
[type=password] {
<<<<<<< HEAD
border: solid  1px  rgba(255, 84, 32, 1);
=======
border: solid  1px  violet;
>>>>>>> 521aaa4cfd12cbb18eb3b48c69b929b16b7bfbfa
margin-bottom: 10px;
padding: 16px;
outline: none;
border-radius: 7px;
width: 300px;
}
.erreur {
text-align: center;
color: red;
margin-top: 10px;
}
 
a {
font-size: 14pt;
<<<<<<< HEAD
color: blue;
=======
color: rgba(255, 84, 32, 1);
>>>>>>> 521aaa4cfd12cbb18eb3b48c69b929b16b7bfbfa
text-decoration: none;
font-weight: normal;
}
a:hover {
text-decoration: underline;
}
</style>
</head>
<body  onLoad="document.fo.login.focus()">
<h1>Authentification</h1>
<div  class="erreur"><?php  echo  $erreur  ?></div>
<form  name="form"  method="post"  action="">
<<<<<<< HEAD
<input  type="text"  name="pseudo"  placeholder="Votre Pseudo"  /><br  />
=======
<input  type="text"  name="email"  placeholder="Votre Email"  /><br  />
>>>>>>> 521aaa4cfd12cbb18eb3b48c69b929b16b7bfbfa
<input  type="password"  name="password"  placeholder="Mot de passe"  /><br  />
<input  type="submit"  name="valider"  value="S'authentifier"  />
<a  href="inscription.php">Créer votre Compte</a>
</form>
</body>
</html>