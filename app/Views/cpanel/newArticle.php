<?php $this->layout('layout', ['title' => 'Créer un article']) ?>

<?php $this->start('main_content') ?>
    <div class="row">
        <div class="container">
            <h2>Interface de création d'article :</h2><br>
            <form method="POST">
                <div class="form-group">
                    <label for="title">Titre de l'article :</label>
                    <input type="text" class="form-control" name="title" id="title" value="<?=$title?>">
                    <?php if ( isset($messages["title"]) ) echo "<span class=\"text-danger\">".$messages["title"]."</span>"; ?>
                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="articleLang">Langue de l'article :</label>
                        <select class="form-control" name="articleLang" id="articleLang">
                            <option <?= ($articleLang == "fr")? "selected": "";?> value="fr">Français</option>
                            <option <?= ($articleLang == "en")? "selected": "";?> value="en">English</option>
                        </select>
                    </div>

                    <div class="form-group col-md-9">
                        <label>Autre version de l'article :&nbsp;</label>
                        <select name="originArticle" class="form-control selectpicker" title="Si vous écrivez la traduction d'un article, selectionnez le dans la liste" data-live-search="true">
                        <?php foreach ($trans_articles as $key => $trans_article): ?>
                            <?php $date = new DateTime($trans_article['date'])?>
                            <option <?= ($originArticle == $trans_article['id_article'])? "selected": ""; ?> value="<?= $trans_article['id_article']?>" data-content="<strong>[<?=$trans_article['lang']?>]</strong> <?= $trans_article['name']?> <?= $date->format('d-m-Y')?>"></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div id="datepicker-container" class="form-group col-md-3">
                        <label class="control-label" for="date">Date de l'article :</label>
                        <input type="text" class="form-control" name="date" id="date" value="<?= date("d/m/Y") ?>">
                    </div>
                </div>

                <div id="contentToDuplicate">
                    <div class="row paragraph-content">
                        <h3>Paragraphe 1 :</h3>
                        <div class="form-group col-md-8">
                            <label for="text1">Texte :</label>
                            <textarea class="form-control vresize" rows="6" id=text1 name="1[text]"><?=$paragraphs[1]['text']?></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="img1">Illustration :</label>
                            <input type="text" class="form-control" id="img1" name="1[img]" value="<?=$paragraphs[1]['img']?>">
                        </div>
                    </div>
                    <label>Format :</label>
                    <div class="row">
                        <?php for($i = 1; $i <= 6; $i++): ?>
                            <div class="col-md-2 col-xs-4">
                                <label>
                                    <div class="thumbnail">
                                        <img src="<?= $this->assetUrl("img/format/format$i.png"); ?>" alt="format<?=$i?>">
                                        <div class="caption">
                                            <input <?=($paragraphs[1]['format'] == $i)? "checked": "";?> type="radio" name="1[format]" value="<?=$i?>">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        <?php endfor; ?>
                    </div><br>
                </div>

                <?php foreach ($paragraphs as $key => $paragraph): ?>
                    <?php if ($key != 1): ?>
                    <div id="paragraph<?=$key?>">
                        <div class="row paragraph-content">
                            <h3>Paragraphe <?=$key?> :</h3>
                            <div class="form-group col-md-8">
                                <label for="text<?=$key?>">Texte :</label>
                                <textarea class="form-control vresize" rows="6" id="text<?=$key?>" name="<?=$key?>[text]"><?=$paragraphs[$key]['text']?></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="img<?=$key?>">Illustration :</label>
                                <input type="text" class="form-control" id="img<?=$key?>" name="<?=$key?>[img]" value="<?=$paragraphs[$key]['img']?>">
                            </div>
                        </div>
                        <label>Format :</label>
                        <div class="row">
                            <?php for($j = 1; $j <= 6; $j++): ?>
                                <div class="col-md-2 col-xs-4">
                                    <label>
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/format$j.png"); ?>" alt="format<?=$j?>">
                                            <div class="caption">
                                                <input <?=($paragraphs[$key]['format'] == $j)? "checked": "";?> type="radio" name="<?=$key?>[format]" value="<?=$j?>">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            <?php endfor; ?>
                        </div><br>
                    </div>
                    <?php endif; ?>
                <?php endforeach; ?>

                <div class="row" id="appendBefore">
                    <div class="container">
                        <button type="button" id="addParagraph" class="btn btn-default">Ajouter un paragraphe</button>
                        <button type="button" id="deleteParagraph" class="btn btn-danger">Retirer le dernier paragraphe</button>
                    </div>
                </div>

                <div class="row">
                    <div class="container">
                        <button type="submit" class="btn btn-success center-block">Valider</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
<?php $this->stop('main_content') ?>


<?php $this->start('css') ?>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap-select.min.css') ?>">
<?php $this->stop('css') ?>


<?php $this->start('js') ?>
    <script src="<?= $this->assetUrl('js/bootstrap-select.min.js'); ?>"></script>
    <script src="<?= $this->assetUrl('js/bootstrap-datepicker.fr.min.js'); ?>"></script>
    <script src="<?= $this->assetUrl('js/newArticle.js'); ?>"></script>
<?php $this->stop('js') ?>
