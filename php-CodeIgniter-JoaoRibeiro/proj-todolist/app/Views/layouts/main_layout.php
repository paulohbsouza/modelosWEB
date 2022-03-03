<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?= base_url('assets/bootstrap.min.css') ?>" />
    <title>Todo List!</title>
</head>
<body>

    <?= $this->renderSection('conteuuudo') ?>

    <hr/>
    <footer class="container">
        <div class="row">
            <div class="col text-center">
                TODO List &copy; <?= date('Y') ?>
            </div>
        </div>
    </footer>

    <script src="<?= base_url('assets/jquery.slim.min.js') ?>"></script>
    <script src="<?= base_url('assets/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/bootstrap.min.js') ?>"></script>

</body>
</html>