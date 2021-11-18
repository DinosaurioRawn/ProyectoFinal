<?php

if (filter_input_array(INPUT_POST)){
    $_usuario = trim(filter_input(INPUT_POST, 'usuario'));
    $_password = trim(filter_input(INPUT_POST, 'password'));
    
    include_once '../model/listado.php';
    $loginok = listado::login($_usuario, $_password);
    
    if ($loginok) {
        header("location: ../index.php?menu=bienvenido");
    } else {
        echo 'Usuario No Existe o password Incorrecto';
        
    }
}
