<?php

/**
 * Template Name: Silvia Noticia
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
        <h3 class="subtitle">Noticia</h3>
        <br>
        <strong>a selecionada do momento...</strong>
        <br><br>
        <hr />
        <div class="basic-text">
            <p class="subtitle subtitle-small">Boa nova</p>
            <br>
            <p class="basic-text">dele <br>nossa <br>minha <br>DELE</p>
            <br>
            <p class="basic-text">
                Torna-se realidade palpável, visível e principalmente audível o empenho apaixonado de um compositor
                idealista:
                o manual para ensino musical em orquestra de iniciantes intitulado curiosamente MUSISSIMPHOS, no caso,
                um
                especial “medicamento” que contém os elementos “musicinida” e “sinfonietanida”, segundo o bom humor de
                seu
                criador.
            </p>
            <br>
            <p class="basic-text">
                Esse método idealizado e elaborado por Mario Ficarelli em seus cinco últimos anos de vida, cujo processo
                de edição tem a parceria de muitas mentes e mãos competentes, sai do prelo bilíngue, em 10 volumes e
                três níveis de dificuldade pela Mister Edições. Originalíssimo, o compositor serve-se de sua grande
                experiência e habilidade como orquestrador e músico-pedagogo sintetizando a teoria musical em uma
                prática coletiva via orquestra sinfônica.
            </p>
            <br>
            <p class="basic-text">
                Em breve, mais detalhes…
            </p>

            <!-- Gallery -->
            <div class="center-container">
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
    </div>
    <!-- Footer -->
    <?php require_once(trailingslashit(get_template_directory()) . 'components/footer.php'); ?>
</body>

</html>