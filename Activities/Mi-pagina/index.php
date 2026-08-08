<?php
    //Argumentos de funciones
        function suma($num1,$num2){
            $suma=$num1+$num2;
            echo "La suma de $num1 y $num2 es: $suma <br>";
        }

    //suma(5,10);
    
   //argumentos de tipo array 
        function suma_array($entrada){
            $num1=$entrada[0];
            $num2=$entrada[1];
            
            echo "El resultado es ".($num1+$num2)."<br>";
        }

        suma_array(array(2,45));

    //función por referencia
        function resta(&$num){
            $num=20-$num;
        }   

        $result=13;
        resta($result);

        echo $result;
    
    //función recursiva 
    
?>