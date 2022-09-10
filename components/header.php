<?php
require_once(trailingslashit(get_template_directory()) . '/variables.php');
?>
<header class="silvia-header">
    <h1 class="header-text-logo">Silvia de LUCCA</h1>
    <nav class="silvia-nav">
        <label class="mobile-menu" for="mobile-menu"><i class="bi bi-list"></i></label>
        <input class="mobile-menu" type="checkbox" id="mobile-menu" />
        <ul>
            <li><a href="/" class="nav-link">Home</a></li>
            <li><a href="/apresentacao" class="nav-link">Apresentação</a></li>
            <li><a href="/curriculum" class="nav-link">Curriculum</a></li>
            <li><a href="/catalogo-musical" class="nav-link">Catálogo Musical</a></li>
            <li><a href="/publicacoes" class="nav-link">Publicações</a></li>
            <?php  echo $check = $dev ? '<li><a href="#" class="nav-link">Artigos</a></li>' : null ?>
            <?php  echo $check = $dev ? '<li><a href="#" class="nav-link">Midia</a></li>' : null ?>
            <li><a href="/contato" class="nav-link">Contato</a></li>
            <?php
            echo $check = $dev ?
                '<li class="select-language-mobile">
                    <div class="container-select-language-mobile">
                        <p>Selecione: </p>
                        <div class="mobile-flags">
                            <img src="'.get_template_directory_uri().'/assets/images/flags/br.png" />
                            <img src="'.get_template_directory_uri().'/assets/images/flags/de.png" />
                            <img src="'.get_template_directory_uri().'/assets/images/flags/gb.png" />
                            <img src="'.get_template_directory_uri().'/assets/images/flags/es.png" />
                            <img src="'.get_template_directory_uri().'/assets/images/flags/fr.png" />
                            <img src="'.get_template_directory_uri().'/assets/images/flags/it.png" />
                        </div>
                    </div>
                </li>'
                : null;
            ?>
            <li class="select-language">
                <?php
                echo $check = $dev ?
                    '<label class="language-label" for="language-checkbox">
                        <img src="'.get_template_directory_uri().'/assets/images/flags/br.png" />
                        <i class="bi bi-chevron-down"></i>
                    </label>
                    <input type="checkbox" id="language-checkbox">
                    <ul>
                        <li><img src="'.get_template_directory_uri().'/assets/images/flags/br.png" /></li>
                        <li><img src="'.get_template_directory_uri().'/assets/images/flags/de.png" /></li>
                        <li><img src="'.get_template_directory_uri().'/assets/images/flags/gb.png" /></li>
                        <li><img src="'.get_template_directory_uri().'/assets/images/flags/es.png" /></li>
                        <li><img src="'.get_template_directory_uri().'/assets/images/flags/fr.png" /></li>
                        <li><img src="'.get_template_directory_uri().'/assets/images/flags/it.png" /></li>
                    </ul>'
                    : null;
                ?>
            </li>
        </ul>
    </nav>
</header>