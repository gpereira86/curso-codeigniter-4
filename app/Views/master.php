<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <title><?php echo $title ?? 'Curso de CodeIgniter 4';?></title>
</head>
<body>

<?= $this->renderSection('css') ?>

<?= $this->include('partials/menu') ?>

<?= $this->renderSection('content') ?>

<?= $this->renderSection('javascript') ?>

</body>
</html>