<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The District | Nos plats</title>
  <link rel="stylesheet" href="/assets/css/categorie_css/main_categorie.css" />
  <link rel="icon" type="image/png" href="/assets/img/branding/favicon.png" />
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
    
        <-- MENU DÉROULANT POUR MOBILE 
        <div class="div-menu-mobile" style="overflow: hidden; display: none"></div>
      </header> -->

      <?php include('../header_footer/header.php') ?>


  <div class="div-body">
    <div class="div-banniere">
      <input type="search" id="searchBar" placeholder="Recherche..." />
    </div>

    <h1 class="categorie-title">Nos plats</h1>

    <div class="all-categories">
      <article class="categorie">
        <img src="/assets/img/categorie/asian_food_cat.png" alt="">
        <div class="test1">
          <h1 class="menu-categorie-title">Cuisine Asiatique : </h1>
          <p class="categorie-text">
            La <b>cuisine asiatique</b> regroupe l'ensemble des styles gastronomiques des pays de d'Asie avec leur
            propres spécificités. Issu d'une identité commune, notamment par l'utilisation d'aliments de base comme le
            riz et le mode de cuisson, elles ont chacune leur spécificité locale.
          </p>
        </div>
      </article>

      <article class="categorie">

        <img src="/assets/img/categorie/burger_cat.png" alt="">
        <div class="test1">
          <h1 class="menu-categorie-title">Hamburger : </h1>
          <p class="categorie-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias unde asperiores
            deleniti, laudantium perspiciatis facere totam a dicta fugit corrupti dolorem eaque veniam numquam possimus
            cupiditate laborum voluptas recusandae reprehenderit facilis perferendis ut? Cupiditate, iste?</p>
        </div>
      </article>

      <article class="categorie">
        <img src="/assets/img/categorie/pizza_cat.png" alt="">
        <div class="test1">
          <h1 class="menu-categorie-title">Pizza : </h1>
          <p class="categorie-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias unde asperiores
            deleniti, laudantium perspiciatis facere totam a dicta fugit corrupti dolorem eaque veniam numquam possimus
            cupiditate laborum voluptas recusandae reprehenderit facilis perferendis ut? Cupiditate, iste?</p>
        </div>
      </article>

      <article class="categorie">
        <img src="/assets/img/categorie//salade_cat.png" alt="">
        <div class="test1">
          <h1 class="menu-categorie-title">Salade : </h1>
          <p class="categorie-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias unde asperiores
            deleniti, laudantium perspiciatis facere totam a dicta fugit corrupti dolorem eaque veniam numquam possimus
            cupiditate laborum voluptas recusandae reprehenderit facilis perferendis ut? Cupiditate, iste?</p>
        </div>
      </article>

      <article class="categorie">
        <img src="/assets/img/categorie/pasta_cat.png" alt="">
        <div class="test1">
          <h1 class="menu-categorie-title">Pasta : </h1>
          <p class="categorie-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias unde asperiores
            deleniti, laudantium perspiciatis facere totam a dicta fugit corrupti dolorem eaque veniam numquam possimus
            cupiditate laborum voluptas recusandae reprehenderit facilis perferendis ut? Cupiditate, iste?</p>
        </div>
      </article>

      <article class="categorie">
        <img src="/assets/img/categorie/sandwich_cat.png" alt="">
        <div class="test1">
          <h1 class="menu-categorie-title">Sandwich : </h1>
          <p class="categorie-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias unde asperiores
            deleniti, laudantium perspiciatis facere totam a dicta fugit corrupti dolorem eaque veniam numquam possimus
            cupiditate laborum voluptas recusandae reprehenderit facilis perferendis ut? Cupiditate, iste?</p>
        </div>
      </article>
    </div>
    <div class="div-btn">
      <button class="btn-categorie">Précédent</button>
      <button class="btn-categorie">Suivant</button>
    </div>
  </div>

  <!-- <?php include "../footer.html" ?> -->
  <footer class="social-media">
    <div class="facebook"><img class="social-logo" src="/assets/img/social/facebook.png" alt=""></div>
    <div class="insta"><img class="social-logo" src="/assets/img/social/instagram.png" alt=""></div>
    <div class="linkedin"><img class="social-logo" src="/assets/img/social/linkedin.png" alt=""></div>
    <div class="pinterest"><img class="social-logo" src="/assets/img/social/pinterest.png" alt=""></div>
  </footer>
</body>

</html>