<?php
$name = "Eduardo";
$isDev = true;
$age = 33;



// var_dump($name); //Muestra el tipo de dato más el valor
// var_dump($isDev);
// var_dump($age);

// echo gettype($name); //Solo muestra el tipo de dato
// echo gettype($isDev);
// echo gettype($age);

$output = "Hola " . $name . " tiene <br/>" . $age . " años";

//Constante
define("LOGO_URL", "https://www.php.net//images/logos/new-php-logo.svg");
const NOMBRE = "Jose Eduardo";

//If
$isOld = $age > 40;
?>

<?php
if ($isOld) {
    echo "<h2>Eres Viejo, lo siento</h2>";
} elseif ($isDev) {
    echo "<h2>Eres un Desarrollador, estás aquí para aprender</h2>";
} else {
    echo "<h2>Eres Joven, felicidades</h2>";
}
?>

<!-- //If segunda opcion -->
<?php if ($isOld) : ?>
    <h2>Eres Viejo, lo siento</h2>

<?php elseif ($isDev) : ?>
    <h2>Eres un Desarrollador, estás aquí para aprender</h2>
<?php else : ?>
    <h2>Eres Joven, felicidades</h2>

<?php endif; ?>


<!-- //Imagenes -->
<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">

<h1>
    <?=
    $output
    ?>
</h1>

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