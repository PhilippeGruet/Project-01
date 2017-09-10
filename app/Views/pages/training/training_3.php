<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Seminar/Training_on_demand')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Seminar / Training on demand</h2>

        <p class="text-justify">SEFTIM has trainings on catalogue but also can make trainings on demand.</p>
        <p class="text-justify">Please contact us (<a href="mailto:pascale.clement@seftim.fr">Pascale CLEMENT</a>) for fees and any other information:</p>

        <p>A few example of possible trainings :</p>
        <p><strong>Lightning risks analysis</strong></p>
        <p class="text-justify">A presentation about methdolies and means to resolve problems, illustrated by examples</p>
        <a href="">Download (FR)</a><br><br>

        <p><strong>New standards about lightning</strong></p>
        <p class="text-justify">A presentation of main points of the new standards in order to qualifying or upgrade her knowledges</p>
        <a href="">Download (FR)</a><br><br>

        <p><strong>Lightning Technical studies</strong></p>
        <p class="text-justify">How to fill requirements of technical studies for direct lightning protection and for lightning arresters</p>
        <a href="">Download (FR)</a><br><br>

        <p><strong>Lightning earthing</strong></p>
        <p class="text-justify">How to realize and measure a lightning earthing system</p>
        <a href="">Download (FR)</a><br><br>

        <p><strong>Lightning protection components</strong></p>
        <p class="text-justify">How to choose components ? Why standards about components</p>
        <a href="">Download (FR)</a><br><br>

    </div>
<?php else: ?>
    <div class="row">
        <h2>Formations à la carte</h2>

        <p>SEFTIM propose des formations sur catalogue et peut également bâtir des formations à la carte.</p>
        <p class="text-justify">N’hésitez pas à nous contacter (<a href="mailto:pascale.clement@seftim.fr">Pascale CLEMENT</a>) pour tarifs ou autres renseignements:</p>

        <p>Quelques examples de formations disponibles :</p>
        <p><strong>Analyse du Risque Foudre selon NF EN 62305-2</strong></p>
        <p class="text-justify">Une présentation de la méthodologie et des moyens de résoudre les problèmes, illustrée par des exemples. Une introduction sur les nouveautés de la norme CEI et EN 62305-2 est incluse.</p>
        <a href="">Télécharger</a><br><br>

        <p><strong>Nouvelles normes foudre</strong></p>
        <p class="text-justify">Une présentation des points principaux des nouvelles normes dans une objectif de qualification ou de mise à jour de ses connaissances</p>
        <a href="">Télécharger</a><br><br>

        <p><strong>Etudes techniques</strong></p>
        <p class="text-justify">Comment remplir les exigences des études techniques pour la protection foudre directe et pour les parafoudres</p>
        <a href="">Télécharger</a><br><br>

        <p><strong>Prises de terre foudre</strong></p>
        <p class="text-justify">Comment réaliser et mesurer une prise de terre foudre</p>
        <a href="">Télécharger</a><br><br>

        <p><strong>Composant protection foudre</strong></p>
        <p class="text-justify">Comment choisir les composants, pourquoi existe-t-il des normes sur les composants</p>
        <a href="">Télécharger</a><br><br>

    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
