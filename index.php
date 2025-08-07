<?php
// Nombrar variables. Al posicionarse sobre las variable te dice automaticamente el tipo de dato que es. 
// TIPADO DINAMICO: no es necesario declarar el tipo de la variable, php infiere cual es el tipo y se puede cambiar.
// TIPADO DEBIL: como javascript. Intenta convertir los tipos de variables segun sea necesario (los strings como numeros por ejemplo).
// TIPADO GRADUAL: puedes indicar explicitamente los tipos de variables, es opcional en clases o funciones (y otros contextos especificos).
$name = "Miguel";
$isDev = true;
$age = 39;
$newAge = $age + '1'; // Asume ambos datos como números dado el signo + de suma. El simbolo + no sirve para concatenar texto.
$agee = '39';
$newAgee = $agee . '1'; // El punto es el operador que permite concatenar strings.

// var_dump es una funcion de depuración para mostrar información estructurada sobre una variable o mas.
var_dump($name);
var_dump($isDev);
var_dump($age);


// gettype muestra el tipo de dato.
echo gettype($name);
echo gettype($isDev);
echo gettype($age);

// Tambien existen distintos métodos para verificr si un dato es de un tipo específico
echo is_string($newAge);
echo is_bool($isDev);
echo is_int($age);

?>

<h1>
    <?php echo "Mi primera app"; ?>
    <br>
    <?= "Curso de PHP"; ?>
    <br>
    <?= $name; ?>
    <br>
    <?= $newAge; ?>
    <br>
    <?= $newAgee; ?>
    <br>
    <?= "Hola " . $name; ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>