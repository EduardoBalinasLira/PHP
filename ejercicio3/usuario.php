<?php

    require_once ("ClassUsuario.php");

    $objUsuario1 = new Usuario("Eduardo Baliñas","eduardo@info,com","Admin");
    echo $objUsuario1->getPerfil();
    $objUsuario1->setCambiarClave("123456789");
    echo $objUsuario1->getPerfil();


   // echo Usuario::$strEstado;


?>