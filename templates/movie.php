<main>
    <h2>La próxima película de Marvel</h2>
    <!-- <pre style="max-width:80vw;">
        <?php var_dump($data) ?>
    </pre> -->

    <section>
        <img src="<?= $poster_url; ?>" width="300" alt="Poster de <?= $poster_url; ?>">
    </section>
    <hgroup style="display: flex; flex-direction:column; align-items:center; justify-content: center; padding-bottom:2rem">
        <h3><?= $title; ?></h3>
        <h4> <?= $until_message ?> </h4>
        <p>Fecha de estreno: <?= $release_date; ?></p>
        <p>La siguiente película es: <?= $following_production["title"]; ?></p>
    </hgroup>
</main>