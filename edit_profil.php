<?php
session_start();
$log_in='Log-in';
$username = $quitter = $wiko = $name = $erreur = $success = '' ;

include('functions.php') ;
if (isset($_SESSION["connecter"])) {
 
   $username = $_SESSION["prenom_nom"];
   $name = $_SESSION["id"];

   // affichager de btn de profil et cache log-in 

   $wiko = '<style>.profil-btn { display:inline-block;}</style>' . '<style>#log-in { display:none;}</style>';

};


if (isset($_POST["edit"])) {

   $noveaunom = $_POST["nom"];
   $noveauprenom = $_POST["prenom"];
   $noveauemail = $_POST["email"];

   $id = $_SESSION["id"];


   if (empty($noveaunom) || empty($noveauprenom) || empty($noveauemail)){
      $erreur = "Tous les champs sont obligatoires";
   }
   
   else{ 
      include("connexion.php");
      $upd = $pdo->prepare("UPDATE wikausers SET nom=?, prenom=?, email=? where id=$id ");
      // $stmt= $pdo->prepare($upd);
      if($upd->execute([$noveaunom, $noveauprenom, $noveauemail])){
         $username = $noveauprenom . " " . $noveaunom ;
         $success = "Changement effecute avec success";
      };   
}
}


?>
<html>
<head>

   <link rel="icon" type="image/jpg" href="imgs/WIKA_Logo.svg.png" />
   <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <style>

div{

   color:red;
   font-size: 16px;
   font-weight: 900;

}
.fa-shopping-basket {
   /* display: block; */
   background-color: #398177;
   border: none;
   border-radius: 50%;
   width: 30px;
   height: 30px;
   display: flex;
   align-items: center;
   justify-content: center;
   color: black;
   margin: 0 auto;
   cursor: pointer;
}

section{

   margin: 25px auto;

}

form {

   margin: auto;
   width: 50%;
   line-height: 3;

}

h1 {

   text-align: center;
   color: #FFFAFA;
   background: gray;

}

input[type=text]{

   border: solid  1px  rgba(255, 84, 32, 1);
   margin-bottom: 10px;
   padding: 16px;
   outline: none;
   border-radius: 7px;
   width: 300px;

}

</style>  

   <title>Wika/Edit</title>
</head>




   <body>
      
  
   <header>
         <a href="index.html" class="logo-con"><img src="imgs/WIKA_Logo.svg.png" alt="Logo" class="logo"></a>

         <nav id="nav">
               <ul class="menu">
                  <li><a href="#" id="ferm-menu">X</a></li>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="shop.php">Shop</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a id="log-in" href="login.php"><?php echo $log_in;echo $wiko ?> </a></li>
                  <a href="#"><i class="fa fa-shopping-basket"></i></a>
               </ul>

               <div class="menu-deroulant">

                  <button class="profil-btn" id="profil-btn"><?php echo $username?><i class="fa fa-caret-down"></i></button>
                  
                  <div class="profil-contenu" id="profil-contenu">
                     <a href="edit_profil.php">Editer le profil</a>
                     <a href="#">Commandes en cours</a>
                     <a href="#">Commandes Passé</a>
                     <a href="deconnexion.php">Deconnecter</a>

                     
                  </div>

               </div>

               <div class="srch">
                  <form action="header.php" method="POST">
                     <input type="text" placeholder="Search..." name="search" autocomplete="off" size="20">
                     <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
               </div>
         </nav>

         <a href="#nav"><i class="fa-solid fa-bars" id="ouvre-nav"></i></a>
   </header>

      <section>

         <form action="" method="post">
            <div>
               <?php  echo  $success  ?>
               <?php  echo  $erreur  ?>


            </div>

            <label for="">Noveau Nom:</label> <br>
            <input type="text" name="nom" placeholder="Noveau Nom" value="<?php echo $_SESSION["nom"] ?>" autocomplete="off"> <br>
            
            <label for="">Noveau Prenom:</label> <br>
            <input type="text" name="prenom" placeholder="Noveau Prenom" value=" <?php echo $_SESSION["prenom"] ?>" autocomplete="off"> <br>

            
            <label for="">Noveau Email:</label> <br>
            <input type="text" name="email" placeholder="Noveau Email" value=" <?php echo $_SESSION["email"] ?>" autocomplete="off">
            
            <input type="submit" name="edit">

            
         </form>

      </section>


<?php

 include('footer.html') ; 
?>
    
   <script src="script/java.js"></script>

</body>
</html>