<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Lightning_protection_training')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Lightning Protection Training</h2>

        <a href="<?= $this->url("default_training_3") ?>">See the training program</a>
    </div>
<?php else: ?>
    <div class="row">
        <h2>Formations protection foudre</h2>

        <a href="<?= $this->url("default_training_3") ?>">Voir le menu des Formations</a>
    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
