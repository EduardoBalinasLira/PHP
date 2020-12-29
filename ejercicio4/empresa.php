<?php

    require_once ("ClassEmpleado.php");
    require_once ("ClassCliente.php");

    $objEmpleado = new Empleado(796,"Eduardo Baliñas", 24);
    $objEmpleado->setPuesto("Administrador");

    echo $objEmpleado->getDatosPersonales()."<br>";
    echo "Puesto: ". $objEmpleado->getPuesto();

    $objCliente = new Cliente(796,"Eduardo Baliñas", 24);
    $objCliente->setCredito(1000);

    echo $objCliente->getDatosPersonales()."<br>";
    echo "Credito: ". $objCliente->getCredito();

?>