<?php

function conectarDb (): mysqli {
    $db =  mysqli_connect('localhost','root','Alkapone058','bienesraices_crud'); 

    if(!$db) {
        echo 'Error al conectar';
        exit;
    }

    return $db;

}