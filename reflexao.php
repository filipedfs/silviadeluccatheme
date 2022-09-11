<?php

/**
 * Template Name: Silvia Reflexão
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
        <h3 class="subtitle">Reflexão</h3>
        <br>
        <strong>a selecionada do momento...</strong>
        <br><br>
        <hr />
        <div class="row-2-columns">
            <div class="image-container">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/uploads/reflexao/51960818_2471970629541310_7308639989544255488_n.jpg" />
            </div>
            <div>
                <p class="basic-text">
                    “Como demonstrou Angela Davis em “A liberdade é uma luta constante” (2018), determinadas batalhas
                    não podem ser interrompidas ainda que vitórias pontuais sejam obtidas. Este é o caso da luta das
                    compositoras – em especial, das latino-americanas – contra a invisibilidade, provocada pelo sistema
                    patriarcal conservador em que o continente segue imerso, desde a primeira colonização.
                    <br><br>
                    Mulheres sempre atuaram na transformação e busca por melhores condições de vida em sociedade, seja
                    através das artes ou de outras manifestações. O apagamento destas contribuições tem justificativas
                    diversas, algumas das quais abordadas no texto que apresentei por ocasião do III Coloquio de
                    Ibermúsicas sobre Investigación Musical [vide abaixo], realizado no Chile em 2017 e disponibilizado
                    pela compositora Silvia de Lucca neste brilhante site. Silvia se insere no contexto das lutadoras
                    brasileiras que traduzem em música suas visões de mundo, transpondo as barreiras da invisibilidade
                    no cotidiano de suas profissões. É para mim uma imensa honra ter o citado texto divulgado em seu
                    espaço intitulado ‘Reflexão’.”
                    <br><br>
                    Eliana Monteiro da Silva, em 08.01.2020
                </p>
            </div>
        </div>
        <br><br>
        <div>
            <iframe src="http://silviadelucca.art.br/wp-content/uploads/2020/01/Libro_de_Actas_3°_Coloquio_de_Investigacioìn_Musical-46-61.pdf" style="
                min-width: 80vw;
                min-height:800px;
                margin: 0 auto;
                display:block;" />
        </div>
    </div>
    <!-- Footer -->
    <?php require_once(trailingslashit(get_template_directory()) . 'components/footer.php'); ?>
</body>

</html>