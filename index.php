<?php 
session_start();

$username = '' ;
$wiko = '';

include('functions.php') ;
if(isset($_SESSION["connecter"])){
    // $log_in='';
    $username = $_SESSION["prenom_nom"];

    // affichager de btn de profil et cache log-in 
    $wiko ='<style>.profil-btn { display:inline-block;}</style>'.'<style>#log-in { display:none;}</style>';
    


};


if(isset($_POST["ajouteraupanier"])){

    print_r($_POST["produit_id"]);
    
};






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
    <style>
    .fa-shopping-basket {
    
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
</style>

    <title>Wika</title>
    

</head>

<body>

    <?php echo $wiko ?> 


    <header>
       <a href="index.html" class="logo-con"><img src="imgs/WIKA_Logo.svg.png" alt="Logo" class="logo"></a>

        <nav id="nav">
            <ul class="menu">
                <li><a href="#" id="ferm-menu">X</a></li>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a id="log-in" href="login.php">Log-in</a></li>
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

    
  
     <section class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="imgs/produits-slider/adidas-slider.webp" alt="adidas">
                <div>
                    <h2>ADIDAS ORIGINALS</h2>
                    <h5>Baskets NY 90 FZ2247 White Blue</h5>
                    <p><span class="slide-prix-sold">45.99 €</span><span class="slide-prix-original"> au lieu de 82.99 €</span>
                    </p>
                    <a href="#" class="ajouteraupanier"><i class="fa-solid fa-cart-plus"></i></a>
                 </div>
            </div>

            <div class="swiper-slide">
                <img src="imgs/produits-slider/YM0YM00417_BDS_main.webp" alt="calvin-klein">
                <div>
                    <h2>Calvin Klein</h2>
                    <h5>Baskets H101 Blanc Noir</h5>
                    <p><span class="slide-prix-sold">50.99 €</span><span class="slide-prix-original"> au lieu de 99.99 €</span>
                    </p>
                    <a class="ajouteraupanier"><i class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="imgs/produits-slider/880dcee40b57433abaa899c931e6fa3a.webp" alt="jules">
                <div>
                    <h2>JULES JEAN SLIM</h2>
                    <h5>Tom 4 longueurs en coton</h5>
                    <p><span class="slide-prix-sold">55 €</span><span class="slide-prix-original"> au lieu de 100 €</span>
                    </p>
                    <a class="ajouteraupanier"><i class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    
    <section class="pro-mainpage">
        <?php

            $id = $marque = $details = $prix = $src = '';
            include('connexion.php');
            $stmt = $pdo->prepare("SELECT * FROM `produits` ");
            $stmt->execute();

            $result = $stmt->fetchAll();

            for($i=0;$i< count($result);$i++){
                $id = $result[$i]["id"] ;
                $marque = $result[$i]["marque"];
                $details = $result[$i]["details"];
                $prix = $result[$i]["prix"];
                $src =$result[$i]["source"];

                createProduit($src,$marque,$details,$prix.'€',$id); 
            
        }
        // debug_to_console($src);

        ?>

    </section>
    
    <div class="btn-montre">
        <button class="montreplus"><a href="#">Montre Plus</a></button>
    </div>

    <section id="banniere-bas">
        <a href="http://www.google.com" id="ban-sold"></a>
        <a href="mailto:wika@wika.com" id="ban-contact"></a>
    </section>
    <?php

        include('footer.html');

    ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script/java.js"></script>
    
</body>

