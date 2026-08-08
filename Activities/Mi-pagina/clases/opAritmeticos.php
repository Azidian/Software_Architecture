<?php

    //Operadores aritméticos
        $a=2;
        $b=4;

            //Operador suma +
            $suma = $a + $b;
            echo "La suma de $a + $b es: $suma <br>";

            //Operador resta -
            $resta = $a - $b;
            echo "La resta de $a - $b es: $resta <br>";

            //Operador multiplicación *
            $multiplicacion = $a * $b;
            echo "La multiplicación de $a * $b es: $multiplicacion <br>";

            //Operador división /
            $division = $a / $b;
            echo "La división de $a / $b es: $division <br>";

            //Operador módulo %
            // Modulo= Dividendo -(Divisor*cociente)
            $residuo=$a-($b*3);
            echo "El residuo de $a - ($b * 3) es: $residuo <br>";

            $modulo = $a % $b;
            echo "El módulo de $a % $b es: $modulo <br>";

            //Operador exponenciación **
            $exponenciacion = $a ** $b;
            echo "La exponenciación de $a ** $b es: $exponenciacion <br>";

            //Operador de identidad y negación
            $identidad = +$resta;
            
            echo "$identidad <br>";

            $negacion = -$resta;
            echo "$negacion <br>";

?>