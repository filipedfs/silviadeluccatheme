<?php

/**
 * Template Name: Silvia Fotos
 */

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once(trailingslashit(get_template_directory()) . '/components/favicon.php'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
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
    <div class="main-content videos">
        <br>
        <h3 class="subtitle">Fotos</h3>
        <br><br>
        <hr />
        <br><br>
        <p class="basic-text">
            [Em processo de atualização]
        </p>
        <div class="row-2-columns-basic">
            <div>
                <p class="basic-text">12/02/2021</p>
            </div>
            <div>
                <div>
                    <b class="subtitle subtitle-small">
                        "Sun d'Oro Suite"
                        de Silvia de Lucca
                        em gravação

                    </b>
                    <br><br><br>
                    <p class="basic-text">
                        Estudio Salaviva - Espaço Cachuera! (SP) <br>
                        [Orquestra jovem organizada especialmente para a gravação, com a presença de convidados especiais na liderança de cada naipe] <br>
                        Regência: Ricardo Bologna
                    </p>
                </div>
                <div class="row-4-columns">
                    <div>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/images/uploads/noticia/IMG-20191229-WA0029.jpg" class="fancybox" data-fancybox="gallery1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/uploads/noticia/IMG-20191229-WA0029.jpg" class="img-lightbox" />
                        </a>
                    </div>

                    <div>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/images/uploads/noticia/20200101_214544.jpg" class="fancybox" data-fancybox="gallery1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/uploads/noticia/20200101_214544.jpg" class="img-lightbox" />
                        </a>
                    </div>

                    <div>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/images/uploads/noticia/IMG-20191229-WA0031.jpg" class="fancybox" data-fancybox="gallery1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/uploads/noticia/IMG-20191229-WA0031.jpg" class="img-lightbox" />
                        </a>
                    </div>

                    <div>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/images/uploads/noticia/img3708.jpg" class="fancybox" data-fancybox="gallery1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/uploads/noticia/img3708.jpg" class="img-lightbox" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>