<?php

/**
 * Template Name: Silvia Belo
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
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/main.css">
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
        <h3 class="subtitle">Belo</h3>
        <br>
        <strong>a selecionada do momento...</strong>
        <br><br>
        <hr />
        <div class="basic-text">
            <p class="basic-text">
                Apesar de tudo, amo!
                <br><br>
                (E ainda posso ouvir sua música “maquinal” com alguns solos aqui e ali, meio ensurdecidos, é verdade,
                mas vivos e belíssimos. O de corne inglês e clarone estão entre os mais persistentes.)
                <br><br>
                Um viva para SÉRGIO SOUZA*, cujo trabalho retrata com maestria a alma da cidade de São Paulo,
                caracterizada por alguns como “selva de pedra”.
                <br><br>
                *) @serjosoza
            </p>

            <!-- Gallery -->
            <div class="center-container">
                <div class="row-4-columns">
                    <div>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/images/uploads/belo/@serjosoza-1080x860.jpg" class="fancybox" data-fancybox="gallery1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/uploads/belo/@serjosoza-1080x860.jpg" class="img-lightbox" />
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