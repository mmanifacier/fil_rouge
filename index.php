<?php

session_start();

function debug($toDebug) {
    echo '<pre>';
    var_dump($toDebug);
    echo '</pre>';
}

define('ROOT', __DIR__.'/');

require ROOT.'src/config.php';
require ROOT.'src/database.php';
require ROOT.'src/student.php';
require ROOT.'src/login.php';

// Si le username && le mot de passe sont envoyé en POST
if(!empty($_POST['username']) && !empty($_POST['password'])) {
    login();
}

$studentOfTheWeek = getStudentOfTheWeek();

if(!empty($_POST['updateStudentOfTheWeek'])) {
    $studentOfTheWeek = updateStudentOfTheWeek($studentOfTheWeek);
}

if(!empty($_GET['page'])) {
    $path = ROOT.'views/'.$_GET['page'].'.php';
    if(file_exists($path)) {
        require $path;
    }
} else {
    require ROOT.'views/student.php';
}
