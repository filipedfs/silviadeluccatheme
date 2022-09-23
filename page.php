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
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
          <h3 class="subtitle"><?= get_the_title() ?></h3>
          <div class="basic-text">
              <?= get_the_content(); ?>
          </div>
        <?php }
    }
    ?>
</div>
<!-- Footer -->

<?php require_once(trailingslashit(get_template_directory()) . 'components/footer.php'); ?>
</body>
</html>
