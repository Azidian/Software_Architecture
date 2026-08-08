<?php

    //Operadores de asignación
    $a=15;
    $b=5;

    //Operadores combinados

    $a+=$b;
    echo "El resultado de a+=b es: $a <br>";

    //Operadores de incremento y decremento
        //Incremento

            // --- POST-INCREMENTO ($a++) ---
            $a = 5;

            echo $a++; // Imprime: 5  (Primero entrega el 5 y LUEGO le suma 1 por debajo)
            echo $a;   // Imprime: 6  (En esta nueva línea ya se refleja el aumento)


            // --- PRE-INCREMENTO (++$b) ---
            $b = 5;

            echo ++$b; // Imprime: 6  (Primero le suma 1 y LUEGO imprime el resultado)
            echo $b;   // Imprime: 6
        //Decremento

            // --- POST-DECREMENTO ($a--) ---
            $a = 5;

            echo $a--; // Imprime: 5  (Primero entrega el 5 y LUEGO le resta 1 por debajo)
            echo $a;   // Imprime: 4  (En esta nueva línea ya se refleja la disminución)

            // --- PRE-DECREMENTO (--$b) ---
            $b = 5;

            echo --$b; // Imprime: 4 (Primero le resta 1 y LUEGO imprime el resultado)
            echo $b;   // Imprime: 4 
?>