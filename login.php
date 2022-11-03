<?php
 
session_start();
// if(isset($_SESSION["connecter"])){
//     header("location:session.php");//* me rediriger vers la session si l'utilisateur est déjà connecté *//
// }
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
border: solid  1px  violet;
margin-bottom: 10px;
float: right;
padding: 15px;
outline: none;
border-radius: 7px;
width: 120px;
}
input[type=text],
[type=password] {
border: solid  1px  violet;
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
color: rgba(255, 84, 32, 1);
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
<input  type="text"  name="email"  placeholder="Votre Email"  /><br  />
<input  type="password"  name="password"  placeholder="Mot de passe"  /><br  />
<input  type="submit"  name="valider"  value="S'authentifier"  />
<a  href="inscription.php">Créer votre Compte</a>
</form>
</body>
</html>