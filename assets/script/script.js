  // Fonction pour afficher ou masquer le menu déroulant pour mobile en fonction de la largeur de l'écran
  function toggleMobileMenu() {
    const menuMobile = document.getElementById("menu-mobile");
    if (window.innerWidth <= 817) {
      menuMobile.style.display = "block";
    } else {
      menuMobile.style.display = "none";
    }
  }

  // Appeler la fonction au chargement de la page
  toggleMobileMenu();

  // Écouter les changements de taille d'écran et réagir en conséquence
  window.addEventListener("resize", toggleMobileMenu);


 