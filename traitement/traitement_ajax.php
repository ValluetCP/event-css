<?php
   
    // $listEvent = Event::findAllEvent();
    $currentDate = date('Y-m-d H:i:s'); // Date actuelle au format SQL (YYYY-MM-DD HH:MM:SS)

$tab = [];
$tab['contenu'] = '';

// Obtenir le chemin absolu vers le dossier img
$img_path = "http://localhost/event-css/img/";

$tab['contenu'] .= 
    '<!-- MODULE 2 -->
    <!-- MODULE pour la boucle -->
    <div class="module_listEvent">
        
        <!-- MODULE - partie gauche - image -->
        <div class="img_listEvent"><img src="' . $img_path . 'event_flamant.jpg" alt=""></div>

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
    </div>';

$tab['contenu'] .= '</table>';
echo json_encode($tab);

?>