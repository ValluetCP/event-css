<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Profil utilisateur</title>
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
    <!-- MODAL EVENT (Confirmation "Ajouter une réservation")-->
    <div id="modalEvent">
        <div class="modal_content">
            <a class="modal_close" href="#"><img class="img_croix_popup" src="./img/croix_close.svg" alt=""></a>
            <div class="modalTexte">
                <h2 class="modalTitre">Votre événement</h2>
                <hr class="modalTrait">
                <p>Une réservation a déjà été faite. Vous souhaitez :</p>
                <p>Effectuer une <a href=""> annulation</a><br>
                Consulter <a href=""> l'historique</a></p>
            </div>
            <div class="btnEventGroup">
                <a href="" id="e_btnEventReservation"class="modal_btn btn_modal_1_trait">Ajouter une autre réservation</a>
                <a href="" id="e_btnEventQuitter"class="modal_btn btn_modal_2_fond">Fermer</a>
            </div>
        </div>
    </div>

    <!-- NAV -->
    <!-- <nav>
        <div class="nav_logo">
            <img src="./img/img_logo/logo_vert_fonce.svg" alt="">
          </div>
        <div class="navigation">
            <div class="recherche">
                <input id="recherche" type="text" placeholder="RECHERCHER">
            </div>
            <div class="panier">PANIER (0)</div>
            <div class="menu">
                <div class="trait1"></div>
                <div class="trait2"></div>
            </div>
        </div>
    </nav> -->

    <nav class="navbar">
        <!-- -------------------- BARRE NAVIGATION - début -------------------- -->
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
                    
                    <!-- -------------------- ESPACE NAVIGATION - début -------------------- -->

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



    <!-- ---------------------------- PAGE PROFIL USER - début ---------------------------- -->
    <main class="siteProfil">
        
        <!-- SECTION GAUCHE - INFO USER -->
        <section class="gaucheProfil">
            <div class="containerGaucheProfil">
                <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis debitis repellendus quia quisquam vitae itaque explicabo laborum sequi tempora, impedit laboriosam laudantium aut minus doloremque in blanditiis accusamus asperiores, unde sit sunt nihil eligendi tenetur, veniam ipsam? Debitis reprehenderit saepe tempore modi consectetur nisi fuga explicabo consequuntur laborum voluptatum molestias, autem et unde quos quam, sit culpa, cumque illum possimus laudantium aliquid cupiditate recusandae aliquam quasi? Assumenda, possimus minima nihil adipisci numquam explicabo et repudiandae quos optio, omnis saepe totam. Similique laudantium, reprehenderit deserunt alias rerum ea repudiandae expedita quia delectus dolor. Rem nisi adipisci exercitationem quia error beatae vitae.</P>
            </div>
        </section>

        <!-- SECTION DROITE - IMAGE FIXE -->
        <section class="droitProfil">
            <div class="droitImg droitImgProfil"></div>
        </section>

    </main>
    <footer></footer>
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