<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Liste des événements</title>
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






<main class="siteListEvent">

    <!-- ------------------------------- HAUT -------------------------------- -->
    <!-- SECTION DU HAUT - IMAGE FIXE -->
    <section class="haut">
        <div class="ImgHauteListEvent">
        </div>
        <div class="titreListEvent">
            <h1>tous nos événements</h1>
            <h2>sont à découvrir</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis placeat inventore, voluptates reprehenderit repellat velit esse cupiditate perspiciatis minus porro tenetur. Eaque consequuntur fugit culpa facilis ut quibusdam repudiandae modi provident voluptate quasi laborum deleniti sunt, porro tenetur illum commodi. Blanditiis fuga sed, laudantium provident totam itaque eius nostrum vitae!</p> -->

            <!-- <p>Assister à des représentations privé (concert, ), privatiser des lieux insolite et d'exceptions, se retrouver en petit commité pour assister à des compétitions de haut-vol, en face de vos athlètes préférés, être/ se retrouver dans la peau d'une star internationale ou encore d'un pilote de fomule 1 le temps d'une journée. Des atliers avec pour professeur un référent chacun dans son domaine culinaires qui vous  Un tête à tête avec notre sélection des plus grands chefs étoilés livreront leur plus beaux secrets pour épaté vos proches. Prendre place aux meilleurs table pour un brunch, assister à des shows culinaires.</p> -->

            <p>
                Plongez dans un monde d'expériences exclusives et inoubliables où chaque moment est une découverte. Assistez à des concerts privés, privatisez des lieux insolites et d'exception, et vivez des compétitions de haut vol en compagnie de vos athlètes préférés. Transformez-vous en star internationale ou en pilote de Formule 1 le temps d'une journée. Laissez-vous guider par des chefs étoilés qui dévoileront leurs secrets culinaires lors d'ateliers intimes. Savourez des brunchs aux meilleures tables et émerveillez-vous devant des shows culinaires spectaculaires. Offrez-vous des instants uniques où le luxe et l'exclusivité se marient pour créer des souvenirs inoubliables.
            </p>

            <!-- catégorie : divertissement, atelier, gastronomie, représentation, loisir -->
        </div>
    </section>


    <!-- ------------------------------- BAS -------------------------------- -->
    <!-- SECTION DU BAS - LISTE DES EVENTS -->
    <section class="bas">
        
        
        <!-- CONTAINER GLOBAL - liste des events -->
        <div class="container_listEvent  menu_event">

            <!-- btn Prochainement - btn historique -->
            <a href="" id="reinitialiser_resultat">Prochainement</a>
            <a href="" id="prochain_event">Historique</a>
            
            <!-- FILTRE -->
            <div class="filtreCategory">
                <button type="submit" class="lb_filtre">Filtrer</button>
                <div class="lb_selectFiltre">
                  <select name="lb_categoryFiltre" id="lb_categoryFiltre">
                    <option value="1">Toutes les catégories</option>
                    <option value="1">Divertissement</option>
                    <option value="1">Atelier</option>
                  </select>
                </div>
            </div>

            <!-- Div vide pour afficher le contenu -->
            <div id="resultat">   
                <!-- MODULE 1 -->
                <!-- MODULE pour la boucle -->
                <div class="module_listEvent">
    
                    <!-- EMMET -->
                    <!-- .img_listEvent>img^.txt_container_listEvent>.num_listEvent+.txt_listEvent^.tarif_etat_listEvent>.tarif_listEvent+.etat_listEvent -->
                    
                    <!-- MODULE - partie gauche - image -->
                    <div class="img_listEvent"><img src="./img/event_bateau.jpg" alt=""></div>
    
                    <!-- MODULE - partie centrale - texte -->
                    <div class="center_txt_listEvent">
                        <div class="txt_container_listEvent">
                            <!-- numéro -->
                            <div class="num_listEvent">01</div>
                            <div class="txt_listEvent">
                                <div class="titre_listEvent">Calamar gourmand</div>
                                <!-- date / category -->
                                <div class="ss_titre_listEvent">
                                    <div class="category">Atelier</div>
                                    <div class="date">29-05-2024</div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- MODULE - partie droite - tarif & état -->
                    <div class="tarif_etat_listEvent">
                        <div class="tarif_listEvent">Tarif: 75€</div>
                        <div class="etat_listEvent">Complet</div>
                    </div>
                </div>
    
                <!-- MODULE 2 -->
                <!-- MODULE pour la boucle -->
                <div class="module_listEvent">
    
                    <!-- EMMET -->
                    <!-- .img_listEvent>img^.txt_container_listEvent>.num_listEvent+.txt_listEvent^.tarif_etat_listEvent>.tarif_listEvent+.etat_listEvent -->
                    
                    <!-- MODULE - partie gauche - image -->
                    <div class="img_listEvent"><img src="./img/event_tennis.jpg" alt=""></div>
    
                    <!-- MODULE - partie centrale - texte -->
                    <div class="center_txt_listEvent">
                        <div class="txt_container_listEvent">
                            <!-- numéro -->
                            <div class="num_listEvent">02</div>
                            <div class="txt_listEvent">
                                <div class="titre_listEvent">Tel un athlète</div>
                                <!-- date / category -->
                                <div class="ss_titre_listEvent">
                                    <div class="category">Divertissement</div>
                                    <div class="date">29-05-2024</div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- MODULE - partie droite - tarif & état -->
                    <div class="tarif_etat_listEvent">
                        <div class="tarif_listEvent">Tarif: 75€</div>
                        <div class="etat_listEvent">Réservé</div>
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
                    url: "traitement/traitement_ajax.php", // le fichier cible, celui qui fera le traitement (projet : mettre le chemin que l'on aurait mis dans la balise <a>)
                    type: "GET", // la méthode utilisée (projet : ne rien mettre, par défaut on sera sur la method GET)
                    // les paramètres à fournir ex : ...id=4&nom=anonyme...(projet : on ne met rien) 
                    dataType: 'json', // le format des données attendues en tableau JSON pour être interprété et éxécuté par AJAX (projet : 'json') 
                    success: function(response) {
                        // la fonction qui doit s'exécuter lors de la réussite de la communication ajax 
                        console.log(response);
                        $('#resultat').html(response.contenu);
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
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