<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>ADMIN - Liste des événements</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    
    <main id="siteListEvent" class="siteList">
        
        
        <!-- ------------------------------- HAUT -------------------------------- -->
        <!-- SECTION DU HAUT - IMAGE FIXE -->
        <section class="haut">
            <div id="ImgHauteListEvent" class="ImgHaute" style="background-image: url(./img/event_horizontal_bateau.jpg);">
            </div>
            <div class="titreListEvent">
                <h1>liste des événements</h1>
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
        <div id="container_adminListEvent" class="container_list">

            <!-- ZONE FILTRE -->
            <div class="container_btnFiltre_listEvent">

                <!-- BOUTON (btn Prochainement - btn historique) -->
                <div id="btn_adminListEvent" class="btnProchainHistorique">
                    <a href="" id="reinitialiser_resultat" class="prochainement_listEvent">Prochainement</a>
                    <a href="" id="prochain_event" class="historique_listEvent">Historique</a>
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

                <!-- TABLEAU - LISTE DES EVENTS -->
                <table class="tableau_adminListEvent">
                    <thead class="thead_adminListEvent">
                        <tr>
                            <th class="table_img_none"></th>
                            <th>Titre</th>
                            <th class="table_category_none">Catégorie</th>
                            <th class="table_date">Date</th>
                            <th colspan="4">Action</th>
                        </tr>
                    </thead>
                    <tbody class="tbody_adminListEvent">
    
                        <!-- MODULE 1 -->
                        <tr class="table_module">
                            <td class="table_img_none">
                                <div class="table_img">
                                    <img src="./img/event_flamant.jpg" alt="">
                                </div>
                            </td>
                            <td class="table_titre">Pink flamingo</td>
                            <td class="table_category table_category_none">Découverte</td>
                            <td class="table_date">29.05.24</td>
                            <td><a href="">consulter</a></td>
                            <td><a href="">annuler</a></td>
                            <td><a href="">supprimer</a></td>
                            <!-- bouton -->
                            <td>
                                <p class="table_btn">
                                    <a href="" id="table_btnTxt">modifier</a>
                                </p>
                            </td>
                        </tr>
    
                        <!-- MODULE 2 -->
                        <tr>
                            <td class="table_img_none">
                                <div class="table_img">
                                    <img src="./img/event_tennis.jpg" alt="">
                                </div>
                            </td>
                            <td class="table_titre">Comme un pro</td>
                            <td class="table_category table_category_none">Divertissement</td>
                            <td class="table_date">24.05.24</td>
                            <td><a href="">consulter</a></td>
                            <td><a href="">annuler</a></td>
                            <td><a href="">supprimer</a></td>
                            <td><p class="table_btn"><a href="" id="table_btnTxt">modifier</a></p></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- --------- BTN - AJOUTER UN EVENEMENT ---------- -->
        <div class="container_btnAjouter">
            
            <a href="" class="btn_ajouter"><p><i class="fa-light fa-plus"></i>Ajouter un événement</p></a>
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
                    url: "traitement/traitement_ajax3.php", // le fichier cible, celui qui fera le traitement (projet : mettre le chemin que l'on aurait mis dans la balise <a>)
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