<!-- Levantar proyecto: php -S localhost:8000 -->

<?php
$name = "Eduardo";
$isDev = true;
$age = 18;

// var_dump($name); //Muestra el tipo de dato más el valor
// var_dump($isDev);
// var_dump($age);

// echo gettype($name); //Solo muestra el tipo de dato
// echo gettype($isDev);
// echo gettype($age);

$output = "Hola " . $name . " tiene <br/>" . $age . " años";

//Definir Constante
define("LOGO_URL", "https://www.php.net//images/logos/new-php-logo.svg");
const NOMBRE = "Jose Eduardo";

//Componente Ternario
$isOld = $age > 40;
$outputAge = $isOld
    ? "Eres viejo"
    : "Eres joven";

?>
<h2><?= "Ternario: $outputAge" ?></h2>


<!-- If primero opción -->
<?php
if ($isOld) {
    echo "<h2>IF1: Eres Viejo, lo siento</h2>";
} elseif ($isDev) {
    echo "<h2>IF1: Eres un Desarrollador, estás aquí para aprender</h2>";
} else {
    echo "<h2>IF1: Eres Joven, felicidades</h2>";
}
?>

<!-- //If segunda opción -->
<?php if ($isOld) : ?>
    <h2>IF2: Eres Viejo, lo siento</h2>

<?php elseif ($isDev) : ?>
    <h2>IF2: Eres un Desarrollador, estás aquí para aprender</h2>
<?php else : ?>
    <h2>IF2: Eres Joven, felicidades</h2>

<?php endif; ?>

<!-- Match (opción con más código) -->
<?
$outputAgeMatch = match ($age) {
    0, 1, 2 => "Eres un bebé , $name",
    3, 4, 5, 6, 7, 8, 9 => "Eres un niño, $name",
    10, 11, 12 => "Eres un adolescente, $name",
    13, 14, 15, 16, 17, 18, 19 => "Eres un joven, $name",
    default => "Eres un adulto $name",
}
?>
<h2><?= "Match 1: $outputAgeMatch" ?></h2>

<!-- Match (opción ideal) -->
<?
$outputAgeMatch = match (true) {
    $age < 2 => "Eres un bebé , $name",
    $age < 10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age === 18 => "Eres mayor de edad $name",
    $age < 20 => "Eres un joven, $name",
    default => "Eres un adulto $name",
}
?>
<h2><?= "Match 2: $outputAgeMatch" ?></h2>


<!-- //Imagenes -->
<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">

<!-- <h1>
    <?=
    $output
    ?>
</h1> -->

<h1>
    <?=
    "Hola " . $name . " tiene <br/>" . $age . " años";
    ?>
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