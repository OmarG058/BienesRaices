<?php

function conectarDb (): mysqli {
    $db =  mysqli_connect('localhost','root','117058','bienesraices_crud'); 

    if(!$db) {
        echo 'Error al conectar';
        exit;
    }

    return $db;

}