<?php
    $contador=1;
    
    //while 
        while($contador<=10){
            echo "Valor del contador while: $contador <br>";
            $contador++;
        }
    
    //do while
        do {
            echo "Valor del contador do-while: $contador <br>";
            $contador++;
        } while($contador<=10);
    

    //for
        for($i=1;$i<=10;$i++){
            echo "Variable de control del for: $i <br>";
        }

    //foreach
        $array=array(1,2,3,4,5,6,7,8,9,10);

        foreach($array as &$valor){
            $valor = $valor * 2;
        }

        foreach($array as $clave => $valor2){
            echo "Clave: $clave, Valor: $valor2 <br>";
        } 
?>