<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SuperCarpi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('public/assets/css/miestilo.css') ?>">
  </head>

<body>

  <?= view('components/cabecera')?>
  <?= $ini ?? '' ?>
  
 
    <?= $car ?? '' ?>
    <?= $card ?? '' ?>
    <?= $who ?? '' ?>
    <?= $comerc ?? '' ?>
    <?= $contact ?? ''?>
    <?= $term ?? ''?>
    
  <?= view('components/footer')?>

    <script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>
