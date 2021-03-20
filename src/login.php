<?php

function getUser()
{

}

function login()
{
    $user = execRequest('SELECT * FROM users WHERE username = "'.$_POST['username'].'" AND password = "'.$_POST['password'].'"');
    
    if($user) {
        $_SESSION['logged'] = true;
    }
}