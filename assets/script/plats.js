console.log("connecté");

function addProduct(idProduit) {
    var produit = {
      image: "",
      nom: "",
      description: "",
      prix: 0
    };

if (idProduit === 1) {
    produit.image = "/assets/img/plats/plat-burger/burger_boltneva.png"
    produit.nom = "Hamburger - Boltneva";
    produit.description = "Salade, tomates, oeuf, steak";
    produit.prix = 10.00;
} else if (idProduit === 2) {
    produit.image = "assets/img/plats/plat-burger/burger_caricatte.png",
    produit.nom = "Hamburger - Caricatte",
    produit.description = "Cheddar, 2 Steaks, fromage",
    produit.prix = 10.00
} else if (idProduit === 3) {
    produit.image = "assets/img/plats/plat-burger/burger_husko.png",
    produit.nom = "Hamburger - Husko",
    produit.description = "Salade, tomates, oignon, 2 steaks",
    produit.prix = 10.00
} else if (idProduit === 4) {
    produit.image = "assets/img/plats/plat-burger/burger_korba.png",
    produit.nom = "Hamburger - Korba",
    produit.description = "Salades, tomates, oignon, Poulet",
    produit.prix = 10.00
} else if (idProduit === 5) {
    produit.image = "assets/img/plats/plat-pasta/pasta_akyurt.png",
    produit.nom = "Pates - Akyurt",
    produit.description = "Creme fraiche, lardons, oignon, mozarella",
    produit.prix = 12.50
} else if (idProduit === 6) {
    produit.image = "assets/img/plats/plat-pasta/pasta_dana.png",
    produit.nom = "Pates - Dana",
    produit.description = "Sauce tomate, persil, oignon, viande hachée",
    produit.prix = 12.50
} else if (idProduit === 7) {
    produit.image = "assets/img/plats/plat-pasta/pasta_eneida.png",
    produit.nom = "Pates - Eneida",
    produit.description = "",
    produit.prix = 12.50
} else if (idProduit === 8) {
    produit.image = "assets/img/plats/plat-pasta/pasta_fotios.png",
    produit.nom = "Pasta - Fotios",
    produit.description = "",
    produit.prix = 12.50
} else if (idProduit === 9) {
    produit.image = "assets/img/plats/plat-pizza/pizza_desativado.png",
    produit.nom = "Pizza - Desativado",
    produit.description = "",
    produit.prix = 10.00
} else if (idProduit === 10) {
    produit.image = "assets/img/plats/plat-pizza/pizza_federica.png",
    produit.nom = "Pizza - Federica",
    produit.description = "",
    produit.prix = 10.00
} else if (idProduit === 11) {
    produit.image = "assets/img/plats/plat-pizza/pizza_kristina.png",
    produit.nom = "Pizza - Kritina",
    produit.description = "",
    produit.prix = 10.00
} else if (idProduit === 12) {
    produit.image = "assets/img/plats/plat-pizza/pizza_valeria.png",
    produit.nom = "Pizza - Valeria",
    produit.description = "",
    produit.prix = 7.50
} else if (idProduit === 13) {
    produit.image = "assets/img/plats/plat-salade/salade_aagard.png",
    produit.nom = "Salade - Aagard",
    produit.description = "",
    produit.prix = 7.50
} else if (idProduit === 14) {
    produit.image = "assets/img/plats/plat-salade/salade_boltneva.png",
    produit.nom = "Salade - Boltneva",
    produit.description = "",
    produit.prix = 7.50
} else if (idProduit === 15) {
    produit.image = "assets/img/plats/plat-salade/salade_luoto.png",
    produit.nom = "Salade - Luoto",
    produit.description = "",
    produit.prix = 7.50
} else if (idProduit === 16) {
    produit.image = "assets/img/plats/plat-salade/salade_tentis.png",
    produit.nom = "Salade - Tentis",
    produit.description = "",
    produit.prix = 7.50
} else if (idProduit === 17) {
    produit.image = "assets/img/plats/plat-sandwich/sandwich_fotios.png",
    produit.nom = "Sandwich - Fotios",
    produit.description = "",
    produit.prix = 7.50
} else if (idProduit === 18) {
    produit.image = "assets/img/plats/plat-sandwich/sandwich_gonzalo.png",
    produit.nom = "Sandwich - Gonzalo",
    produit.description = "",
    produit.prix = 7.50
} else if (idProduit === 19) {
    produit.image = "assets/img/plats/plat-sandwich/sandwich_martinez.png",
    produit.nom = "Sandwich - Martinez",
    produit.description = "",
    produit.prix = 7.50
} else if (idProduit === 20) {
    produit.image = "assets/img/plats/plat-sandwich/sandwich_rajesh.png",
    produit.nom = "Sandwich - Rajesh",
    produit.description = "",
    produit.prix = 7.50
} else if (idProduit === 21) {
    produit.image = "assets/img/plats/plats-asie/pexels-jonathan-borba-3622477.png",
    produit.nom = "Tempura",
    produit.description = "",
    produit.prix = 7.50
} else if (idProduit === 22) {
    produit.image = "assets/img/plats/plats-asie/porkRamen.png",
    produit.nom = "Ramen au porc",
    produit.description = "",
    produit.prix = 7.50
} else if (idProduit === 23) {
    produit.image = "assets/img/plats/plats-asie/chickenAsia.png",
    produit.nom = "c'est quoi ce poulet ?!",
    produit.description = "",
    produit.prix = 7.50
} else if (idProduit === 24) {
    produit.image = "assets/img/plats/plats-asie/misoSoupe.png",
    produit.nom = "Soupe miso",
    produit.description = "",
    produit.prix = 7.50
}
}
