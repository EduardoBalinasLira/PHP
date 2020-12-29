<?php 

    require_once ("Autoload.php");

    $objUsuario = new Usuario();

    //Insertar usuario

    // $insert = $objUsuario->insertUsuario("Eduardo","5538094388","correo@correo.com");
    // echo $insert;

    $users = $objUsuario->getUsuarios();
    print_r("<pre>");
    print_r($users);
    print_r("</pre>");

    $updateUser = $objUsuario->updateUser(1,"Paulina","555555555", "paulina@gmail.com");
    print_r("<pre>");
    print_r($updateUser);
    print_r("</pre>");

    $users = $objUsuario->getUser(2);
    print_r("<pre>");
    print_r($users);
    print_r("</pre>");

    $delete = $objUsuario->deleteUser(2);
    echo $delete;

    $users = $objUsuario->getUsuarios();
    print_r("<pre>");
    print_r($users);
    print_r("</pre>");
?>