<?php


//funciones nativas mas importantes en php

// 1. array_column() -> extrae una columna de un array multidimensional 
$personas = [
  ["nombre"=>"Luis","edad"=>25],
  ["nombre"=>"Ana","edad"=>30]
];
$edades = array_column($personas,"edad"); // [25,30]

// 2. array_key_exists() -> verifica si existe una clave dentro de nuestro programa,  cuando quieras asegurarte de que una clave está definida en el array, sin importar si su valor es null.
if(array_key_exists("nombre",$personas[0])){ echo "Sí existe"; }


