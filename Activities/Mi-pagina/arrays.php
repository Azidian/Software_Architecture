<?php
    
    $color="Morado";
    //array indexado

        //Declaración de un array indexado
        $arrayIndexado = array(1,2,"hola",$color);

        //Obtener el valor de un array
        //echo $arrayIndexado[3]."<br>";

        //Recorrer un arreglo indezado
        for($i=0;$i<count($arrayIndexado);$i++){
            //echo "El valor del array en la posición $i es: $arrayIndexado[$i] <br>";
        }
    //array asociativo

        //Declaración de un array asociativo
        $arrayAsociativo = array('nombre'=>'Daynerys','apellido'=>'Targaryen','edad'=>28);

        //Obtener el valor de un array asociativo
        //echo $arrayAsociativo['nombre']."<br>";

        //Recorrer un arreglo asociativo
        foreach($arrayAsociativo as $clave => $valor){
            //echo "Clave: $clave, Valor: $valor <br>";
        }
    //array multidimensional
    
        //Declaración de un array multidimensional
        $personas = array(
            array("Kiera","Kass",32), //Indice 0
            array("Daynerys","Targaryen",28), //Indice 1
            array("Jon","Snow",30), //Indice 2
            array("Rhaenyra","Targaryen",25), //Indice 3
            array("Leigh","Bardugo",29),
            array("Agatha","Crhistie",30),
            array("Brandon","Sanderson",35)
            );

        //Obtener el valor de un array multidimensional
        $fila=3;
        $columna=0;

        //echo $personas[$fila][$columna]."<br>";
        
        //Recorrer un arreglo multidimensional
        for($fila=0;$fila<count($personas);$fila++){
            for($columna=0;$columna<count($personas[$fila]);$columna++){
                //echo "Valor de la fila $fila y columna $columna es: ".$personas[$fila][$columna]."<br>";
            }
        }
    //array multidimensional asociativo

        //Declaración de un array multidimensional asociativo
        $personasAsociativo = array(
            array('nombre'=>'Kiera','apellido'=>'Kass','edad'=>32), //Indice 0
            array('nombre'=>'Daynerys','apellido'=>'Targaryen','edad'=>28), //Indice 1
            array('nombre'=>'Jon','apellido'=>'Snow','edad'=>30), //Indice 2        
        );

        //Obtener el valor de un array multidimensional asociativo
        $fila=1;
        $columna='apellido';

        //echo $personasAsociativo[$fila][$columna]."<br>";

        //Recorrer un arreglo multidimensional asociativo
        for($fila=0;$fila<count($personasAsociativo);$fila++){  
            foreach($personasAsociativo[$fila] as $clave => $valor){
                //echo "Clave: $clave, Valor: $valor <br>";
            }
        }
    
    //array multidimensional mixto
    
        //Declaración de un array multidimensional mixto
        $barcos= array(
            'A'=>array('Nada','Nada','Barco'),
            'B'=>array('Nada','Barco','Nada'),
            'C'=>array('Nada','Nada','Nada'),
            'D'=>array('Nada','Nada','Barco')
            );

        //Obtener el valor de un array multidimensional mixto
        echo $barcos['A'][2]."<br>";

        //Recorrer un arreglo multidimensional mixto
        foreach($barcos as $clave => $valor){
            echo "<br>";
            for($indice=0; $indice<count($valor); $indice++){
                echo "Coordenadas:".$clave." - ".$indice. " Valor: ".$valor[$indice]."<br>";
            }
        }

?>