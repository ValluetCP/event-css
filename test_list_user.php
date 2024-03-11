<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Liste des utilisateurs</title>
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


<main id="siteListUser" class="siteList">

    <!-- ------------------------------- HAUT -------------------------------- -->
    <!-- SECTION DU HAUT - IMAGE FIXE -->
    <section class="haut">

        <!-- image -->
        <div id="ImgHauteListUser" class="ImgHaute" style="background-image: url(./img/event_horizontal_voiture.jpg);">
        </div>

        <!-- texte -->
        <div class="titreListEvent">
            <h1>liste des utilisateurs</h1>
            <h2>ajouter, modifier, désactiver, supprimer</h2>

            <!-- <p>
                Plongez dans un monde d'expériences exclusives et inoubliables où chaque moment est une découverte. Assistez à des concerts privés, privatisez des lieux insolites et d'exception, et vivez des compétitions de haut vol en compagnie de vos athlètes préférés. Transformez-vous en star internationale ou en pilote de Formule 1 le temps d'une journée. Laissez-vous guider par des chefs étoilés qui dévoileront leurs secrets culinaires lors d'ateliers intimes. Savourez des brunchs aux meilleures tables et émerveillez-vous devant des shows culinaires spectaculaires. Offrez-vous des instants uniques où le luxe et l'exclusivité se marient pour créer des souvenirs inoubliables.
            </p> -->

            <!-- catégorie : divertissement, atelier, gastronomie, représentation, loisir -->
        </div>
    </section>


    <!-- ------------------------------- BAS -------------------------------- -->
    <!-- SECTION DU BAS - LISTE DES EVENTS -->
    <section class="bas">
        
        <!-- CONTAINER GLOBAL - liste des events -->
        <div id="container_listUser" class="container_list">

            <!-- ZONE FILTRE -->
            <div class="container_btnFiltre_listEvent">

                <!-- btn Prochainement - btn historique -->
                <div class="btnProchainHistorique">
                    <a href="" id="reinitialiser_resultat" class="prochainement_listEvent">clients</a>
                    <a href="" id="prochain_event" class="historique_listEvent">admins</a>
                </div>
                
                <!-- FILTRE -->
                <div class="filtreCategory">
                    <button type="submit" class="lb_filtre">Filtrer</button>
                    <div class="lb_selectFiltre">
                      <select name="lb_categoryFiltre" id="lb_categoryFiltre">
                        <option value="1">Toutes les catégories</option>
                        <option value="2">Divertissement</option>
                        <option value="3">Atelier</option>
                      </select>
                    </div>
                </div>
            </div>

            <!-- Div vide pour afficher le contenu -->
            <div id="resultat" class="overflow_listEvent">   
                <!-- MODULE 1 -->
                <!-- MODULE pour la boucle -->
                <div class="lb_event">

                    <!-- image en backgound -->
                    <div class="lb_imageEvent">
                        <img src="./img/event_miami.jpg" alt="">
                    </div>

                    <!-- texte -->
                    <div class="lb_eventContainer">
                        <div class="lb_numeroEvent">01</div>
                        <div class="lb_text">
                        <div class="lb_titre">Coconut milk</div>
                        <div class="lb_categoryDate">
                            <div class="lb_category">Atelier</div>
                            <div class="lb_date">29-05-2024</div>
                        </div>
                        </div>
                    </div>
                    <div class="lb_reservation">
                        <a href="#modalBillet" class="lb_billet">Télécharger le billet</a>
                        <a href="" class="lb_consulter">Consulter</a>
                    </div>
                </div>

                <!-- MODULE 2 -->
                <!-- MODULE pour la boucle -->
                <div class="lb_event">

                    <!-- image en backgound -->
                    <div class="lb_imageEvent">
                        <img src="./img/event_flamant.jpg" alt="">
                    </div>

                    <!-- texte -->
                    <div class="lb_eventContainer">
                        <div class="lb_numeroEvent">02</div>
                        <div class="lb_text">
                        <div class="lb_titre">Pink Flamingo</div>
                        <div class="lb_categoryDate">
                            <div class="lb_category">Atelier</div>
                            <div class="lb_date">29-05-2024</div>
                        </div>
                        </div>
                    </div>
                    <div class="lb_reservation">
                        <a href="#modalInfoPerso" class="lb_billet">Télécharger le billet</a>
                        <a href="" class="lb_consulter">Consulter</a>
                    </div>
                </div>
    
            </div>

        </div>



    </section>
</main>


<footer></footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="./js/nav_scroll2.js"></script>

    <script>

        // CODE JS : SCROLLBAR
        function showList(listClassName){
            var allLists = document.querySelectorAll('.nav2_container div:not(.nav2_menu,.deconnexion,.profil_nav,.img_profil_nav)');
            allLists.forEach(function(list) {
                list.classList.add('hidden');
            });
    
            // Afficher la liste correspondante
            var selectedList = document.querySelector('.' + listClassName);
            selectedList.classList.remove('hidden');
        }



        // CODE JS : BTN AJAX (PROCHAINEMENT & HISTORIQUE)

        // Stocker le contenu initial de la div resultat
        var contenuInitial = $('#resultat').html();

        // Dès que la page sera complètement chargée, que le DOM (Document Objet Modèle) sera entièrement généré
        $(document).ready(function() {

            // a) utiliser la fonction on('change') de jquery afin de sélectionner un nom dans la liste déroulante : $('#personne').on('change', function()
            $('#prochain_event').on('click', function(event) {
                event.preventDefault()

                // c) Sérialiser le contenu des champs du formulaire (dans cet exemple il y a un seul champ), à l'aide de la fonction serialize() de jQuery

                // d) utiliser la méthode ajax de jquery pour l'affichage de la réponse
                $.ajax({
                    url: "traitement/traitement_ajax2.php", // le fichier cible, celui qui fera le traitement (projet : mettre le chemin que l'on aurait mis dans la balise <a>)
                    type: "POST", // la méthode utilisée (projet : ne rien mettre, par défaut on sera sur la method GET)
                    // les paramètres à fournir ex : ...id=4&nom=anonyme...(projet : on ne met rien) 
                    dataType: 'json', // le format des données attendues en tableau JSON pour être interprété et éxécuté par AJAX (projet : 'json') 
                    success: function(response) {
                        // la fonction qui doit s'exécuter lors de la réussite de la communication ajax 
                        console.log(response);
                        $('#resultat').html(response.contenu);
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });
            });

            // Réinitialiser la div resultat à son contenu initial
            $('#reinitialiser_resultat').on('click', function(event) {
                event.preventDefault();
                $('#resultat').html(contenuInitial);
            });


        });
    </script>
</body>
</html>