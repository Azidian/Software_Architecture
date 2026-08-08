<?php 

    //Constantes

    $variables;
    // const 
    const CONSTANTE = "Soy una constante 1";
    const CONSTANTE = "Soy una constante 2";
    const NUMEROS = 100;

    const COLORES = array("rojo", "verde", "azul"); // Constante de tipo Array

    echo CONSTANTE;
    echo NUMEROS;
    echo COLORES[0];
    
    // define 
    define("CONSTANTE2", "Hola Mundo");
    echo CONSTANTE2;

    define ("COLORES2", array("rojo", "verde", "azul")); // Constante de tipo Array
    echo COLORES2[0];
      
    // Constantes predefinidas

?>