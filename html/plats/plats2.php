<!DOCTYPE html>
<html lang="fr">

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

      <?php include('../../header_footer/header.php') ?>


  <div class="div-body">
        <div class="div-banniere">
        <input type="search" id="searchBar" placeholder="Recherche..." />
        </div>

        <h1 class="categorie-title">Nos plats</h1>

        <div class="all-categories">
        <article class="categorie" >
            <img src="/assets/img/plats/plat-pasta/pasta_akyurt.png" alt="">
            <div class="div-text-categorie">
              <h1 class="menu-categorie-title"><a href="/html/categorie/pages_categorie_pasta/pages_plats_pasta/akyurt.php">Akyurt : </a></h1>
              <p class="categorie-text">
                À <span class="text-deco">The District</span>, notre équipe de chefs talentueux prépare minutieusement chaque ingrédient avant de les enrober d'une pâte à tempura légère et croustillante. Vous serez émerveillés par la fraîcheur et la qualité des légumes de saison ainsi que des fruits de mer sélectionnés avec soin pour ce plat unique.
              </p>
              <button id="addProduct">ajouter au panier</button>
              <!-- BOUTON A CONFIGURER EN JS OU PHP POUR LE PANIER SUREMENT EN PHP A VERIFIER -->
            </div> 
          </article>

          <article class="categorie">
            <img src="/assets/img/plats/plat-pasta/pasta_dana.png" alt="">
            <div class="div-text-categorie">
              <h1 class="menu-categorie-title"><a href="/html/categorie/pages_categorie_pasta/pages_plats_pasta/dana.php">Dana : </a></h1>
              <p class="categorie-text">
                La <b>cuisine asiatique</b> regroupe l'ensemble des styles gastronomiques des pays de d'Asie avec leur
                propres spécificités. Issu d'une identité commune, notamment par l'utilisation d'aliments de base comme le
                riz et le mode de cuisson, elles ont chacune leur spécificité locale. 
              </p>
              <button id="addProduct">ajouter au panier</button>
              <!-- BOUTON A CONFIGURER EN JS OU PHP POUR LE PANIER SUREMENT EN PHP A VERIFIER -->
            </div>
          </article>

          <article class="categorie">
            <img src="/assets/img/plats/plat-pasta/pasta_eneida.png" alt="">
            <div class="div-text-categorie">
              <h1 class="menu-categorie-title"><a href="/html/categorie/pages_categorie_pasta/pages_plats_pasta/eneida.php">Eneida : </a></h1>
              <p class="categorie-text">
                La <b>cuisine asiatique</b> regroupe l'ensemble des styles gastronomiques des pays de d'Asie avec leur
                propres spécificités. Issu d'une identité commune, notamment par l'utilisation d'aliments de base comme le
                riz et le mode de cuisson, elles ont chacune leur spécificité locale.
              </p>
              <button id="addProduct">ajouter au panier</button>
              <!-- BOUTON A CONFIGURER EN JS OU PHP POUR LE PANIER SUREMENT EN PHP A VERIFIER -->
            </div>
          </article>

          <article class="categorie">
            <img src="/assets/img/plats/plat-pasta/pasta_fotios.png" alt="">
            <div class="div-text-categorie">
              <h1 class="menu-categorie-title"><a href="/html/categorie/pages_categorie_pasta/pages_plats_pasta/akyurt.php"">Fotios : </a></h1>
              <p class="categorie-text">
                La <b>cuisine asiatique</b> regroupe l'ensemble des styles gastronomiques des pays de d'Asie avec leur
                propres spécificités. Issu d'une identité commune, notamment par l'utilisation d'aliments de base comme le
                riz et le mode de cuisson, elles ont chacune leur spécificité locale.
              </p>
              <button id="addProduct">ajouter au panier</button>
              <!-- BOUTON A CONFIGURER EN JS OU PHP POUR LE PANIER SUREMENT EN PHP A VERIFIER -->
            </div>
          </article>
        </div>
    </div>
    <div class="div-btn">
      <button class="btn-categorie"><a href="/html/plats/plats.php">Précédent</a></button>
      <button class="btn-categorie"><a href="/html/plats/plats3.php">Suivant</a></button>
    </div>
  </div>

  <!-- <?php include "../footer.html" ?> -->
  <!-- <footer class="social-media">
    <div class="facebook"><img class="social-logo" src="/assets/img/social/facebook.png" alt=""></div>
    <div class="insta"><img class="social-logo" src="/assets/img/social/instagram.png" alt=""></div>
    <div class="linkedin"><img class="social-logo" src="/assets/img/social/linkedin.png" alt=""></div>
    <div class="pinterest"><img class="social-logo" src="/assets/img/social/pinterest.png" alt=""></div>
  </footer> -->
  <script src="/assets/script/plats.js"></script>
</body>

</html>