<?php
    //Operadores Lógicos
        
            //Operador AND && (Ambos valores son verdaderos)
            $bool=(15==15) && (15==15); 
            var_dump($bool); //Imprime: bool(true)

            //Operador OR || (Al menos uno de los valores es verdadero)
            $bool=(15==15) || (15==14);
            var_dump($bool); //Imprime: bool(true)

            //Operador XOR (Solo uno de los valores es verdadero)
            $bool=(15==15) xor (15==14);
            var_dump($bool); //Imprime: bool(false)

            //Operador NOT ! (Niega el valor)
            $bool=!(15==15);
            var_dump($bool); //Imprime: bool(false)
?>
