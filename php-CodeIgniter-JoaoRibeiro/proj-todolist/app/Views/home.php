
<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('conteuuudo') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="p-3">Todo List!</h3>
        </div>
        <div class="col text-right">
            <a href="<?= site_url('main/newJob') ?>" class="btn btn-primary">New</a>
        </div>
    </div>
</div>

<hr/>

<?= $this->endSection() ?>
