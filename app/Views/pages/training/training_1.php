<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Qualifoudre_Seminar/Training')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Qualifoudre Seminar / Training</h2>

        <h3>Our Scheduled Qualifoudre seminar / training:</h3>

        <p class="text-justify">As part of Qualifoudre v3.3 reference document practicable since 2014, July, Seftim developped an adapted training program</p>
        <p class="text-justify">Please contact us (<a href="mailto:pascale.clement@seftim.fr">Pascale CLEMENT</a>) for fees and any other information:</p>

        <p class="text-justify"><strong>June 28/29 2016- Qualifoudre training – Module 1</strong></p>
        <p>Initial training :</p>
        <a href="#">Download</a>

        <p class="text-justify"><strong>April 13/14 and September 15/16 2016 – Qualifoudre training – Module 2</strong></p>
        <p>Detailed training :</p>
        <a href="#">Download</a>

    </div>
<?php else: ?>
    <div class="row">
        <h2>Formations Qualifoudre</h2>

        <p class="text-justify">Dans le cadre du référentiel Qualifoudre V3.3 applicable depuis juillet 2014, SEFTIM a développé un programme de formation adapté.</p>
        <p class="text-justify">N’hésitez pas à nous contacter (<a href="mailto:pascale.clement@seftim.fr">Pascale CLEMENT</a>) pour tarifs ou autres renseignements:</p>

        <p class="text-justify"><strong>28/29 juin 2016 – Formation Qualifoudre – Module 1</strong></p>
        <p>Formation intiale :</p>
        <a href="#">Télécharger</a>

        <p class="text-justify"><strong>13/14 avril et 15/16 septembre 2016 – Formation Qualifoudre – Module 2</strong></p>
        <p>Formation approfondie :</p>
        <a href="#">Télécharger</a>
    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
