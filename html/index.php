<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="icon" type="image/png" href="/assets/img/branding/favicon.png" />
  <title>The District - Accueil</title>
</head>

<body>

  <!-- <header class="navbar">
    <div class="div-logo">
        <img class="logo" src="/assets/img/branding/logo_transparent.png" alt="" />
    </div>
    <nav class="nav-menu">
        <a class="nav-a" href="/html/index.html">Accueil</a>
        <a class="nav-a" href="/html/categorie.html">Catégories</a>
        <a class="nav-a" href="/html/plats.html">Plats</a>
        <a class="nav-a" href="/html/contact.html">Contact</a>
    </nav>

    <-- MENU DÉROULANT POUR MOBILE -->
    <!-- <div class="div-menu-mobile" id="menu-mobile" style="overflow: hidden; display: none">

        <nav class="nav-menu">
            <a class="nav-a" href="/html/index.php">Accueil</a>
            <a class="nav-a" href="/html/categorie.html">Catégories</a>
            <a class="nav-a" href="/html/plats.php">Plats</a>
            <a class="nav-a" href="/html/contact.html">Contact</a>
        </nav>
    </div> -->
<!-- </header> --> 
  <?php include('../header_footer/header.php') ?>

  <div class="div-body">
    <div class="div-banniere">
      <input type="search" id="searchBar" placeholder="Recherche..." />
    </div>
    <div class="div-body-categorie">
      <h1 class="title-categorie">Catégories les plus visitées</h1>

      <div class="div-parent">

          <!-- CATEGORIE ASIAN -->
        <div class="div-enfant1">
          <a href="/html/categorie/pages_categories_asie/categorie_asia.php">
            <img src="/assets/img/categorie/asian_food_cat.png" alt="">
          </a>
          <h1 class="categorie-name">ASIAN</h1>
        </div>

          <!-- CATEGORIE BURGER -->
        <div class="div-enfant2">
          <a href="/html/categorie/pages_categorie_burger/categorie_burger.php"> 
            <img src="/assets/img/categorie/burger_cat.png" alt="">
          </a>
          <h1 class="categorie-name">Burger</h1>
        </div>

          <!-- CATEGORIE PASTA -->
        <div class="div-enfant3">
          <a href="/html/categorie/pages_categorie_pasta/categorie_pates.php">
            <img src="/assets/img/categorie/pasta_cat.png" alt="">
          </a>
          <h1 class="categorie-name">Pasta</h1>
        </div>

          <!-- CATEGORIE PIZZA -->
        <div class="div-enfant4">
          <a href="/html/categorie/pages_categorie_pizza/categorie_pizza.php">
            <img src="/assets/img/categorie/pizza_cat.png" alt="">
          </a>
          <h1 class="categorie-name">Pizza</h1>
        </div>

          <!-- CATEGORIE SALADE -->
        <div class="div-enfant5">
          <a href="/html/categorie/categorie_salade.html">
            <img src="/assets/img/categorie/salade_cat.png" alt="">
          </a>
          <h1 class="categorie-name">Salade</h1>
        </div>

          <!-- CATEGORIE SANDWICH -->
        <div class="div-enfant6">
          <a href="/html/categorie/categorie_sandwich.html">
            <img src="/assets/img/categorie/sandwich_cat.png" alt="">
          </a>
          <h1 class="categorie-name">Sandwich</h1>
        </div>
        
      </div>
    </div>
  </div>

  <div class="div-body-plat">

    <h1 class="title-plat">
      <a href="/html/plats.html">
        Nos plats
      </a>
    </h1>

    <div class="div-parent-plat">
      <div>
        <a href="#">
          <img src="/assets/img/plats/cheesburger.png" class="img-plat-size">
        </a>
      </div>

      <div>
        <a href="#">
          <img src="/assets/img/plats/pizza-margherita.png" class="img-plat-size">
        </a>
      </div>

      <div>
        <a href="#">
          <img src="/assets/img/plats/spaghetti-legumes.png" class="img-plat-size">
        </a>
      </div>
    </div>
  </div>

  <?php
      include('../header_footer/footer.php'); 
  ?> 
  
  <!-- <footer class="social-media">
    <div class="facebook"><img class="social-logo" src="/assets/img/social/facebook.png" alt=""></div>
    <div class="insta"><img class="social-logo" src="/assets/img/social/instagram.png" alt=""></div>
    <div class="linkedin"><img class="social-logo" src="/assets/img/social/linkedin.png" alt=""></div>
    <div class="pinterest"><img class="social-logo" src="/assets/img/social/pinterest.png" alt=""></div>
  </footer> -->

  <script src="/assets/script/script.js"></script>
</body>

</html>