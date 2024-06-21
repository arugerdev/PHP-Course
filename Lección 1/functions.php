<?php

# Uso de tipado estricto, si se queja en usos incorrectos de tipos.
# A nivel de archivo
declare(strict_types=1);

function render_template(string $template, array $data = [])
{
    extract($data);
    require "../templates/$template.php";
}
