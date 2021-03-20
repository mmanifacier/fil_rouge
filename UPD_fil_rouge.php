<?php


/* ------ REQUETE UPDATE HEBDOMADAIRE DE LA BDD ------ */

// On récupère l'id du tour en cours
$ID = $bdd->query(" SELECT id FROM eleve WHERE tour = 1 ");

// On passe le tour au suivant
if ($ID < 12) {
    $bdd->query(" UPDATE eleve SET tour = 1 WHERE id= ($ID+1) ");
}
else {
    $bdd->query(" UPDATE eleve SET tour = 1 WHERE id = 1 ");
}

// On efface le tour en cours
$bdd->query(" UPDATE eleve SET tour = 1 WHERE id = $ID; ");