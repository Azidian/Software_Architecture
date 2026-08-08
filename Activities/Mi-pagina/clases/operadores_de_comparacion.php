<?php
// Operadores de comparación
    //Operador ==
    $Numero1 =13;
    $Numero2 = "13";

    echo "Operador igual == <br> ";
    var_dump($Numero1==$Numero2); //true

    //Operador ===
    echo "<br> Operador identico === <br> ";
    var_dump($Numero1===$Numero2); //false porque no son del mismo tipo de dato

    //Operador !=
    echo "<br> Operador diferente!= 0 <> <br> ";
    var_dump($Numero1!=$Numero2); //true

    //Operacor !==
    echo "<br> Operador no identico !== <br> ";
    var_dump($Numero1!==$Numero2); //true porque no son del mismo tipo de dato

    //Operador mayor que >
    $a=14;
    $b=13;

    echo "<br> Operador mayor que > <br> ";
    var_dump($a>$b); //true

    //Operador menor que >
    echo "<br> Operador menor que < <br> ";
    var_dump($a<$b); //false

    //Operador mayor o igual que >=
    echo "<br> Operador mayor o igual que >= <br> ";
    var_dump($a>=$b); //true
    
    //Operador menor o igual que <=
    echo "<br> Operador menor o igual que <= <br> ";
    var_dump($a<=$b); //true

    //Operador de nave espacial <=>
    echo "<br> Operador de nave espacial <=> <br> ";
    var_dump($a<=>$b); //1 porque a es mayor que b
    var_dump($b<=>$a); //-1 porque b es menor que a
    var_dump($b<=>$b); //0 porque b es igual que b

    //Operador de elvis
    $resultado =0;
    echo "<br> Operador de elvis ?: <br> ";
    var_dump($resultado ?: "No hay datos");
    var_dump(isset($resultado) ?: "No hay datos"); //Imprime: El resultado es 0

    //Operador ternario
    $edad = 18;
    echo "<br> Operador ternario <br> ";
    //var_dump($edad >= 18 ? "Eres mayor de edad" : "No eres mayor de edad");
    var_dump(isset($edad) && $edad >= 18 ? "Eres mayor de edad" : "No eres mayor de edad");

    //Operador de fusión de null
    $nombre = null;
    echo "<br> Operador de fusión de null ?? <br> ";    
    var_dump(isset($nombre) ?? "No hay nombre");

?>
