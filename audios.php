<?php

/**
 * Template Name: Silvia Audios
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
    <!-- Videos -->
    <?php
    require_once(trailingslashit(get_template_directory()) . 'load-videos.php');
    $video_list = load_videos("PLkKbqsoc9ce9uoRlEV8jZE5sGqa33PMPF");
    ?>

    <!-- Header -->
    <?php require_once(trailingslashit(get_template_directory()) . 'components/header.php'); ?>
    <!-- Content -->
    <div class="main-content">
        <br>
        <h3 class="subtitle">Áudios</h3>
        <br><br>
        <hr />
        <br><br>
        <p class="basic-text">
            [Em processo de atualização]
        </p>
        <div class="article-card">
            <b class="subtitle subtitle-small">Composições próprias</b>
            <br><br><br>
            <div class="row-2-columns-full">
                
                <div class="medium-container">
                    <b class="subtitle subtitle-small">Intérpretes</b>
                    <br><br><br>
                    <ul class="basic-ul">
                        <li class="li-bolder"> Circuloníricos (2013)</li>
                        <li> Grupo de Percussão do Nordeste</li>
                        <li class="li-bolder"> Cordas Sapecas (2006)</li>
                        <li> Ji Yon Shim (violoncelo)</li>
                        <li class="li-bolder"> Só-Nus (2005)</li>
                        <li> Paulo Gazzaneo (piano)</li>
                        <li class="li-bolder"> Colar de Pérolas (1999)</li>
                        <li> Orquestra Sinfônica da USP - Regência: Carlos Moreno</li>
                        <li class="li-bolder"> R.S.V.P. (1995)</li>
                        <li> Orquestra jovem Il Mosaico - Regência.: Hermann Ostendarp, Débora Imholz (alto), Martin Winiger (clarinete), Ueli Kläsli (marimba)</li>
                        <li class="li-bolder"> Dionysiaque (1994)</li>
                        <li> Otinilo Pacheco (clarinete baixo), Charles Augusto (percussão)</li>
                        <li class="li-bolder"> Im Sonnenschein (1993)</li>
                        <li> Silvana Romani (mezzo soprano), Constança de Almeida Prado (violino), Ricardo Kubala (viola), Alexandre Rosa (contrabaixo)</li>
                        <li class="li-bolder"> De Minas (1992)</li>
                        <li> Ricardo Bologna (marimba), Adriana Holtz (violoncelo), Yara Borges (piano)</li>
                        <li class="li-bolder"> Quadri della Natura (1990) - Der Wind (O Vento)</li>
                        <li> Ana de Oliveira (violino), Edelton Gloeden (violão), Alexandre Rosa (contrabaixo)</li>
                        <li class="li-bolder"> Quadri della Natura (1990) - Die Blumen (As Flores)</li>
                        <li> Edelton Gloeden (violão)</li>
                        <li class="li-bolder"> Quadri della Natura (1990) - Die Berge (As Montanhas)</li>
                        <li> Alexandre Rosa (contrabaixo)</li>
                        <li class="li-bolder"> Quadri della Natura (1990) - Die Bäume (As Árvores)</li>
                        <li> Ana de Oliveira (violino), Edelton Gloeden (violão), Alexandre Rosa (contrabaixo)</li>
                        <li class="li-bolder"> Dois Ensaios (1989)</li>
                        <li> Luis Afonso Montanha (clarinete)</li>
                        <li class="li-bolder"> Contrastes (1988)</li>
                        <li> Fumio Shirato (contrabaixo)</li>
                        <li class="li-bolder"> Vertigo (1985)</li>
                        <li> Constança de Almeida Prado (violino), Ji Yon Shim (violoncelo)</li>
                        <li class="li-bolder"> Chacona (1982)</li>
                        <li> Yara Borges (piano)</li>
                    </ul>
                </div>
                <div>
                    <div class="video-template">
                        <?php
                        if (!empty($video_list->items)) {
                            foreach ($video_list->items as $item) {
                                if (isset($item->snippet->resourceId->videoId)) {
                        ?>
                                    <div class="video-template-iframe">
                                        <iframe width="250" height="120" src="https://www.youtube.com/embed/<?php echo $item->snippet->resourceId->videoId; ?>" frameborder="" allowfullscreen></iframe>
                                    </div>
                        <?php
                                }
                            }
                        } else {
                            consoleLog('Something when wrong on loading videos');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>