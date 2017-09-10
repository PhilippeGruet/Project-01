<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <form method="POST">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="lastname"><?= getApp()->getLocale('lastname');?> :</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $lastname ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="firstname"><?= getApp()->getLocale('firstname');?> :</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $firstname ?>">
                        <?php if ( isset($messages["firstname"]) ) echo "<span class=\"text-danger\">".$messages["firstname"]."</span>"; ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email"><?= getApp()->getLocale('email');?> :</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>">
                    <?php if ( isset($messages["email"]) ) echo "<span class=\"text-danger\">".$messages["email"]."</span>"; ?>
                </div>

                <div class="form-group">
                    <label for="password"><?= getApp()->getLocale('password');?> :</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <?php if ( isset($messages["password"]) ) echo "<span class=\"text-danger\">".$messages["password"]."</span>"; ?>
                </div>

                <div class="form-group">
                    <label for="cfpassword"><?= getApp()->getLocale('cfpassword');?> :</label>
                    <input type="password" class="form-control" id="cfpassword" name="cfpassword">
                    <?php if ( isset($messages["cfpassword"]) ) echo "<span class=\"text-danger\">".$messages["cfpassword"]."</span>"; ?>
                </div>

                <button class="btn btn-default"><?= getApp()->getLocale('sign_up');?></button>
            </form>

            <?php if ( isset($messages["success"]) ) echo "<span class=\"text-success\">".$messages["success"]."</span>"; ?>
        </div>
    </div>
<?php $this->stop('main_content') ?>
