<?php
require_once "functions.php";
?>

<?php
$num = 4;
$lecName = "cuarta";
render_template('head', ['num' => $num]);
render_template('main', ['lecName' => $lecName]);


render_template('styles');
?>

<form action="" method="get">
    <h3>Formulario para saber si eres alto o no</h3>
    <h4>Inserta tu altura:</h4>
    <div class="input-group-append" style="display: flex; flex-direction:row; align-items:center; gap:24px">
        <input type="number" value="<?= (!empty($_GET['height']) ? $_GET['height'] :  '') ?>" name="height" id="heightInput" class="form-control" placeholder="Altura en cm ej: 165" aria-label="Altura en cm ej: 165" aria-describedby="basic-addon2" min="10" max="250">
        <span class="input-group-text" id="basic-addon2">cm</span>
    </div>
    <button type="submit" style="max-width: 150px;">Enviar</button>
</form>

<?php
if (!empty($_GET['height'])) {
    render_template('height_result');
} ?>