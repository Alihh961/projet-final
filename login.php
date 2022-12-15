<?php
session_start();


if(isset($_SESSION["connecter"])){
    header("location:index.php");//* me rediriger vers la session si l'utilisateur est déjà connecté *//
}

$erreur = "";
if (isset($_POST["valider"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $pass_crypt = md5($_POST["password"]);/* recuperer les infos entre pas l'utilisateur */
    include("connexion.php"); /* connecter a la base de donne */
    $stmt = $pdo->prepare("select * from wikausers where email=? and password=? limit 1");
    $stmt->execute(array($email, $pass_crypt));
    $user = $stmt->fetchAll();
    $userCount = $stmt->rowCount();
    if ($userCount > 0) /* si l'email existe et le mdp est bonne , ouvrir la session */ {
        $_SESSION["prenom_nom"] = ucfirst(strtolower($user[0]["prenom"])) .
        " "  .  strtoupper($user[0]["nom"]);
        $_SESSION["connecter"] = "oui";
        $_SESSION["id"] = ($user[0]["id"]);
        $_SESSION["nom"] = ($user[0]["nom"]);
        $_SESSION["prenom"] = ($user[0]["prenom"]);
        $_SESSION["email"] = ($user[0]["email"]);
    
        header("location:index.php");
    } 
    else{
        $erreur='Mot de passe ou Email erreur !';
    // header("location:login.php") ;
    }}
?>
 
<!DOCTYPE  html>
<html>
<head>
<meta  charset="utf-8"  />
<style>
* {
  margin: 0;
  padding: 0;
  font-family: "Roboto Mono";
  box-sizing: border-box;

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

border: solid  1px  rgba(255, 84, 32, 1);
margin-bottom: 10px;
float: right;
padding: 15px;
outline: none;
border-radius: 7px;
width: 120px;
}
input[type=text],
[type=password] {

border: solid  1px  rgba(255, 84, 32, 1);

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
font-size: 14px;
color: blue;

text-decoration: none;
font-weight: normal;
}
a:hover {
text-decoration: underline;
}
</style>
<title>Wika/log-in</title>
</head>
<body>
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