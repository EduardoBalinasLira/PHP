<?php

    require_once ("Operaciones.php");
    require_once ("OperacionesBasicas.php");


    class Calcular implements Operacion,Operaciones_basicas{

        public function raizCuadrada(float $numero):float{
            $total = sqrt($numero);
            return $total;
        }

        public function potencia(int $numero, int $potencia):int{
            $total = pow($numero, $potencia);
            return $total;
        }

        public function op_basica(float $num1, float $num2, string $operacion){

            switch ($operacion) {
                case '+':
                    $result = $num1 + $num2;
                    break;

                case '-':
                    $result = $num1 - $num2;
                    break;
                
                case '*':
                    $result = $num1 * $num2;
                    break;
                
                case '/':
                    $result = $num1 / $num2;
                    break;
                
                default:
                    $result = "Operacion no valida";
                    break;
            }
            return $result;

        }

    }

?>