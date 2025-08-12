<?php
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------
// Nombrar variables. Al posicionarse sobre las variable te dice automaticamente el tipo de dato que es. 
// TIPADO DINAMICO: no es necesario declarar el tipo de la variable, php infiere cual es el tipo y se puede cambiar.
// TIPADO DEBIL: como javascript. Intenta convertir los tipos de variables segun sea necesario (los strings como numeros por ejemplo).
// TIPADO GRADUAL: puedes indicar explicitamente los tipos de variables, es opcional en clases o funciones (y otros contextos especificos).
$name = "Adolfo";
$isDev = true;
$age = 39;
$newAge = $age + '1'; // Asume ambos datos como números dado el signo + de suma. El simbolo + no sirve para concatenar texto.
$agee = '39';
$newAgee = $agee . '1'; // El punto es el operador que permite concatenar strings.
$output = "Hola, soy $name y tengo $age años"; // Puedes usar variables dentro de un string con comillas dobles, no con comillas simples.
$newOutput = 'Hola, soy $name y tengo $age años'; // Puedes usar variables dentro de un string con comillas simples, pero no evaluará las variables que hay dentro.
$output .= ", con una edad de..."; // El operador .= permite concatenar y reasignar a la misma variable.
$output2 = "Hola, soy \$name y tengo \$age años"; // Puedes usar backslash para escapar el símbolo de dólar y que no se interprete como una variable.

// var_dump es una funcion de depuración para mostrar información estructurada sobre una variable o mas.
var_dump($name);
var_dump($isDev);
var_dump($age);


// gettype muestra el tipo de dato.
echo gettype($name);
echo gettype($isDev);
echo gettype($age);

// Tambien existen distintos métodos para verificar si un dato es de un tipo específico
echo is_string($newAge);
echo is_bool($isDev);
echo is_int($age);


//------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// Definir Constantes. No pueden cambiar su valor. A diferencia de las Variables, las Constantes son estáticas y no podrían formar de por ejemplo uin bucle, porque no funcionan en tiempo de ejecucion.
// Sino en tiempo de compilación. Para usar en un bucle se debería usar Variables.
// CONSTANTE GLOBAL
define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png');

// CONSTANTE LOCALES (DE CLASE). Siempre en mayusculas por convención.
const NOMBRE = 'Adolfo';

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// CONDICIONALES
// Condicional Tradicional:
$isOld = $age > 4;

if ($isOld) {
    echo "<h2> Eres viejo, lo siento. </h2>";
} elseif ($isDev) {
    echo "<h2> No eres viejo pero eres dev. </h2>";
} else {
    echo "<h2> Eres joven, felicidades.</h2>";
}


// Condicional Ternaria:
$outputAge = $isOld ? "<h2> Eres viejo, lo siento. </h2>" : "<h2> Eres joven, felicidades.</h2>";

// Condicional Match (PHP 8.0+): directamente puedes asignarlo a una variable.
$outputAge2 = match ($age) {
    0, 1, 2 => "<h2> Eres un bebé. </h2>",
    3, 4, 5, 6, 7, 8, 9, 10 => "<h2> Eres un niño. </h2>",
    11, 12, 13, 14, 15, 16, 17, 18 => "<h2> Eres un adolescente. </h2>",
    19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29 => "<h2> Eres un adulto joven. </h2>",
    default => "<h2> Eres un adulto mayor, $name </h2>"
};
// Otra forma de usar Match, con condiciones más complejas:
$outputAge3 = match (true) {
    $age < 2 => "<h2> Eres un bebé. </h2>",
    $age < 10 => "<h2> Eres un niño. </h2>",
    $age < 18 => "<h2> Eres un adolescente. </h2>",
    $age < 29 => "<h2> Eres un adulto joven. </h2>",
    default => "<h2> Eres un adulto mayor, $name </h2>"
};

// Condicional Alternativo que ofrece PHP:
?>

<?php if ($isOld): ?>
    <h2> Eres viejo, lo siento. </h2>
<?php elseif ($isDev) : ?>
    <h2> No eres viejo pero eres dev. </h2>
<?php else: ?>
    <h2> Eres joven, felicidades.</h2>
<?php endif; ?>

<?php
// ESTRUCTURAS DE DATOS--------------------------------------------------------------------------------------------------------------------------------------------------------------
// Arrays: Estructura de datos que permite almacenar múltiples valores en una sola variable.
$bestLanguages = ['PHP', 'JavaScript', 'Python', 'Java', 'C#'];

// Así insertamos elementos al final de en un array:

$bestLanguages[] = 'C++'; // Añade C++ al final del array
$bestLanguages[2] = 'Ruby'; // Añade Ruby en la posición 2 del array

// Arrays Asociativos: Estructura de datos que permite almacenar pares clave-valor. (es parecido a un objeto).
$person = [
    'name' => 'Adolfo',
    'age' => 39,
    'isDev' => true,
    'languages' => ['PHP', 'JavaScript', 'Python']
];

// Una vez definido se puede acceder a los valores de un array asociativo usando la clave e incluso modificarlo:
$person['name'] = "Jose";
$person["languages"][] = "Java";



?>



<h3>

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
    <?= "<script>alert('Hola')</script>Hola "  // puedes poner javascript dentro de un string, se renderiza directamenete ese alert al cargar la página
        . $name
        . "<br/> con una edad de " // puedes poner HTML dentro de un string, un BREAK por ejemplo
        . $age; ?>
    <br>
    <?= $output; ?>
    <br>
    <?= $newOutput; ?>
    <br>
    <?= $output2; ?>
</h3>

<h2> <?= $outputAge3 ?></h2>

<h3> el mejor lenguaje es <?= $bestLanguages[2] ?></h3>
<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>

    <style>
        :root {
            color-scheme: light dark;
        }

        body {
            display: grid;
            place-content: center;
        }
    </style>