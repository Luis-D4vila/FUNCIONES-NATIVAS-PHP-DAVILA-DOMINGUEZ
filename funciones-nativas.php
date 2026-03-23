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


// 3. array_keys() -> devuelve todas las claves
// Devuelve un array con todas las claves (keys) de otro array.
$claves = array_keys($personas[0]); // ["nombre","edad"]

// 4. array_values() -> devuelve todos los valores
//Devuelve todos los valores de un array en un nuevo array, ignorando las claves.
$valores = array_values($personas[0]); // ["Luis",25]

