<?php

/**
 * Template Name: Silvia Catalogo Musical
 */

# $json = file_get_contents(get_template_directory_uri().'/placeholder.json');
# $json_data = json_decode($json, true);
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
    <script type="text/javascript" src="assets/js/script.js"></script>
    <title>Silvia de LUCCA</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- Header -->
    <?php require_once(trailingslashit(get_template_directory()) . 'components/header.php'); ?>
    <!-- Content -->
    <div class="main-content">
        <div class="subtitle-container">
            <h3 class="subtitle">Catálogo musical</h3>
        </div>
        <hr>
        <div class="menu-category">
            <button class="menu-category-item" onclick="changeCategory('Solos')">Solos</button>
            <button class="menu-category-item" onclick="changeCategory('Duos')">Duos</button>
            <button class="menu-category-item" onclick="changeCategory('Trios')">Trios</button>
            <button class="menu-category-item" onclick="changeCategory('Quartetos')">Quartetos</button>
            <button class="menu-category-item" onclick="changeCategory('Quintetos')">Quintetos</button>
            <button class="menu-category-item" onclick="changeCategory('Sexteto')">Sexteto</button>
            <button class="menu-category-item" onclick="changeCategory('Noneto')">Noneto</button>
            <button class="menu-category-item" onclick="changeCategory('OrquestraDeCordas')">Orquestra de
                Cordas</button>
            <button class="menu-category-item" onclick="changeCategory('OrquestraSinfonica')">Orquestra
                Sinfônica</button>
        </div>

        <div id="Solos" class="category animated animatedFadeInUp fadeInUp">
            <table class="musical-catalog-table">
                <thead>
                    <th>Obra</th>
                    <th>Intrumentação</th>
                    <th>Duração</th>
                    <th>Edição</th>
                    <th class="hide-when-mobile">Observações</th>
                </thead>
                <tbody>
                    <?php
                    # foreach($arr as $item) {

                    /* echo '
                        <tr>
                            <td>
                                <p>'.$uses = $item['var1'].'</p>
                                <p>2019</p>
                            </td>
                            <td>Viola</td>
                            <td>8’30”</td>
                            <td>Digitada</td>
                            <td class="hide-when-mobile">
                                <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                                <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                                festival.<br /><br />
                                <b>Regente: </b>Hermann Ostendarp
                            </td>
                        </tr>
                        '; 
                    }*/
                    ?>

                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            Encomenda: projeto ‘CD Mulheres Compositoras’ aprovado pelo Funcultura do Governo de Pernambuco,
                            destinada a ser gravada em 2020 pelo violista Rafael Altino.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Preludio Encontro das Águas</p>
                            <p>2010</p>
                        </td>
                        <td>Violoncelo</td>
                        <td>3’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            Encomenda: pelo músico Felipe Ávila para compor o CD Amazônia, de sua autoria, a ser lançado em 2010.
                            Gravação: interpretada por Teresa Cristina Rodrigues Silva
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Cordas Sapecas</p>
                            <p>2006</p>
                        </td>
                        <td>Violoncelo</td>
                        <td>2’40”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            Estreia: 23.08.06, São Paulo – Ji Yon Shim, no Centro Cultural São Paulo,
                            durante o concerto comemorativo dos 80 anos do compositor brasileiro Olivier Toni.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Só-nus**</p>
                            <p>2005</p>
                        </td>
                        <td>Piano</td>
                        <td>3’00”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            Obs.: peça solicitada para integrar um projeto com 14 compositores brasileiros convidados,
                            em que cada um enfoca um dos quadros que compõe a Via Sacra.
                            A presente refere-se ao de número 10: “E tiraram-Lhe as vestes...”.
                            Estreia: 21.12.08, São Paulo – Karin Fernandes
                            ** Alteração do nome original, “Sem título, só-nus”, em setembro de 2016
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Reflexos</p>
                            <p>1990</p>
                        </td>
                        <td>Tímpanos ( 4 )</td>
                        <td>9’20”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            Estreia: 22.09.90, Zurique (Suíça) – Matthias Eser
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Dois Ensaios</p>
                            <p>1989</p>
                        </td>
                        <td>Clarineta</td>
                        <td>5’20”</td>
                        <td>BME – Brazilian Music Enterprises</td>
                        <td class="hide-when-mobile">
                            Estreia: 4.09.90, Zurique (Suíça) – Rita Meier.
                            Obs.: obra composta como “peça de confronto” para o concurso de clarineta do “Koservatorium und Musikhochschule Zürich”, 1990
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Três Poemas</p>
                            <p>1989</p>
                        </td>
                        <td>Violão</td>
                        <td>8’00”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            Estreia: 22.09.90, Zurique (Suíça) – Walther Giger
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Contrastes</p>
                            <p>1988</p>
                        </td>
                        <td>Contrabaixo</td>
                        <td>9’00”</td>
                        <td>MS</td>
                        <td class="hide-when-mobile">
                            Estreia: 21.10.88, São Paulo – Sérgio Oliveira
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Eros</p>
                            <p>1989</p>
                        </td>
                        <td>Clarineta</td>
                        <td>4’00”</td>
                        <td>MS</td>
                        <td class="hide-when-mobile">
                            Estreia: 29.06.85, São Paulo – João Geraldo Alves
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Chacona</p>
                            <p>1982</p>
                        </td>
                        <td>Piano</td>
                        <td>2’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            Estreia: 24.01.83, São Paulo – Silvia Regina Figueiredo Órfão
                            Prêmio: 1º Lugar no concurso Rádio e Televisão Cultura, programa “Ligue para um Clássico”, 1983
                            Gravação: TV Cultura de São Paulo – 1983
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="Duos" class="category animated animatedFadeInUp fadeInUp" style="display:none">
            <table class="musical-catalog-table">
                <thead>
                    <th>Obra</th>
                    <th>Intrumentação</th>
                    <th>Duração</th>
                    <th>Edição</th>
                    <th class="hide-when-mobile">Observações</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="Trios" class="category animated animatedFadeInUp fadeInUp" style="display:none">
            <table class="musical-catalog-table">
                <thead>
                    <th>Obra</th>
                    <th>Intrumentação</th>
                    <th>Duração</th>
                    <th>Edição</th>
                    <th class="hide-when-mobile">Observações</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="Quartetos" class="category animated animatedFadeInUp fadeInUp" style="display:none">
            <table class="musical-catalog-table">
                <thead>
                    <th>Obra</th>
                    <th>Intrumentação</th>
                    <th>Duração</th>
                    <th>Edição</th>
                    <th class="hide-when-mobile">Observações</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="Quintetos" class="category animated animatedFadeInUp fadeInUp" style="display:none">
            <table class="musical-catalog-table">
                <thead>
                    <th>Obra</th>
                    <th>Intrumentação</th>
                    <th>Duração</th>
                    <th>Edição</th>
                    <th class="hide-when-mobile">Observações</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="Sexteto" class="category animated animatedFadeInUp fadeInUp" style="display:none">
            <table class="musical-catalog-table">
                <thead>
                    <th>Obra</th>
                    <th>Intrumentação</th>
                    <th>Duração</th>
                    <th>Edição</th>
                    <th class="hide-when-mobile">Observações</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="Noneto" class="category animated animatedFadeInUp fadeInUp" style="display:none">
            <table class="musical-catalog-table">
                <thead>
                    <th>Obra</th>
                    <th>Intrumentação</th>
                    <th>Duração</th>
                    <th>Edição</th>
                    <th class="hide-when-mobile">Observações</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="OrquestraDeCordas" class="category animated animatedFadeInUp fadeInUp" style="display:none">
            <table class="musical-catalog-table">
                <thead>
                    <th>Obra</th>
                    <th>Intrumentação</th>
                    <th>Duração</th>
                    <th>Edição</th>
                    <th class="hide-when-mobile">Observações</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="OrquestraSinfonica" class="category animated animatedFadeInUp fadeInUp" style="display:none">
            <table class="musical-catalog-table">
                <thead>
                    <th>Obra</th>
                    <th>Intrumentação</th>
                    <th>Duração</th>
                    <th>Edição</th>
                    <th class="hide-when-mobile">Observações</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Rose-Vergé</p>
                            <p>2019</p>
                        </td>
                        <td>Viola</td>
                        <td>8’30”</td>
                        <td>Digitada</td>
                        <td class="hide-when-mobile">
                            <b>Encomenda: </b>Festival Internacional de Orquestras Jovens SG 2003 <br /><br />
                            <b>Estreia: </b>9.08.03, na região de Toggenburg (Suíça), pela orquestra sinfônica jovem do
                            festival.<br /><br />
                            <b>Regente: </b>Hermann Ostendarp
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Footer -->
    <?php require_once(trailingslashit(get_template_directory()) . 'components/footer.php'); ?>
</body>

</html>