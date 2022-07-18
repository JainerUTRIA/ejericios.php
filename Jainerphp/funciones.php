<?php

    function saludarNombre(){
        echo "Hola Jainer";
    }

    function saludar(){
        echo "Hola ...";
    }

    function despedir($nombre, $apellido){
        echo "Adios " . $nombre. " ". $apellido;
    }


    saludar();
    saludarNombre();
    echo "<br>";
    despedir("Jainer","Utria");



?>