<?php
/**
 * Template Name: Silvia Homenagem
 */
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <?php require_once( trailingslashit( get_template_directory() ) . '/components/favicon.php' ); ?>
    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Silvia de LUCCA</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- Header -->
    <?php require_once( trailingslashit( get_template_directory() ) . 'components/header.php' ); ?>
    <!-- Content -->
    <div class="main-content">
        <br>
        <h3 class="subtitle">Homenagem</h3>
        <br>
        <strong>a selecionada do momento...</strong>
        <br><br>
        <hr />
        <p class="basic-text">
            Uma homenagem minha ao compositor Claudio Santoro (1919-1989)
            e aos bolsistas do Festival de Inverno de Campos do Jordão.</p>
        <br><br>
        <div class="row-2-columns">
            <div class="iframe-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jiEUXbK6RjQ"
                    title="YouTube video player" frameborder="0" allow="
                        accelerometer; 
                        autoplay; 
                        clipboard-write; 
                        encrypted-media; 
                        gyroscope; 
                        picture-in-picture" allowfullscreen></iframe>
            </div>
            <div>
                <p class="basic-text">
                    <b class="basic-text">Sun d’Oro Suite para orquestra de cordas 2007 Silvia de Lucca</b>
                    <br><br>
                    FICHA TÉCNICA:
                    <br><br>
                    Regência: Ricardo Bologna (Orquestra jovem organizada especialmente para a gravação da…
                </p>
            </div>
        </div>
    </div>
</body>

</html>