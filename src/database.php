<?php

function connect($db_host, $db_name, $db_user, $db_pass) { 
    try {
        return new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_user, $db_pass);
    } catch (Exception $e) {
        throw new Exception($e);
    }
}

/**
 * Permet de faire un requête à la BDD.
 * 
 * La connexion est automatiquement effectuée.
 * 
 * @param string $query La requête à effectuée.
 */
function execRequest($query) {
    global $db_host;
    global $db_name;
    global $db_user;
    global $db_pass;

    $db = connect($db_host,$db_name, $db_user, $db_pass);

    $datas = $db->query($query);

    // 0 => jean
    // 1 => patrick
    // 2 => emilien

    // A retourner / A renvoyer
    $toReturn = [];

    foreach ($datas as $data) {
            $toReturn[] = $data;
    }

    if(count($toReturn) == 1) {
        return $toReturn[0];
    }

    return $toReturn;
}
