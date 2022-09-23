<?php

/**
 * Template Name: Silvia Home Page
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
    <title>Silvia DE LUCCA</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- Header -->
    <?php require_once(trailingslashit(get_template_directory()) . 'components/header.php'); ?>
    <!-- Content -->
    <div class="main-content">
        <div class="home-template">
            <div class="home-content">
                <h1 class="title animated animatedFadeInUp fadeInUp">Silvia <br />DE LUCCA</h1>
                <p class="description animated animatedFadeInUp fadeInUp">
                    Compositora, <br />
                    Mestre em Artes, <br />
                    Graduada em Piano e Psicologia, <br />
                    Apaixonada por Educação e Sociologia.
                </p>
                <p class="bold-silver">
                  A parceria enriquece o fazer e determinados conteúdos merecem ser compartilhados:
                </p>

                <div class="home-template-topics">
                    <a href="/noticia-2">
                        <div class="home-topic">
                            <div class="circle" id="texture-a"></div>
                            <p>Notícia</p>
                        </div>
                    </a>
                    <a href="/belo-3">
                        <div class="home-topic">
                            <p>Belo</p>
                            <div class="circle" id="texture-b"></div>
                        </div>
                    </a>
                    <a href="/reflexao">
                        <div class="home-topic">
                            <div class="circle" id="texture-c"></div>
                            <p>Reflexão</p>
                        </div>
                    </a>
                    <a href="/homenagem">
                        <div class="home-topic">
                            <p>Homenagem</p>
                            <div class="circle" id="texture-d"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="home-template-image-container">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/uploads/home/portrait.jpg" alt="" />
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php require_once(trailingslashit(get_template_directory()) . 'components/footer.php'); ?>
</body>

</html>
