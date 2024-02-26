function showList(listClassName){
    var allLists = document.querySelectorAll('.nav2_container div:not(.nav2_menu,.deconnexion,.logo_menu,.logo,.profil_nav,.img_profil_nav)');
    allLists.forEach(function(list) {
        list.classList.add('hidden');
    });

    // Supprimer la classe active de tous les liens de navigation
    var navLinks = document.querySelectorAll('.nav2_menu ul li a');
    navLinks.forEach(function(link) {
        link.classList.remove('active');
    });

    // Afficher la liste correspondante
    var selectedList = document.querySelector('.' + listClassName);
    selectedList.classList.remove('hidden');

    // Ajouter la classe active au lien de navigation cliqué
    var clickedLink = document.querySelector('a[href="#"][onclick="showList(\'' + listClassName + '\')"]');
    clickedLink.classList.add('active');
}
