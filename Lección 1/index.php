<?php
define("LOGO_URL", 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png');
define("NUM_LECCIÓN", 1);
define("LECCIÓN", "primera");

const API_URL = "https://whenisthenextmcufilm.com/api";

#Inicializar sesión de cURL; ch = cURL handler
$ch = curl_init(API_URL);

# Indicar que queremos recibir el resultado y no mostrarla en pantalla.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

#Ejecutamos la petición y guardamos el resultado
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);

?>



<head>
    <title>Cursor de PHP - Lección <?= NUM_LECCIÓN ?> </title>
    <meta charset="UTF-8">
    <meta name="description" content="La próxima película de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />

</head>

<small>@arugerdev</small>
<div class="first-page">
    <section class="first-page-info">
        <h1 style='padding: 0; margin:0; font-size:x-large; font-weight:900;'>Estoy aprendiendo PHP!</h1>
        <h2 style='padding: 0; margin:0; margin-bottom:12px; color:lightslategray; font-size:medium; font-weight:900;'>Y esta es la <?= LECCIÓN ?> lección!</h2>
        <a href="https://php.net" target="_blank">
            <img src="<?= LOGO_URL ?>" alt="PHP" width="200">
        </a>
    </section>
    <img src="https://media3.giphy.com/media/5QQ6FpAQ0syYLkONPB/giphy.gif?cid=6c09b952dbt26pondii22tjrqrcl5u7kig8i9vn6h10bigxn&ep=v1_gifs_search&rid=giphy.gif&ct=s" alt="" width="64">
    <div class="divisor" />
</div>
<main>
    <h2>La próxima película de Marvel</h2>
    <!-- <pre style="max-width:80vw;">
        <?php var_dump($data) ?>
    </pre> -->

    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["poster_url"]; ?>">
    </section>
    <hgroup style="display: flex; flex-direction:column; align-items:center; justify-content: center; padding-bottom:2rem">
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente película es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>



<style>
    :root {
        color-scheme: light dark;
        padding: 0;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
        padding: 0;
        margin: 0;
        justify-content: center;
        place-items: center;
        place-content: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    img {
        border-radius: 16px;
    }

    main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .first-page {
        display: flex;
        flex-direction: column;
        min-height: 31vh;
        padding: 0;
        padding-top: 31vh;
        margin: 0;
        align-items: center;
        justify-content: space-around;
    }

    .first-page-info {
        display: flex;
        min-height: 31vh;
        flex-direction: column;
        gap: 1px;
        align-items: center;
        justify-content: center;
        padding-bottom: 40vh;
    }

    .divisor {
        width: 99vw;
        height: 1px;
        margin-top: 2rem;
        margin-bottom: 2rem;
        background: #666;
    }
</style>