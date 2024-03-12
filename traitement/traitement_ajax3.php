<?php
   
    // $listEvent = Event::findAllEvent();
    $currentDate = date('Y-m-d H:i:s'); // Date actuelle au format SQL (YYYY-MM-DD HH:MM:SS)

    $tab = [];
$tab['contenu'] = '';

// Obtenir le chemin absolu vers le dossier img
$img_path = "http://localhost/event-css/img/";

$tab['contenu'] .= 
    '<!-- TABLEAU - LISTE DES EVENTS -->
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
                        <img src="./img/event_agrume.jpg" alt="">
                    </div>
                </td>
                <td class="table_titre">mon beau citronnier</td>
                <td class="table_category table_category_none">atelier</td>
                <td class="table_date">24.05.24</td>
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

        </tbody>
    </table>';

$tab['contenu'] .= '</table>';
echo json_encode($tab);

?>