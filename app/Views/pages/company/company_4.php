<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Your_main_contacts')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Your main contacts</h2>

    </div>
<?php else: ?>
    <div class="row">
        <h2>Vos principaux contacts</h2>

    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
