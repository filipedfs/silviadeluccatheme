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
  <h3 class="subtitle">Artigos</h3>
  <br><br>
  <hr />
  <br><br>
  <p class="basic-text">
    [Em processo de atualização]
  </p>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
          <div class="article-card">
            <h2 class="subtitle">
              <a class="subtitle subtitle-small" href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a>
            </h2>

            <p class="basic-text">
                <?= get_the_excerpt(); ?>
            </p>

            <div class="read-more">
              <i class="bi bi-file-text"></i>
              <a href="<?= get_permalink(); ?>">Leia mais</a>
            </div>
          </div>
        <?php }
    }
    ?>
    <?php
    $prev_text = sprintf(
        '%s',
        '<span aria-hidden="true">&larr;</span>'
    );
    $next_text = sprintf(
        '%s',
        '<span aria-hidden="true">&rarr;</span>'
    );
    $posts_pagination = get_the_posts_pagination(array(
        'mid_size' => 1,
        'prev_text' => 'Mais recentes',
        'next_text' => 'Mais antigos',
        'screen_reader_text' => 'Navegação',

    ));
    echo $posts_pagination;
    ?>
  <style>
    h2.screen-reader-text {
      display: none;
    }

    h2.subtitle {
      margin-bottom: 0.5em;
    }

    nav.navigation.pagination {
      text-align: center;
      margin-top: 3em;
    }

    .page-numbers {
      margin-right: 0.5em;
      margin-left: 0.5em;
      color: #FF4500;
      background-color: white;
      padding: 0.25em 0.6em;
      border-radius: 5px;
    }

    .page-numbers:hover {
      background-color: #FF4500;
      color: white;
    }

    span.page-numbers {
      background-color: #FF4500;
      color: #FFF;
    }

    span.page-numbers.dots {
      background-color: white;
      color: #FF4500;
    }

    a.prev.page-numbers {
      margin-right: 1em;
      background-color: unset;
      color: #FF4500;
    }

    a.next.page-numbers {
      margin-left: 1em;
      background-color: unset;
      color: #FF4500;
    }
  </style>
</div>
<!-- Footer -->
<?php require_once(trailingslashit(get_template_directory()) . 'components/footer.php'); ?>
</body>
</html>
