<?php

// Imprimir hola mundo en pantalla
    echo "<p> Hola mundo </p>";

    // Declaración e inicialización de variables locales
    $integer=1;
    $float=1.5;
    $isTrue=true;
    $arrayColores = array("Azul", "morado", "negro", "rojo");
    $string ="hola";

    // Imprimir variables en pantalla
    echo $integer;
    echo $float;
        if($isTrue){
            print_r($arrayColores);
            echo $string;
            echo "verdadero";
        }

    function variablesGlobales(){
        $local ="Soy una variable local";
        echo$GLOBALS["global"];
        echo $local;
    }

    $global = "Soy una variable global";
    variablesGlobales(); //llamada a la función

?>