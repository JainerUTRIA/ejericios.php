<?php

    // arrays
    $array1[] = "posicion 1";
    $array1[] = "posicion 2";
    $array1[] = "posicion 3";

    var_dump($array1);



    $array2 = array(
        '0' => 'a',
        '1' => 'b',
        '2' => 'c',
    );


    var_dump($array2);


    //array asociativos
    echo "<br/>";
    echo "Array asociativos";

    $arrayAsociativo = array(
        'materia' => "Física",
        'nota' => 3.0,
        'nombre' => "Jainer",
        'apellido' => "Utria",
    );

    var_dump($arrayAsociativo);
    echo $arrayAsociativo["materia"];


    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";



    //array multimensional
    $notas = array(
        '0' => array('materia' => "Física", "nombre" => "Jaime", "nota" => 3.5),
        '1' => array('materia' => "Física", "nombre" => "Hernan", "nota" => 4.0),
        '2' => array('materia' => "Física", "nombre" => "Maria", "nota" => 3.0),
        '3' => array('materia' => "Física", "nombre" => "Camila", "nota" => 4.5),
    );

    var_dump($notas);

    echo "Nombre de la nota mas alta:" . $notas[3]["nombre"];

?>