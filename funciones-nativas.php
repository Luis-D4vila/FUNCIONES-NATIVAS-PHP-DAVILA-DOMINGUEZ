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

// 5. array_filter() -> filtra con condición
// Recorre un array y devuelve solo los elementos que cumplen una condición.
// por ejemplo para mostrar solo estudiantes aprobados o solo los que tienen edad mayor a 18
$mayores = array_filter($edades, fn($e)=>$e>=30); // [30]

// 6. array_reduce() -> reduce a un solo valor
// Recorre un array y lo reduce a un único valor aplicando una función acumuladora.
//se utiliza Cuando necesitas calcular algo a partir de todos los elementos ejemplo, suma, promedio
$suma = array_reduce($edades, fn($c,$e)=>$c+$e,0); // 55

//7. array_diff() -> diferencia entre array
// Compara dos o más arrays y devuelve los elementos que están en el primero pero no en los demás
//ejemplo - Estudiantes inscritos vs. estudiantes que entregaron tarea
$a = [1,2,3]; 
$b = [2,3];
$dif = array_diff($a,$b); // [1]

// 8. array_intersect() -> como su nombre casi lo dice, interseccion
// Compara dos o más arrays y devuelve los elementos que están presentes en todos ellos
//productos en inventario y en promoción,
// es similar al array_diff
$comunes = array_intersect($a,$b); // [2,3]

// 9. array_chunk() -> divide en bloques
// - Divide un array en sub-arrays de tamaño fijo
//ejemplo dividir estudiantes en equipos u organizar elementos en filas/columnas
$grupos = array_chunk($estudiantes,2);// [[1,2],[3]]

// 10. array_combine() -> combina claves y valores
//  Toma dos arrays: uno de nombres y otro de notas, y los combina en un solo array asociativo.
//importante  Ambos arrays deben tener la misma cantidad de elementos, si no, PHP lanza un error.
$keys = ["a","b"]; 
$vals = [1,2];
$comb = array_combine($keys,$vals); // ["a"=>1,"b"=>2]


