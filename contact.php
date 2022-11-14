<?php
session_start();
$erreur_c = "";
$merci = "";
if (isset($_POST["envoyer-msg"])) {
  $nom_c = $_POST["nom-c"];
  $prenom_c = $_POST["prenom-c"];
  $email_c = $_POST["email-c"];
  $message_c = $_POST["message-c"];

if (empty($nom_c)) $erreur_c = "Le champs nom est obligatoire!";
elseif (empty($prenom_c)) $erreur_c = "Le champs prénom est obligatoire!";
elseif (empty($email_c )) $erreur_c = "Le champs email est obligatoire!";
elseif (empty($message_c)) $erreur_c = "Le champs message est obligatoire!";
else {
  include("connexion.php");

  $ins_c = $pdo->prepare("insert into message(nom,prenom,email,message) values(?,?,?,?)");
  $ins_c->execute(array($nom_c, $prenom_c, $email_c, $message_c));
 
  // header('location:contact.php');
  $merci =  'Merci de nous avoir contacté, vous serez bientôt recontacté';
   }
  }

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

  <link rel="icon" type="image/jpg" href="imgs/WIKA_Logo.svg.png" />

  <title>Wika / Contact</title>


</head>

<body>
  <header>

    <a href="index.html" class="logo-con"><img src="imgs/WIKA_Logo.svg.png" alt="Logo" class="logo"></a>

    <nav id="nav">
      <ul class="menu">
        <li><a href="#" id="ferm-menu">X</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <!-- <li><a href="blog.html">Blog</a></li> -->
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <!-- <div class="srch">
        <form action="header.php" method="POST">
          <input type="text" placeholder="Search..." name="search" autocomplete="off" size="20">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div> -->
    </nav>

    <a href="#nav"><i class="fa-solid fa-bars" id="ouvre-nav"></i></a>
  </header>

  <h3 style="margin: 10px auto; display: block; width: fit-content;">Contact Form</h3>

  <div class="form-m">
    <div class='merci'><?php echo  $merci ?></div>  <!-- Merci si la message a ete envoyer -->
    <div class='erreur'><?php echo  $erreur_c ?></div>  <!-- Erreur si un de les champs est vide -->
    <form action="" method="POST">

      <label for="prenom-c">Prenom <span>* </span></label>
      <input type="text" id="prenom-c" name="prenom-c" placeholder="Votre prenom" autocomplete="off">

      <label for="nom-c">Nom <span>* </span></label>
      <input type="text" id="nom-c" name="nom-c" placeholder="Votre nom" autocomplete="off">

      <label for="email-c">Email <span>* </span></label>
      <input type="text" id="email-c" name="email-c" placeholder="Votre email" autocomplete="off">

      <label for="subject">Message <span>* </span></label>
      <textarea id="message-c" name="message-c" placeholder="Votre message / 350 caractère max" rows="6" autocomplete="off" ></textarea>

      <input type="submit" name="envoyer-msg" value="Envoyer">
    </form>
  </div>

  <?php

    include('footer.html');

  ?>
</body>

</html>