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

define("LOGO_URL", "https://www.php.net//images/logos/new-php-logo.svg")
?>
<img src="<?=LOGO_URL?>" alt="PHP Logo" width="200">

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