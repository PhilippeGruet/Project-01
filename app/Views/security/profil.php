<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>
    <div class="row">

        <div class="col-md-3">
            <h3>Options :</h3>
            <a href="<?= $this->url('security_update') ?>">Modifier mes informations</a><br>
            <a href="<?= $this->url('cpanel_newArticle') ?>">Créer un article</a>

            <?php if ( $w_user['role'] == 'admin' || $w_user['role'] == 'writer' ): ?>
                <br><h3>Administration :</h3>
                <a href="<?= $this->url('cpanel_users') ?>">Liste des utilisateurs</a>
            <?php endif; ?>

        </div>

        <div class="col-md-9">
            <?= $w_user['lastname'] ?>
            <?= $w_user['firstname'] ?><br>
            <?= $w_user['email'] ?>
            <h3>Score :</h3>

        </div>
    </div>



    <p><?= isset( $message['error'] ) ? $message['error'] : "" ; ?></p>
<?php $this->stop('main_content') ?>
