<?php

/**
 * Template Name: Silvia Midia
 */
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once(trailingslashit(get_template_directory()) . '/components/favicon.php'); ?>
    <!-- Style -->
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Silvia de LUCCA</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- Header -->
    <?php require_once(trailingslashit(get_template_directory()) . 'components/header.php'); ?>
    <!-- Content -->
    <div class="main-content">
        <br>
        <h3 class="subtitle">Mídia</h3>
        <br><br>
        <hr />
        <br><br>
        <div class="animated animatedFadeInUp fadeInUp">
            <a href="/audios">
                <div class="midia-card">
                    <div class="midia-card-header">
                        <i class="bi bi-mic-fill"></i>
                        <p>Audios</p>
                    </div>
                    <div class="midia-chevron"><i class="bi bi-chevron-right"></i></div>
                </div>
            </a>
            <a href="/videos">
                <div class="midia-card">
                    <div class="midia-card-header">
                        <i class="bi bi-play-fill"></i>
                        <p>Videos</p>
                    </div>
                    <div class="midia-chevron"><i class="bi bi-chevron-right"></i></div>
                </div>
            </a>
            <a href="/fotos">
                <div class="midia-card">
                    <div class="midia-card-header">
                        <i class="bi bi-camera-fill"></i>
                        <p>Fotos</p>
                    </div>
                    <div class="midia-chevron"><i class="bi bi-chevron-right"></i></div>
                </div>
            </a>
        </div>
    </div>
    <!-- Footer -->
    <?php require_once(trailingslashit(get_template_directory()) . 'components/footer.php'); ?>
</body>

</html>