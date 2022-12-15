<?php
session_start();
$erreur = "";
if (isset($_POST["inscrire"])) {
include("infos.php");
if (empty($nom)) $erreur = "Le champs nom est obligatoire!";
elseif (empty($prenom)) $erreur = "Le champs prénom est obligatoire!";
elseif (empty($email)) $erreur = "Le champs email est obligatoire!";
elseif (empty($password)) $erreur = "Le champs mot de passe est obligatoire!";
elseif ($password != $passwordConf) $erreur = "Mots de passe differents!";
else {
include("connexion.php");
$verify_email = $pdo->prepare("select id from wikausers where email=? limit 1"); // $stmt and verifying if the username exists already
$verify_email->execute(array($email));
$user_email = $verify_email->fetchAll();
if (count($user_email) > 0)
$erreur = "email existe déjà!";
else {
$ins = $pdo->prepare("insert into wikausers(nom,prenom,email,password) values(?,?,?,?)");
if ($ins->execute(array($nom, $prenom, $email, md5($password))))
header("location:login.php");
     }
   }
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
border: solid  1px  rgba(255, 84, 32, 1);
margin-bottom: 10px;
float: right;
padding: 15px;
outline: none;
border-radius: 7px;
width: 120px;
cursor:pointer;
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
font-size: 14pt;
color: blue;
text-decoration: none;
font-weight: normal;
}
a:hover {
text-decoration: underline;
}
</style>
</head>
<body>
<h1>Inscription</h1>
<div  class="erreur"><?php  echo  $erreur  ?></div>
<form  name="fo"  method="post"  action="">
<input  type="text"  name="nom"  placeholder="Nom"  value="<?php  $nom  ?>"  /><br  />
<input  type="text"  name="prenom"  placeholder="Prénom"  value="<?php  $prenom  ?>"  /><br  />
<input  type="text"  name="email"  placeholder="Votre Email"  value="<?php  $email  ?>"  /><br  />
<input  type="password"  name="password"  placeholder="Mot de passe"  /><br  />
<input  type="password"  name="passconf"  placeholder="Confirmer votre Mot de passe"  /><br  />
<input  type="submit"  name="inscrire"  value="S'inscrire"  />
<a  href="login.php">Deja un compte</a>
</form>
</body>
</html>









































































































<!-- 
      $host = "localhost";
      $Username = "root";
      $Password = "";
      $dbName = "test";

        
        try {
                
                $conn = new PDO ("mysql:host=$host;dbname=$dbName",$Username,$Password);
                $conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            }

        catch (PDOException $e) {
                echo 'Could not connect to the database :' . $e->getMessage() ;
            }

         if (isset($_POST['submit'])) {    
        
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];      

            $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (:name,:email,:password)";

            $stmt = $conn->prepare($sql);


            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            $stmt->execute();

    
        
     

} -->
