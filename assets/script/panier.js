console.log("connecté");



function resetPanier() {
    // Supprimer les données du sessionStorage
    sessionStorage.removeItem("panier");
    sessionStorage.removeItem("prixTotal");

    // Rediriger vers la page principale
    window.location.href = "/html/plats/plats.php";
  }

  document.addEventListener("DOMContentLoaded", function() {
    // Récupérer les données du sessionStorage
    var panier = JSON.parse(sessionStorage.getItem("panier")) || [];

    // Calculer le prix total
    var prixTotal = 0;
    panier.forEach(function(produit) {
      prixTotal += produit.prix;
    });
    
    // Enregistrer le prix total dans le sessionStorage
    sessionStorage.setItem("prixTotal", prixTotal);

    // Afficher les produits sélectionnés
    var panierListe = document.getElementById("panier-liste");
    panier.forEach(function(produit) {
      var li = document.createElement("li");


      var div = document.createElement("div");

      var h3 = document.createElement("h3");
      h3.textContent = produit.nom;
      div.appendChild(h3);

      var pDesc = document.createElement("p");
      pDesc.textContent = produit.description;
      div.appendChild(pDesc);

      var pPrix = document.createElement("p");
      pPrix.textContent = "Prix : " + produit.prix + "€";
      div.appendChild(pPrix);

      li.appendChild(div);
      panierListe.appendChild(li);
    });

    // Afficher le prix total
    var prixTotalElement = document.getElementById("prix-total");
    prixTotalElement.textContent = "Prix total : " + prixTotal.toFixed(2) + "€";
  });
