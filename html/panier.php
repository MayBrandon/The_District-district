<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="icon" type="image/png" href="/assets/img/branding/favicon.png" />
    <title>The District - Panier</title>
</head>
<body>
    <?php include('../header_footer/header.php') ?>
    <h1>Mon Panier</h1>

<h2>Produits sélectionnés :</h2>
<ul id="panier-liste"></ul>

<h2>Prix total :</h2>
<p id="prix-total"></p>
<button onclick="resetPanier()">Réinitialiser</button>

<script src="/assets/script/panier.js"></script>
</body>
</html>