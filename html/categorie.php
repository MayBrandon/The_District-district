<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The District | Nos catégories</title>
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

     MENU DÉROULANT POUR MOBILE 
    <div class="div-menu-mobile" style="overflow: hidden; display: none"></div>
  </header> -->

  <?php include('../header_footer/header.php') ?>


  <div class="div-body">
    <div class="div-banniere">
      <input type="search" id="searchBar" placeholder="Recherche..." />
    </div>

    <h1 class="categorie-title">Nos categories</h1>

    <div class="all-categories">
      <article class="categorie">
        <div>
         
        </div>
        <img src="/assets/img/categorie/asian_food_cat.png" alt="">
        <div class="div-text-categorie">
          <a class="link-categ" href="/html/categorie/pages_categories_asie/categorie_asia.php">
            <h1 class="menu-categorie-title">Cuisine Asiatique : </h1>
          </a>
          <p class="categorie-text">
            La <b>cuisine asiatique</b> regroupe l'ensemble des styles gastronomiques des pays de d'Asie avec leur
            propres spécificités. Issu d'une identité commune, notamment par l'utilisation d'aliments de base comme le
            riz et le mode de cuisson, elles ont chacune leur spécificité locale.
          </p>
        </div>
      </article>

      <article class="categorie">
        <img src="/assets/img/categorie/burger_cat.png" alt="">
        <div class="div-text-categorie">
        <a class="link-categ" href="/html/categorie/pages_categorie_burger/categorie_burger.php">
          <h1 class="menu-categorie-title">Hamburger : </h1>
        </a>
          <p class="categorie-text">Le menu hamburger est un classique de la restauration rapide qui séduit les gourmands du monde entier. Cette savoureuse création culinaire est constituée d'un délicieux steak de bœuf grillé ou d'une alternative végétarienne pour satisfaire tous les palais, servi entre deux moelleux pains à hamburger.</p>
        </div>
      </article>

      <article class="categorie">
        <img src="/assets/img/categorie/pizza_cat.png" alt="">
        <div class="div-text-categorie">
        <a class="link-categ" href="/html/categorie/pages_categorie_pizza/categorie_pizza.php">
          <h1 class="menu-categorie-title">Pizza : </h1>
        </a>
          <p class="categorie-text">Découvrez l'incroyable pizza, le joyau culinaire qui évoque instantanément des images de l'Italie ensoleillée et qui séduit les amateurs de cuisine du monde entier. Cette œuvre d'art culinaire commence par une base de pâte fraîche et moelleuse, préparée avec amour et pétrie à la perfection.</p>
        </div>
      </article>
      
      <article class="categorie">
        <img src="/assets/img/categorie/pasta_cat.png" alt="">
        <div class="div-text-categorie">
        <a class="link-categ" href="/html/categorie/pages_categorie_pasta/categorie_pates.php">
          <h1 class="menu-categorie-title">Pasta : </h1>
        </a>
          <p class="categorie-text">Tout commence par des pâtes fraîches, élaborées à partir des meilleurs ingrédients et pétries avec amour. Nous proposons une sélection variée de formes de pâtes, allant des spaghettis longs et fins aux penne rigate en passant par les farfalle colorées, afin que vous puissiez choisir votre préférée.</p>
        </div>
      </article>

      <article class="categorie" href="">
        <img src="/assets/img/categorie/salade_cat.png" alt="">
        <div class="div-text-categorie">
        <a class="link-categ" href="/html/categorie/pages_categorie_salade/categorie_salade.php">
          <h1 class="menu-categorie-title">Salade : </h1>
        </a>
          <p class="categorie-text">Découvrez notre salade exquise, un véritable festin pour les sens et une symphonie de fraîcheur ! Notre création culinaire allie les ingrédients les plus savoureux pour offrir une expérience gustative inoubliable.</p>
        </div>
      </article>


      <article class="categorie">
        <img src="/assets/img/categorie/sandwich_cat.png" alt="">
        <div class="div-text-categorie">
        <a class="link-categ" href="/html/categorie/pages_categorie_sandwich/categorie_sandwich.php">
          <h1 class="menu-categorie-title">Sandwich : </h1>
        </a>
          <p class="categorie-text">Découvrez nos délicieux sandwiches, des créations gastronomiques qui marient harmonieusement des ingrédients frais et savoureux entre deux moelleux morceaux de pain. Chaque bouchée est une explosion de saveurs, une symphonie de textures qui ravira vos papilles.</p>
        </div>
      </article>
    </div>
    <!-- <div class="div-btn">
      <button class="btn-categorie">Précédent</button>
      <button class="btn-categorie">Suivant</button>
    </div> -->
  </div>

  <?php
      include('../header_footer/footer.php'); 
  ?> 
</body>

</html>