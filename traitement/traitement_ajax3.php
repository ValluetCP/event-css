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
                <th></th>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Date</th>
                <th colspan="4">Action</th>
            </tr>
        </thead>
        <tbody class="tbody_adminListEvent">

            <!-- MODULE 1 -->
            <tr class="table_module">
                <td>
                    <div class="table_img">
                        <img src="./img/event_agrume.jpg" alt="">
                    </div>
                </td>
                <td class="table_titre">mon beau citronnier</td>
                <td class="table_category">Atelier</td>
                <td>24.05.24</td>
                <td>consulter</td>
                <td>annuler</td>
                <td>supprimer</td>
                <td><p class="table_btn">modifier</p></td>
            </tr>

        </tbody>
    </table>';

$tab['contenu'] .= '</table>';
echo json_encode($tab);

?>