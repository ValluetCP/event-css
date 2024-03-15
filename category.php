<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <title>Ajouter une Catégorie</title>
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

    <!-- MODAL PANIER (structure générale)-->
    <div id="modalPanier">
        <div class="modalContentPanier">
            <div class="modalPanierContainer">
                <p class="modalPanierAjout">Produit ajouté au panier</p>
                <!-- DEBUT ITEM -->
                <div class="modalPanierContainerItems">
                    <div class="modalPanierimg" style="background-image: url(./img/event_bocal.jpg);">
                        <!-- image en bg -->
                    </div>
                    <div class="modalPaniertxt">
                        <h1 class="modalPaniertitre">Salon de l'automobile</h1>
                        <h2 class="modalPanierCategorie">Atelier</h2>
                        <p class="modalPanierQuantite">Quantité :<span> 1</span></p>
                    </div>
                </div>
                <!-- FIN ITEM -->
            </div>
        </div>
        <a class="modalClosePanier" href="#"><img class="img_croix_popup2" src="./img/coix_verte.svg" alt=""></a>
        <div class="modalPanierDegrade">
            <a href="" id="lb_btnPanier" class="btn_billet_panier">Voir panier</a>
        </div>
    </div>



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
                <a href="#modalPanier" id="e_btnEventReservation" class="modal_btn btn_modal_1_trait">Ajouter une autre réservation</a>
                <a href="" id="e_btnEventQuitter" class="modal_btn btn_modal_2_fond">Fermer</a>
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
            <div class="gaucheImg gaucheImgEvent" style="background-image: url(./img/event_horizontal_thai.jpg);"></div>
        </section>

        <!-- SECTION DROITE - FICHE PRODUIT -->
        <section class="droite">
            <div id="containerCategory" class="containerDroit containerDroitEvent">

                <h1>Créer<br>une catégorie</h1>

                <!-- FORMULAIRE - AJOUTER UNE CATEGORIE -->
                <form id="categorieForm" action="" method="post">
                    <div class="categorie_form">
                        <!-- <label for="">nom de la nouvelle catégorie</label><br> -->
                        <input type="text" placeholder="nom de la nouvelle catégorie">
                    </div>

                    <!-- BOUTON DE VALIDATION RESERVATION -->
                    <div class="btn_flex">
                        <!-- <button type="button" class="reserve  btnEvent btnEvent-3">Réserver</button> -->
                        <button onclick="window.location.href='#modalEvent'" type="button" class="btnEvent btnEvent-3">Ajouter</button>
                    </div>
                </form>

                <h3>Les événements associés</h3>
                <div class="trioCategory">
                    <article class="categoryUn">
                        <figure class="fig_1">
                            <a href="">
                                <div class="imgCategory"><img src="./img/event_poisson.jpg" alt=""></div>
                            </a>
                        </figure>
                        <div class="titreCategory">
                            Asseyez-vous à la grande table
                        </div>
                        <div class="sousTitreCategory">
                            DIVERTISSEMENT
                        </div>
                    </article>
                    <article class="categoryDeux">
                        <figure class="fig_1">
                            <a href="">
                                <div class="imgCategory"><img src="./img/event_bocal.jpg" alt=""></div>
                            </a>
                        </figure>
                        <div class="titreCategory">
                            Calamar gourmand
                        </div>
                        <div class="sousTitreCategory">
                            DIVERTISSEMENT
                        </div>
                    </article>
                    <article class="categoryTrois">
                        <figure class="fig_1">
                            <a href="">
                                <div class="imgCategory"><img src="./img/event_salon_automobile.jpg" alt=""></div>
                            </a>
                        </figure>
                        <div class="titreCategory">
                            Salon de l'automobile
                        </div>
                        <div class="sousTitreCategory">
                            DIVERTISSEMENT
                        </div>
                    </article>

                </div>
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