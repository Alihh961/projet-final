<?php

include('functions.php');

@since

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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="imgs/WIKA_Logo.svg.png"/>

    <title>Wika / Catalogue</title>
</head>
<body>
    
    <header>
        <a href="index.html" class="logo-con"><img src="imgs/WIKA_Logo.svg.png" alt="Logo" class="logo"></a>
 
         <nav id="nav">
             <ul class="menu">
                <li><a href="#" id="ferm-menu">X</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php" class="active">Shop</a></li>
                <!-- <li><a href="blog.php">Blog</a></li> -->
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
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
 
    <section id="ban-haut-shop">
        <!-- <img  src="imgs/banniere-haut-shop.jpg" alt="Banniere-haut"> -->
    </section>

     <section class="pro-mainpage" id="produits-container" style="display:none;">

        <?php 
        
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');
        createProduit("imgs/produits-shop/adidas/chaussettes/3e8e64e9d00043fdab20abc60154d50e_9366.webp","Adidas","T-shirt",'35€','1');

        
        ?>
       
    </section>
    <section class="pro-mainpage" id="produits-list"></section>

    <div id="pagination">
        <a href="javascript:prevProduits()" id="prev"><i class="fa-solid fa-arrow-left"></i></a>
        <span id="page"></span>
        <a href="javascript:nextProduits()" id="next"><i class="fa-solid fa-arrow-right"></i></a>
    </div>
  
    <?php

        include('footer.html');

    ?>
    <script src="script/java.js"></script>
</body>
</html>