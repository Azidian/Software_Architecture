<?php
//funciones

    function name(){
        echo "Hola, soy Wendy y soy increible <br>";
    }

    //condición if
    $edad = 25;

    if($edad>=18){
        function party(){
            echo "Ya puedes entrar a la fiesta <br>";
        }
    }

    function foo(){
        function bar(){
            echo "Holaaa, ya existoo";
        }
    }
    
    foo();
    bar();

?>