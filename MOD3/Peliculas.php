<?php

//Declaral el nombre de la pagina

$pagina = "Peliculas/Movies";

//Concatenar PHP
echo "Estas en la pagina de " .$pagina;
//Template string en PHP
echo "Soy un nuevo texto {$pagina}";

$text = "Hola";
$text = 'Hola';
$text = 'Hola'; //Cuidado con las comillas invertida

$numero = 10;
$numero = 11.2;

$boolean = true;
$boolean = false;

/*
* Objeto en JS

objeto = {
    nombre: "Marlin",
    edad: 27
}

*/

#let objeto = {};
#objeto.nombre = "Marlin";
#objeto.edad = "27";

$objeto = new stdClass();
$objeto ->nombre = "Marlin";
$objeto ->edad = "27";

echo "Hola, mi nombre es {$objeto->nombre} tengo {$objeto->edad} años. ";
