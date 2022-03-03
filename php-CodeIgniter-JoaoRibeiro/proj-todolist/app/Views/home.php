<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('conteuuudo') ?>

<header class="container">
    <div class="row">
        <div class="col p-3">
            <h3 class="">TODO List!</h3>
        </div>
        <div class="col p-3 text-right">
            <a href="<?= site_url('main/newJob') ?>" class="btn btn-primary">New</a>
        </div>
    </div>
</header>
<hr/>

<?php if (count($jobs) == 0) : ?>
    <p class="text-center">Não existem tarefas.</p>
<?php else : ?>
    <table class="table table-striped table-sm">
        <thead class="thead-dark">
        <tr>
            <th class="text-center">Tarefa</th>
            <th class="text-center">Data de criação</th>
            <th class="text-center">Data de finalização</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($jobs as $job) : ?>
            <tr>
                <td class="text-center"><?= $job->job ?></td>
                <td class="text-center"><?= $job->datetime_created ?></td>
                <td class="text-center"><?= $job->datetime_finished ?></td>
                <td>[ações]</td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <hr/>
    <p class="text-center">Nº de tarefas: <strong><?= count($jobs) ?></strong></p>

<?php endif; ?>

<?= $this->endSection() ?>
