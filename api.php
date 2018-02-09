<?php

date_default_timezone_set('EST');

$action = (isset($_GET['a'])) ? $_GET['a'] : '';

include 'db.php';
include './classes/user.php'; //podemos incluir cursos

if($action == 'isUsernameAvailable') {
    $username = $_GET['u'] ??';'
    
    $out = ['available' => true];
    $user = user::loadFromUsername($username);
    
    if($user != null) {
        $out['available'] = false
    }
    
    echo json_encode($out); //archivo de php lo convierte a jason
}

>?