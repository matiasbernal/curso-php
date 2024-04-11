<?php /** @noinspection PhpLanguageLevelInspection */
$name = "Matias";
$isDev = true;
$age = 26;

define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-logo-png-transparent.png');

$output = "Hola $name, con una edad de $age";
$outputAge = match (true){
    $age < 2 => "Eres un bebe, $name",
    $age < 10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age == 18 => "Eres mayor de edad, $name",
    $age < 40 => "Eres un adulto joven, $name",
    $age < 65 => "Eres un adulto, $name",
    $age < 85 => "Eres un adulto mayor, $name",
    default => "Hueles mas a madera que a fruta, $name"
};

$bestLanguages = ["PHP", "JS", "Python", "Java", "CSharp"];
$bestLanguages[] = "Go";
$bestLanguages[] = "Rust";

$person = [
    "name" => "Matias",
    "age" => 26,
    "isDev" => true,
    "languages" => $bestLanguages,
];

$person["languages"][] = "Kotlin"; // Cambiar el array para agregar un nuevo lenguaje



?>
<ul>
    <?php foreach($bestLanguages as $key => $language): ?> // key es para obtener el indice
        <li><?= $key+1 . ". " .  $language ?></li>
    <?php endforeach; ?>
</ul>
<h3>
    <?= $person["languages"][7] ?>
</h3>
<h2>
    <?= $outputAge?>
</h2>


<img src="<?= LOGO_URL ?>" alt="PHP logo" width="200">
<h1>
    <?=$output?>
</h1>
<style>
    :root {
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>
