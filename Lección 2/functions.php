<?php

# Uso de tipado estricto, si se queja en usos incorrectos de tipos.
# A nivel de archivo
declare(strict_types=1);

const API_URL = "https://whenisthenextmcufilm.com/api";

function render_template(string $template, array $data = [])
{
    extract($data);
    require "../templates/$template.php";
}

function get_data(string $url): array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{
    return match (true) {
        $days == 0      => "HOY SE ESTRENA!",
        $days == 1      => "Se estrena mañana! ",
        $days < 7       => "Se estrena esta semana, dentro de $days dias",
        $days < 30      => "Se estrena este mes, dentro de $days dias",
        default         => "Aún falta mucho para el estreno... Dentro de $days dias"
    };
}
