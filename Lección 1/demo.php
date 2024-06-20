<?php
define("LOGO_URL", 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png');
define("NUM_LECCIÓN", 1);
define("LECCIÓN", "primera");


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
    <!-- EL EJERCICIO -->
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