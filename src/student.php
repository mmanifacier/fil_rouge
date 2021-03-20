<?php

/**
 * Permet de récupérer tous les studentc
 */
function getStudentsCount()
{
    return execRequest('SELECT COUNT(id_e) AS count FROM eleve WHERE status=1');
}

function getStudentOfTheWeek()
{
    // RENVOI TOUS LES ETUDIANT DANS UN TABLEAU
    return execRequest('SELECT id_e, prenom_e FROM eleve WHERE tour=1 AND status=1');
}

/**
 * Mettre à jour le student of the week.
 * 
 * Je récupère en paramètre le student of the week courant/actuel.
 */
function updateStudentOfTheWeek($currentStudent)
{    
    $currentId = intval($currentStudent['id_e']);

    $studentCount = getStudentsCount()['count'];

    // Mettre à jour l'utilisateur de la semaine
    execRequest('UPDATE eleve SET tour=0 WHERE id_e='.$currentId);
    

    $nextStudent = $currentId+1;

    if(intval($nextStudent) > intval($studentCount)) {
        $nextStudent = 1;
    }

    execRequest('UPDATE eleve SET tour=1 WHERE id_e='.$nextStudent);

    return getStudentOfTheWeek();
}