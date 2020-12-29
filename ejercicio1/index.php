<?php

    require_once ("claseOperaciones.php");

    $operacion1 = new Operacion(10,2);


    $totalSuma = $operacion1->getSuma();
    echo "Total suma: " .$totalSuma;
    echo "<br>";

    $totalResta = $operacion1->getResta();
    echo "Total Resta: " .$totalResta;
    echo "<br>";

    $totalMul = $operacion1->getMultiplicacion();
    echo "Total Multiplicacion: " .$totalMul;
    echo "<br>";

    $totalDivision = $operacion1->getDivision();
    echo "Total Division: " .$totalDivision;
    echo "<br>";

?>