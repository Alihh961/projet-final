<?php 
session_start();
if(isset($_SESSION["connecter"])){
    header("location:indexM.php");//* eviter que l'utilisateur entre manual le url , me rediriger vers la page log-in si l'utilisateur n'est pas connecté *//
}

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

    <title>Wika</title>
    

</head>

<body>

    <header>
       <a href="index.html" class="logo-con"><img src="imgs/WIKA_Logo.svg.png" alt="Logo" class="logo"></a>

        <nav id="nav">
            <ul class="menu">
                <li><a href="#" id="ferm-menu">X</a></li>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <!-- <li><a href="blog.html">Blog</a></li> -->
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a id="ll" href="login.php">Login</a></li>
            </ul>
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

        <div class="product">
            <img src="imgs/produits-accueil/adidas/27db61ba645e4da185a8ae4e01010b5d_9366.webp" alt="adidas-h">
            <div class="des">
                <span>Adidas</span>
                <h5>T-SHIRT ADICOLOR</h5>
                <h4>3511€</h4>
                <a href="#" class="ajouteraupanier"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

        </div>

        <div class="product">

            <img src="imgs/produits-accueil/adidas/17400dd13a0a4a8c9913ada1012d0efd_9366.webp" alt="adidas-b">
            <div class="des">
                <span>Adidas</span>
                <h5>PANT. DE SURVÊTEMENT</h5>
                <h4>30€</h4>
                <a href='#' class="ajouteraupanier"><i class="fa-solid fa-cart-plus"></i></a> 
            </div>

        </div>

        <div class="product">

            <img src="imgs/produits-accueil/adidas/Socquettes_Cushioned_(3_paires)_Gris_DZ9383_03_standard.jpg" alt="adidas-cht">
            <div class="des">
                <span>Adidas</span>
                <h5>SOCQUETTES(3 PAIRES)</h5>
                <h4>12€</h4>
                <a href="#" class="ajouteraupanier"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

        </div>

        <div class="product">
            <img src="imgs/produits-accueil/adidas/f7afc9ac90024b039508ac0200fc829c_9366.webp" alt="adidas-ch">
            <div class="des">
                <span>Adidas</span>
                <h5>CHAUSSURE RUN</h5>
                <h4>45€</h4>
                <a href="#" class="ajouteraupanier"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
        </div>

        <div class="product">
            <img src="imgs/produits-accueil/celio/la-martina-chemise-la-martina-blanche-polo-team-anglaise-regular-fit-pour-homme.jpg" alt="celio-h">
            <div class="des">
                <span>Celio</span>
                <h5>CHEMISE BLANC</h5>
                <h4>50€</h4>
                <a href="#" class="ajouteraupanier"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
        </div>

        <div class="product">
            <img src="imgs/produits-accueil/jules/1001193_17033_V1.webp" alt="jules-ch">
            <div class="des">
                <span>Jules</span>
                <h5>CHAUSSURE GH0005</h5>
                <h4>49€</h4>
                <a href="#" class="ajouteraupanier"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
        </div>

        <div class="product">
            <img src="imgs/produits-accueil/jules/1001833_14488_V11.webp" alt="jules-h">
            <div class="des">
                <span>Jules</span>
                <h5>CHEMISE KLM009</h5>
                <h4>40€</h4>
                <a href="#" class="ajouteraupanier"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
        </div>

        <div class="product">
            <img src="imgs/produits-accueil/jules/719527_9970_V11.webp" alt="jules-b">
            <div class="des">
                <span>Jules</span>
                <h5>JEANS N507</h5>
                <h4>35€</h4>
                <a href="#" class="ajouteraupanier"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
        </div>

    </section>
    
    <div class="btn-montre">
        <button class="montreplus"><a href="#">Montre Plus</a></button>
    </div>

    <section id="banniere-bas">
        <a href="http://www.google.com" id="ban-sold"></a>
        <a href="mailto:wika@wika.com" id="ban-contact"></a>
    </section>

    <footer>

        <section class="foot">
            <div>
                <h3>Votre Magasin</h3>
                <p>Paris</p>
                <p>20 Rue Bado 75006</p>
                <a href="mailto:paris@wika.com">&#9993; paris@wika.com</a>
                <a href="tel:0033210203040">&#128222; 02 10 20 30 40</a>
                <p><span>-Horaires d'ouvertures:</span> 10:00 - 19:00. Mon - Sat</p>
            </div>

            <div> 
                <h3>De Nous</h3>
                <a href="#">-Informations de livraison</a>
                <a href="#">-Retours et remboursement</a>
                <a href="#">-Contact</a>
            </div>

            <div>
                <h3>Mon Compte</h3>
                <a href="">-Connetcez vous</a>
                <a href="">-Suivre votre commande</a>
                <a href="">-Aide</a>
            </div>
                
            <div>
                <h3>Suivez-nous</h3>
                <a href="https://www.facebook.com/"><i class='fa-brands fa-facebook-square'></i> WikaFrance</a>
                <a href="https://www.instagram.com/"><i class='fa-brands fa-instagram-square'></i> WikaFrance</a>
                <a href=""><i class="fa-brands fa-twitter-square"></i> WikaFrance</a>
            </div>

            <div class="wika-app">
                <h3>Wika App</h3>
                <a href="#"><i class="fa-brands fa-app-store-ios" style ='padding-right: 10px;color:rgb(61, 129, 255);margin-left:5px'></i><span>  Telechargement APP Store</span></a>
                <a href="#"><i class="fa-brands fa-google-play" style ='padding-right: 10px;'></i><span>  Telechargment Google Play</span></a>
            </div>
        </section>

        <hr>

        <div class="mdp">

            <img src="imgs/modes de paiement/1528273036537082707.png" alt="American Express">
            <img src="imgs/modes de paiement/15282730981571339584.png" alt="CB">
            <img src="imgs/modes de paiement/15282732803587566708.png" alt="Mastercard">
            <img src="imgs/modes de paiement/15282732983375743706.png" alt="Maestro">
            <img src="imgs/modes de paiement/15282733431754785346.png" alt="PayPal">
       
        </div>

        <hr>

        <figure>
           <a href="#"><img src="imgs/WIKA_Logo.svg.png" alt="Logo-footer"></a>
           <figcaption>Depuis 2004</figcaption>
        </figure>

    </footer>
   
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script/java.js"></script>
    
</body>

