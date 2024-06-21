<?php
require_once 'functions.php';
const API_URL = "https://whenisthenextmcufilm.com/api";

#########################################################################
# USAMOS cURL PERO HAY OTRAS FORMAS MAS SENCILLAS O DIFERENTES QUE ESTA #
#########################################################################
# $result = file_get_contents(API_URL)                                  #
# $data = json_decode($result, true);                                   #
#########################################################################

#Inicializar sesión de cURL; ch = cURL handler
$ch = curl_init(API_URL);

# Indicar que queremos recibir el resultado y no mostrarla en pantalla.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

#Ejecutamos la petición y guardamos el resultado
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);

?>

<?php
$num = 1;
$lecName = "primera";
render_template('head', ['num' => $num]);
render_template('main', ['lecName' => $lecName]);
render_template('styles');
?>

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