<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

# Incializar una nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //
/* Ejecutar la peticion
  y guardamos el resultado
*/
$result = curl_exec($ch); // curl_exec devuelve un string con el resultado de la peticion y guarda el rdo de la peticion en $result

// Una alternativa seria utilizar file_get_contents
// $result = file_get_content(API_URL); // si solo quieres hacer un GET de una API

$data = json_decode($result, true);

curl_close($ch);

?>

<head>
    <meta charset="UTF-8" />
    <title>La proxima pelicula de Marvel</title>
    <meta name="description" content="La proxima pelicula de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>


<main>

    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["poster_url"]  ?>" style="border-radius: 17px" />
    </section>

    <hgroup>
        <h3><?= $data["title"];?> se estrena en <?= $data["days_until"]; ?> dias </h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>

</main>

<style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 50px;
    }

    hgroup {
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>
