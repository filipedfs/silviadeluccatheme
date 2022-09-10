<?php

/**
 * Template Name: Silvia Artigos
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
    <!-- Header -->
    <?php require_once(trailingslashit(get_template_directory()) . 'components/header.php'); ?>
    <!-- Content -->
    <div class="main-content">
        <br>
        <h3 class="subtitle">Publicações</h3>
        <br><br>
        <hr />
        <br><br>
        <p class="basic-text">
            [Em processo de atualização]
        </p>
        <div class="article-card">
            <b class="subtitle subtitle-small">Identidade Feminina – Um Testemunho Pessoal</b>
            <br><br><br>
            <p class="basic-text">
                O que tenho observado nas realidades artístico-culturais que frequento
                desde minha dedicação à atividade da composição, é que o material propriamente
                musical das obras não revela […]
            </p>
            <div class="read-more">
                <i class="bi bi-file-text"></i>
                <a href="/artigo">Leia mais</a>
            </div>
        </div>
        <div class="article-card">
            <b class="subtitle subtitle-small">A Pluralidade Nossa de Cada Dia</b>
            <br><br><br>
            <p class="basic-text">
                Até que outra verdade me seja apresentada pela própria vida, tenho cada vez mais
                forte a convicção de que somente a UNIÃO – ou seja, o […]
            </p>
            <div class="read-more">
                <i class="bi bi-file-text"></i>
                <a href="#">Leia mais</a>
            </div>
        </div>
        <div class="article-card">
            <b class="subtitle subtitle-small">A Cultura em Nosso País e a Questão da Sustentabilidade</b>
            <br><br><br>
            <p class="basic-text">
                1. Em sua opinião, os profissionais que trabalham com ações culturais possuem uma visão de desenvolvimento sustentável da cultura?
                Trata-se de uma preocupação relativamente nova esta, […]
            </p>
            <div class="read-more">
                <i class="bi bi-file-text"></i>
                <a href="#">Leia mais</a>
            </div>
        </div>
        <div class="article-card">
            <b class="subtitle subtitle-small">Socialização na Prática Coral</b>
            <br><br><br>
            <p class="basic-text">
                Em sua opinião, o canto coral exerce uma função socializadora? Justifique. Tratando
                “socialização” como o resultado de atividade ou
                trabalho compartilhado, em que existem trocas e […]
            </p>
            <div class="read-more">
                <i class="bi bi-file-text"></i>
                <a href="#">Leia mais</a>
            </div>
        </div>
    </div>
</body>

</html>