function showList(listClassName){
    var allLists = document.querySelectorAll('.nav2_container div:not(.nav2_menu,.deconnexion,.logo_menu,.logo,.profil_nav,.img_profil_nav)');
    allLists.forEach(function(list) {
        list.classList.add('hidden');
    });

    // Afficher la liste correspondante
    var selectedList = document.querySelector('.' + listClassName);
    selectedList.classList.remove('hidden');
}