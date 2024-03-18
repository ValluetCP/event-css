<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <meta name="description" content="Une phrase d’environ 170 caractères">
        <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <!-- -------------------- PAGE PROFIL USER - début -------------------- -->
        <main class="profil_container">
            <p>rôle admin / client</p>
            <hr>
            <div class="profilUser">
                <div class="imgProfil">
                    <img src="./img/user_lea.jpg" alt="">
                </div>
                <div class="profilForm">
                    <h1>informations personnelles</h1>
                    <!-- FORMULAIRE - PROFIL USER -->
                    <form id="userProfil" class="userForm" action="" method="post">
                        
                        <div class="user_form">
                            <label id="nom">Nom</label>
                            <input type="text"  name="nom" >
                        </div>
                        
                        <div class="user_form">
                            <label id="prenom">Prénom</label>
                            <input type="text"  name="prenom" >
                        </div>
                        
                        <div class="user_form">
                            <label id="pseudo">Pseudo</label>
                            <input type="text"  name="pseudo" >
                        </div>
                        
                        <div class="user_form">
                            <label id="email">Email</label>
                            <input type="email"  name="email" >
                        </div>
    
                        <!-- BOUTON DE VALIDATION RESERVATION -->
                        <div class="btn_flex">
                            <!-- <button type="button" class="reserve  btnEvent btnEvent-3">Réserver</button> -->
                            <button onclick="window.location.href='#modalEvent'" type="button" class="btnEvent btnEvent-3">modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer>

        </footer>
        <script src="./js/nav_scroll2.js"></script>
        <script>
            function showList(listClassName){
                var allLists = document.querySelectorAll('.nav2_container div:not(.nav2_menu,.deconnexion,.profil_nav,.img_profil_nav)');
                allLists.forEach(function(list) {
                    list.classList.add('hidden');
                });
        
                // Afficher la liste correspondante
                var selectedList = document.querySelector('.' + listClassName);
                selectedList.classList.remove('hidden');
            }
        </script>
    </body>
</html>