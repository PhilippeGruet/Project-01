<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Training_list')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Training list</h2>
        <p class="text-justify">These trainings are part of our training list and can be performed depedning on the demand.</p>
        <p class="text-justify">Please contact us (<a href="mailto:pascale.clement@seftim.fr">Pascale CLEMENT</a>) for fees and any other information:</p>

        <p><strong>New standards</strong></p>
        <p class="text-justify">A presentation of main points of the new standards in order to obtain a qualification or upgrade knowledge</p>
        <p><a href="#">Download (FR)</a></p>

        <p><strong>Lightning risks analysis</strong></p>
        <p class="text-justify">A presentation about the methodology and means to resolve problems, illustrated by examples. Comparison betwen Ed1. and Ed.2 of the standard is provided.</p>
        <p><a href="#">Download (FR)</a></p>

        <p><strong>Lightning Technical studies</strong></p>
        <p class="text-justify">How to fill requirements of technical studies for direct lightning protection and for surge protective devices</p>
        <p><a href="#">Download (FR)</a></p>

    </div>
<?php else: ?>
    <div class="row">
        <h2>Formations sur catalogue</h2>
        <p class="text-justify">Ces formations sont des formations sur catalogue qui peuvent être réalisées en fonction des demandes</p>
        <p class="text-justify">N’hésitez pas à nous contacter (<a href="mailto:pascale.clement@seftim.fr">Pascale CLEMENT</a>) pour tarifs ou autres renseignements:</p>

        <p><strong>Nouvelles normes foudre</strong></p>
        <p class="text-justify">Une présentation des points principaux des nouvelles normes dans une objectif de mise à jour de ses connaissances.</p>
        <p><a href="#">Télécharger</a></p>

        <p><strong>Analyse du Risque Foudre selon NF EN 62305-2</strong></p>
        <p class="text-justify">Une présentation de la méthodologie et des moyens de résoudre les problèmes, illustrée par des exemples. Une comparaison des 2 versions d ela norme (Ed.1 et Ed.2) est incluse.</p>
        <p><a href="#">Télécharger</a></p>

        <p><strong>Etudes Techniques foudre</strong></p>
        <p class="text-justify">Comment remplir les exigences des études techniques pour la protection foudre directe et pour les parafoudres.</p>
        <p><a href="#">Télécharger</a></p>

    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
