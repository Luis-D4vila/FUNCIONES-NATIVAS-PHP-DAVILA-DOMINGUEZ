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
//  Toma dos arrays: uno de nombres y otro de notas, y los combina en un solo array asociativo
//importante  Ambos arrays deben tener la misma cantidad de elementos, si no, PHP lanza un error
$keys = ["a","b"]; 
$vals = [1,2];
$comb = array_combine($keys,$vals); // ["a"=>1,"b"=>2]

// 11. str_split() -> convierte string en array
//Convierte una cadena en un array de caracteres o en fragmentos de tamaño definido.
// se utliza Cuando necesitas trabajar con cada letra individual de un texto, o dividirlo en bloques más pequeños
$chars = str_split("Luis"); // ["L","u","i","s"]

// 12. str_repeat() -> repite cadena
//Repite una cadena el número de veces que indiques
//se coloca almomento de pintar en pantalla
echo str_repeat("PHP ",3); // PHP PHP PHP

// 13. str_word_count() -> cuenta palabras
// Cuenta cuántas palabras hay en una cadena de texto.
// por ejemplo funcionada para validar que un campo tenga cierto número de palabras
echo str_word_count($texto); // 3

// 14. strrev() -> invierte cadena
// Invierte el orden de los caracteres en una cadena
// Solo recibe la cadena que quieres invertir
// Cuando necesitas mostrar un texto al revés, validar palíndromos, o manipular códigos que requieren inversión (alrevez)
echo strrev("Luis"); // "siuL"

// 15. htmlspecialchars() -> convierte caracteres especiales (seguridad en HTML)
//funcionada para montrar tal y como fue escrito sin que se le mofique nada
// es importante porque Evita que el navegador interprete texto como código HTML o JavaScript
echo htmlspecialchars("<b>Hola</b>"); // &lt;b&gt;Hola&lt;/b&gt;

// 16. htmlentities() -> convierte todos los caracteres a entidades HTML
// lo usarías para mostrar nombres, comentarios o descripciones con acentos y símbolos de forma segura en la web
$texto = "Información & <b>importante</b>";
echo htmlentities($texto); // Resultado: Informaci&oacute;n &amp; &lt;b&gt;importante&lt;/b&gt;

// 17. trim() -> elimina espacios al inicio y al final
// Elimina los espacios en blanco y otros caracteres como saltos de línea, al inicio y al final de una cadena
$nombre = "  Luis  ";
echo trim($nombre); // "Luis"


// 18. explode() -> divide cadena en partes
// - Divide una cadena en un array usando un delimitador ejemplo: espacio, coma, guion
// Cuando necesitas separar datos que vienen juntos en un string
// - nombre completo en nombre y apellido
$partes = explode(" ","Luis Pérez"); // ["Luis","Pérez"]

// 19. implode() → une elementos de un array en una cadena
$cadena = implode(",",$array);

// 20. substr() → extrae parte de una cadena
echo substr("Luis",0,2); // "Lu"

// 21. strtolower() → convierte a minúsculas
echo strtolower("LUIS"); // "luis"

// 22. strtoupper() → convierte a mayúsculas
echo strtoupper("Luis"); // "LUIS"

// 23. ucfirst() → primera letra en mayúscula
echo ucfirst("luis"); // "Luis"

// 25. ucwords() → primera letra de cada palabra en mayúscula
echo ucwords("luis pérez"); // "Luis Pérez"

// 26. number_format() → formatea números con decimales y separadores
echo number_format(1234.567,2); // "1,234.57"

// 27. str_replace() → reemplaza caracteres o palabras
echo str_replace("mundo","SIGE","Hola mundo"); // "Hola SIGE"

// 28. strpos() → busca posición de un texto dentro de una cadena
echo strpos("Hola mundo","mundo"); // 5
