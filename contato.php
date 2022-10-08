<?php

/**
 * Template Name: Silvia Contato
 */

require_once(trailingslashit(get_template_directory()) . '/variables.php');
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
        <h3 class="subtitle">Contato</h3>
        <br><br>
        <hr />
        <br><br>
        <div class="center-container-grid">

            <h3 class="subtitle">Redes sociais</h3>
            <div class="replace-with-icon">
                <div class="desktop">
                    <p>YouTube: <a href="https://www.youtube.com/channel/UCJx1CBggGmRYtAWlVmO5qsQ" class="custom-link" target="_blank">https://www.youtube.com/channel/UCJx1CBggGmRYtAWlVmO5qsQ</a></p>
                    <p>Instagram: <a href="https://www.instagram.com/_silvia_de_lucca/" class="custom-link" target="_blank">https://www.instagram.com/_silvia_de_lucca/</a></p>
                    <p>Facebook: <a href="https://www.facebook.com/silvia.d.lucca" class="custom-link" target="_blank">https://www.facebook.com/silvia.d.lucca</a></p>
                </div>
                <div class="mobile">
                    <a href="https://www.youtube.com/channel/UCJx1CBggGmRYtAWlVmO5qsQ">
                        <i class="bi bi-youtube"></i>
                        <br><br>
                        <p>Silvia de Lucca</p>
                    </a>
                    <a href="https://www.instagram.com/_silvia_de_lucca/">
                        <i class="bi bi-instagram"></i>
                        <br><br>
                        <p>@_silvia_de_lucca</p>
                    </a>
                  <a href="https://www.facebook.com/silvia.d.lucca">
                    <i class="bi bi-facebook"></i>
                    <br><br>
                    <p>Silvia de Lucca</p>
                  </a>
                </div>
            </div>

            <form class="custom-form" method="post" action="">
                <div class="form-horizontal-container">
                    <input class="input" type="text" id="your-name" name="your-name" placeholder="Nome" required/>
                    <input class="input" type="text" id="your-email" name="your-email" placeholder="E-mail" required/>
                </div>
                <input class="input" type="text" id="your-subject" name="your-subject" placeholder="Assunto" required/>
                <textarea id="your-message" name="your-message" class="input" placeholder="Escreva aqui sua mensagem em até 1.000 caracteres" required></textarea>
                <div class="form-horizontal-container">
<!--                    --><?php
//                    echo $check = $dev ?
//                        '<p class="basic-text" id="char_count">0 caracteres digitados.</p>'
//                        : '<div></div>';
//                    ?>
                    <button class="button" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <?php require_once(trailingslashit(get_template_directory()) . 'components/footer.php'); ?>
</body>

</html>
