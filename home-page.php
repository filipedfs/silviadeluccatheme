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
    <link rel="icon" type="image/png" href="./assets/images/favicon/favicon.ico" />
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
    <header class="silvia-header">
        <h1 class="header-text-logo">Silvia de LUCCA</h1>
        <nav class="silvia-nav">
            <label class="mobile-menu" for="mobile-menu"><i class="bi bi-list"></i></label>
            <input class="mobile-menu" type="checkbox" id="mobile-menu" />
            <ul>
                <li><a href="./index.html" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Apresentação</a></li>
                <li><a href="#" class="nav-link">Curriculum</a></li>
                <li><a href="./catalogo-musical.html" class="nav-link">Catálogo Musical</a></li>
                <li><a href="#" class="nav-link">Publicações</a></li>
                <li><a href="#" class="nav-link">Artigos</a></li>
                <li><a href="#" class="nav-link">Midia</a></li>
                <li><a href="#" class="nav-link">Contato</a></li>
                <li class="select-language-mobile">
                    <div class="container-select-language-mobile">
                        <p>Select your language: </p>
                        <div class="mobile-flags">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/flags/br.png" />
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/flags/de.png" />
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/flags/gb.png" />
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/flags/es.png" />
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/flags/fr.png" />
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/flags/it.png" />
                        </div>
                    </div>
                </li>

                <li class="select-language">
                    <label class="language-label" for="language-checkbox">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/flags/br.png" />
                        <i class="bi bi-chevron-down"></i>
                    </label>
                    <input type="checkbox" id="language-checkbox">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri()?>/assets/images/flags/br.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri()?>/assets/images/flags/de.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri()?>/assets/images/flags/gb.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri()?>/assets/images/flags/es.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri()?>/assets/images/flags/fr.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri()?>/assets/images/flags/it.png" /></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </header>
    <!-- Content -->
    <div class="main-content">
        <div class="home-template">
            <div class="home-content">
                <h1 class="title animated animatedFadeInUp fadeInUp">Silvia <br />de LUCCA</h1>
                <p class="description animated animatedFadeInUp fadeInUp">
                    Compositora, <br />
                    Mestre em Artes, <br />
                    Graduada em Piano e Psicologia, <br />
                    Apaixonada por Educação e Sociologia.
                </p>
                <p class="bold-italic-silver">A parceria enriquece o fazer e determinados conteúdos merecem ser
                    compartilhados:</p>

                <div class="home-template-topics">
                    <a href="./home-links/noticia.html">
                        <div class="home-topic">
                            <div class="circle" id="texture-a"></div>
                            <p>Notícia</p>
                        </div>
                    </a>
                    <a href="./home-links/belo.html">
                        <div class="home-topic">
                            <p>Belo</p>
                            <div class="circle" id="texture-b"></div>
                        </div>
                    </a>
                    <a href="./home-links/reflexao.html">
                        <div class="home-topic">
                            <div class="circle" id="texture-c"></div>
                            <p>Reflexão</p>
                        </div>
                    </a>
                    <a href="./home-links/homenagem.html">
                        <div class="home-topic">
                            <p>Homenagem</p>
                            <div class="circle" id="texture-d"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="home-template-image-container">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/uploads/home/portrait.jpg" alt="" />
            </div>
        </div>
    </div>
</body>

</html>