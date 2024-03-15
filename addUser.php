<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <title>Ajouter un utilisateur</title>
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

    <nav class="navbar">

        <!-- BARRE DE NAVIGATION - début -->
        <div class="nav_logo">
            <a href=""><img id="scrollLogoClair" class="logo logo_vert_clair" src="./img/img_logo/logo_vert_clair.svg" alt="logo"></a>
            <a href=""><img id="scrollLogoFonce" class="logo logo_vert_fonce" src="./img/img_logo/logo_vert_fonce.svg" alt=""></a>
        </div>
        <div class="navigation">
            <div class="recherche">
                <input id="recherche" type="text" placeholder="RECHERCHER">
            </div>
            <div class="panier">PANIER (0)</div>
        </div>

        <!-- Burger - animation -->
        <input type="checkbox" class="trigger" />
        <div class="burger">
            <div id="e_trait1" class="trait1"></div>
            <div id="e_trait2" class="trait2"></div>
        </div>
        <!-- BARRE DE NAVIGATION - fin -->

        <!-- ESPACE DE NAVIGATION - début -->
        <div class="menu_nav grid_menu">
            <div class="menu_vert">
                <div class="nav2_container">

                    <!-- PARTIE DROITE -->
                    <!-- LOGO - MENU DE NAVIGATION -->
                    <div class="logo_menu">
                        <a href=""><img class="logo logo_vert_clair" src="./img/img_logo/logo_vert_clair.svg" alt="logo"></a>
                    </div>
                    <!-- PROFIL CONNEXION  - (prénom & image profil rond) -->
                    <div class="profil_nav">
                        <div class="img_profil_nav">
                            <a href=""><img class="img_profil" src="./img/calamar.JPG" alt=""></a>
                        </div>
                        <p>Bonjour Clara,</p>
                    </div>

                    <!-- ESPACE NAVIGATION  - MENU (admin & client) -->
                    <div class="nav2_menu">
                        <ul>
                            <li><a href="#" onclick="showList('listeProfil')">Profil</a></li>
                            <li><a href="#" onclick="showList('listeAdmin')">Espace Admin</a></li>
                            <li><a href="#" onclick="showList('listeClient')">Espace Client</a></li>
                        </ul>
                    </div>

                    <!-- ESPACE NAVIGATION  - LIENS -->
                    <div class="listeProfil hidden list_sous_menu">
                        <ul>
                            <li><a href="">Informations personnelles</a></li>
                            <li><a href="">Factures</a></li>
                        </ul>
                    </div>
                    <div class="listeAdmin list_sous_menu">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href="">liste des catégories</a></li>
                            <li><a href="">liste des événements</a></li>
                            <li><a href="">liste des utilisateurs</a></li>
                        </ul>
                    </div>
                    <div class="listeClient hidden list_sous_menu">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href="">Nos événements</a></li>
                            <li><a href="">Vos réservations</a></li>
                        </ul>
                    </div>

                    <!-- DECONNEXION  - LIENS -->
                    <div class="deconnexion">
                        <a href="">Déconnexion</a>
                    </div>
                </div>
            </div>

            <!-- PARTIE GAUCHE -->
            <div class="menu_fond">
            </div>
        </div>
        <!-- ESPACE DE NAVIGATION - fin -->
    </nav>

    <main class="site siteEvent">
        <!-- SECTION GAUCHE - IMAGE FIXE -->
        <section class="gauche gaucheEvent">
            <div class="gaucheImg gaucheImgEvent" style="background-image: url(./img/event_horizontal_voiture.jpg);"></div>
        </section>

        <!-- SECTION DROITE - FICHE PRODUIT -->
        <section class="droite">
            <div id="containerUserForm" class="containerGabaritForm containerDroit containerDroitEvent">

                <h1>Ajouter<br>un utilisateur</h1>

                <!-- FORMULAIRE - AJOUTER UN USER -->
                <form id="userForm" class="gabaritForm" action="" method="post">
                    
                    <div class="gabarit_form">
                        <input type="text"  placeholder="nom" name="nom" >
                    </div>
                    
                    <div class="gabarit_form">
                        <input type="text"  placeholder="prenom" name="prenom" >
                    </div>
                    
                    <div class="gabarit_form">
                        <input type="text"  placeholder="pseudo" name="pseudo" >
                    </div>
                    
                    <div class="gabarit_form">
                        <input type="email"  placeholder="email" name="email" >
                    </div>
                    
                    <div class="gabarit_form">
                        <input type="password"  placeholder="mot de passe" name="mdp" >
                    </div>

                    <div class="gabarit_form">
                        <label id="img_profil">Télécharger une photo de profil :</label>
                        <input type="file" class="form-control" name="img_profil" class="file">
                    </div>

                    <!-- BOUTON DE VALIDATION RESERVATION -->
                    <div class="btn_flex">
                        <!-- <button type="button" class="reserve  btnEvent btnEvent-3">Réserver</button> -->
                        <button onclick="window.location.href='#modalEvent'" type="button" class="btnEvent btnEvent-3">Ajouter un événement</button>
                    </div>
                </form>

            </div>

        </section>
    </main>
    <footer></footer>
    <script src="./js/nav_scroll2.js"></script>
    <script>
        function showList(listClassName) {
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