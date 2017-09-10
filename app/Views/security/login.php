<?php $this->layout('layout', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <form method="POST">
                <div class="form-group">
                    <label for="username"><?= getApp()->getLocale('email');?> :</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $username ?>">
                </div>

                <div class="form-group">
                    <label for="password"><?= getApp()->getLocale('password');?> :</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <button class="btn btn-default"><?= getApp()->getLocale('log_in');?></button>
                    <a href="<?= $this->url('security_forget'); ?>" class="pull-right"><?= getApp()->getLocale('forgot_password');?></a>
                </div>

                <div class="form-group">
                    <a href="<?= $this->url('security_register') ?>" class="btn btn-primary"><?= getApp()->getLocale('register');?></a>
                </div>
            </form>

            <p><?= isset( $message['error'] ) ? $message['error'] : "" ; ?></p>

        </div>
    </div>
<?php $this->stop('main_content') ?>
