<?php
    require_once "../../models/eventModel.php";
    // $listEvent = Event::findAllEvent();
    $currentDate = date('Y-m-d H:i:s'); // Date actuelle au format SQL (YYYY-MM-DD HH:MM:SS)

    $tab = [];
    $tab['contenu'] = '';
    $tab['contenu'] .= 
    
        '<!-- MODULE 2 -->
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
        </div>';
    
    
    
    '<table style="width: 100%; border-collapse: collapse; margin-top: 35px; border: 1px solid black;" border="1">';
    foreach ($listEvent as $event) {
        // Correction ici : comparer avec $nom au lieu de $tabs
        if ($event['date_event'] <= $currentDate) {
           
            $tab['contenu'] .= '<tr>';
            $tab['contenu'] .= '<td style="padding: 10px; border: 1px solid black;">' . $event['id_evenement'] . '</td>';
            $tab['contenu'] .= '<td style="padding: 10px; border: 1px solid black;">' . $event['titre'] . '</td>';
            $tab['contenu'] .= '<td style="padding: 10px; border: 1px solid black;">' . $event['prix'] . '</td>';
            $tab['contenu'] .= '</tr>';
        }
        
    }
    $tab['contenu'] .= '</table>';
    echo json_encode($tab);
?>