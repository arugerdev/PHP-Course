<h2>
    <?php
    $height = $_GET['height'];
    echo match (true) {
        $height < 50    => "Eres una cucaracha? Eres demasiado bajo para entrar en estas páginas 😅",
        $height < 100   => "Eres muy bajito! 📏",
        $height < 150   => "No importa! Aún eres como el resto 👨‍👨‍👦",
        $height < 180   => "Oye! Estas en la media 😎",
        $height < 195   => "Eres alto! 🔆",
        $height < 210   => "Como va el tiempo por allí, rascacielos? 🏗",
        $height < 250   => "Pobrecita tu espalda, no creo que pueda sujetar semejante altura 🦴",
        default         => "Tu altura no es normal 🚂"
    }
    ?>
</h2>

<h4>
    <?= $_GET['height'] ?>cm
</h4>

<div style="padding-bottom: 4rem;"></div>