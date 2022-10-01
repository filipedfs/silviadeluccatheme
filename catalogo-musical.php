<?php

/**
 * Template Name: Silvia Catalogo Musical
 */
$filename = get_template_directory() . '/music-catalog.json';
$json = file_get_contents($filename);
$json_data = json_decode($json, true);
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
      <?php
      foreach ($json_data as $data) {
          $type = $data['type'];
          $type_text = $data['type_text']; ?>
        <button class="menu-category-item" onclick="changeCategory('<?= $type ?>')"><?= $type_text ?></button>
      <?php } ?>
  </div>
    <?php
    $i = 0;
    foreach ($json_data as $data) {
        $type = $data['type'];
        $items = $data['items'];
        ?>
      <div id="<?= $type ?>" class="category animated animatedFadeInUp fadeInUp" <?= ($i != 0) ? 'style="display:none;"' : '' ?>>
        <table class="musical-catalog-table">
          <thead>
          <tr>
            <th>Ano de Composição</th>
            <th>Título</th>
            <th>Intrumentação</th>
            <th>Duração</th>
            <th>Edição ou onde obter o material</th>
            <th class="hide-when-mobile">Observações<br />Text, estreia, intérpretes, gravação, prêmio</th>
          </tr>
          </thead>
          <tbody>
          <?php
          foreach ($items as $item) {
              $composition_year = $item['composition_year'];
              $title = $item['title'];
              $instrumentation = $item['instrumentation'];
              $duration = $item['duration'];
              $edition = $item['edition'];
              $observations = $item['observations'];
              ?>
            <tr>
              <td><?= $composition_year ?></td>
              <td><?= $title ?></td>
              <td><?= $instrumentation ?></td>
              <td><?= $duration ?></td>
              <td><?= $edition ?></td>
              <td class="hide-when-mobile"><?= $observations ?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
        <?php
        $i++;
    } ?>
</div>
<!-- Footer -->
<?php require_once(trailingslashit(get_template_directory()) . 'components/footer.php'); ?>
</body>
</html>
