<?php

require_once 'functions.php';

#################################################
# Se quejaria, el parametro debe de ser string  #
#################################################
# $data = get_data(123);                        #
#################################################

# No se queja porque API_URL es un string
$data = get_data(API_URL);
$until_message = get_until_message($data["days_until"]);

?>

<?php
$num = 2;
$lecName = "segunda";
render_template('head', ['num' => $num]);
render_template('main', ['lecName' => $lecName]);
render_template('movie', array_merge($data, ["until_message" => $until_message]));
render_template('styles');
?>

