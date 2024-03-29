<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/assets/css/contact.css" />
  <link rel="icon" type="image/png" href="/assets/img/branding/favicon.png" />
  <title>The District - Contact</title>
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
      <!-- <input type="search" id="searchBar" placeholder="Recherche..." /> -->
    </div>
    <div class="div-body-categorie">
      <h1 class="form-title">Formulaire de contact</h1>

      <div class="div-body-contact">
        <form id="monFormulaire">
          <div class="form-row">
            <div class="form-group">
              <label for="prenom">Prénom :</label>
              <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
              <label for="nom">Nom :</label>
              <input type="text" id="nom" name="nom" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="email">Email :</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="telephone">Téléphone :</label>
              <input type="tel" id="telephone" name="telephone" maxlength="10" required>
            </div>
          </div>

          <div class="form-group">
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>
          </div>

          <input type="submit" value="Envoyer">
        </form>

      </div>

      <?php
        include('../header_footer/footer.php'); 
      ?> 

      <script src=""></script>
</body>

</html>