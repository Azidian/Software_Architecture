<?php
//Conversión de tipos de datos
    //CONVERSIÓN A ENTEROS
    
        // Por contexto
        $variable = "20 holamundo ";
        $suma=20+$variable;

        //echo $suma;
        //echo gettype($suma);

        // Forzado de tipo
        $int=(int)$variable;
        //echo $int;
        //echo gettype($int);

        // Por función
        $funcion=intval($variable);

    //CONVERSIÓN A FLOTANTES O DOUBLES
        // Contexto
        $sumaDecimal = 10.2 + $variable; // Conversión implícita a float por contexto

        // Forzado de tipo
        $numReal = (float)$variable;

        // Conversión por función
        $funcionFloat =  floatval($variable);

    //CONVERSIÓN A BOOLEANOS
        // Forzado de tipo
        $boolean = (boolean)$variable;

        // Conversión por función
        $funcionBooleana= boolval($variable);

    //CONVERSIÓN A TIPO ARRAY
        
        // Función Explode
        $numeros = "1,2,3,4,5";
        $ArrayNumeros=explode(",",$numeros,5);
        //echo $ArrayNumeros[0];

        // Tipo Forzado
        $array=(array)$variable;
        
        // Conversión de Array a String
        $arrayColores= array("amarillo", "azul", "rojo", "verde");
        $string=implode(" ",$arrayColores);
        echo $string;

    //Ejemplos:
        $texto = "25";

        // Opción 1: Forzado con paréntesis (Casting)
        $numero1 = (int)$texto;

        // Opción 2: Conversión por función
        $numero2 = intval($texto);

?>
