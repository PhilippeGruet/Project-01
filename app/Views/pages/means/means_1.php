<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Our_means_for_studies_and_development')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Our means for studies and development</h2>

        <p class="text-justify">Since its creation in 1969, SEFTIM acquired an expertise in the search for original solutions and their implementations to the best times and costs.</p>

        <p class="text-justify">We have modern means for studies and development, of wich :</p>

        <div class="col-md-2">
            <img src="<?= $this->assetUrl("img/pages/means/cage 10 ter.jpg"); ?>" class="img-thumbnail img-responsive" alt="Faraday Cage">
        </div>
        <div class="col-md-8">
            <ul>
                <li>electronic laboratory</li>
                <li>workshop</li>
                <li>Faraday cage, climatic chambers</li>
                <li>electric, electronic, telecommunication measuring equipments</li>
                <li>computers for simulation and CAD.</li>
            </ul>
        </div>
        <div class="col-md-2">
            <img src="<?= $this->assetUrl("img/pages/means/Bureau_CAO2.jpg"); ?>" class="img-thumbnail img-responsive" alt="CAO Desk">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p><strong>SEFTIM is certified ISO 9001 – version 2008 and Qualifoudre</strong></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="<?= $this->assetUrl("img/pages/means/qualifoudre.gif"); ?>" class="img-thumbnail img-responsive" alt="Qualifoudre">
                <div class="caption text-center"><small>Seftim is certified by Qualifoudre since 2008</small></div>
            </div>
        </div>
        <div class="col-md-8">
            <p class="text-justify">SEFTIM has experience in fields as varied as the military applications (DGA…), telecommunication stations (FranceTelecom…), radars (Thales, STNA, Onera…), computer centers (Air France, Crédit Lyonnais…) and general public applications (La Villette scientific park, Eiffel Tower, Disneyland Paris…).</p>
        </div>
        <div class="col-md-2">
            <img src="<?= $this->assetUrl("img/pages/means/brevet2.jpg"); ?>" class="img-thumbnail img-responsive" alt="Certificate">
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <img src="<?= $this->assetUrl("img/pages/means/bvi.jpg"); ?>" class="img-thumbnail img-responsive" alt="Bureau Veritas Certification">
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <h2>Nos moyens</h2>

        <p class="text-justify">Depuis sa création en 1969, SEFTIM a acquis une expertise dans la recherche de solutions originales, et la conduite de réalisations aux meilleurs délais et coûts.</p>

        <p class="text-justify">Nous disposons de moyens modernes d’études et de développement, dont :</p>

        <div class="col-md-2">
            <img src="<?= $this->assetUrl("img/pages/means/cage 10 ter.jpg"); ?>" alt="Cage Faraday">
        </div>
        <div class="col-md-8">
            <ul>
                <li>laboratoire d’électronique</li>
                <li>atelier de fabrication</li>
                <li>cage de Faraday, enceintes climatiques</li>
                <li>parc d’appareils de mesure électrique, électronique, télécommunications</li>
                <li>moyens informatiques de simulation et CAO.</li>
            </ul>
        </div>
        <div class="col-md-2">
            <img src="<?= $this->assetUrl("img/pages/means/Bureau_CAO2.jpg"); ?>" class="img-thumbnail img-responsive" alt="Burea CAO">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p><strong>SEFTIM est certifiée ISO 9001 et Qualifoudre 3.3</strong></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="<?= $this->assetUrl("img/pages/means/qualifoudre.gif"); ?>" class="img-thumbnail img-responsive" alt="Qualifoudre">
                <div class="caption text-center"><small>Seftim est certifié Qualifoudre depuis Décembre 2008</small></div>
            </div>
        </div>
        <div class="col-md-8">
            <p class="text-justify">SEFTIM a de l’expérience dans des domaines aussi variées que les applications militaires (DGA…), les stations de télécommunications (France Telecom…), les radars (Thales, STNA, Onera…), les centres informatiques (Air France, Crédit Lyonnais…) et des applications orientées vers le grand public (Parc de la Villette, Tour Eiffel, Disneyland Paris…).</p>
        </div>
        <div class="col-md-2">
            <img src="<?= $this->assetUrl("img/pages/means/brevet2.jpg"); ?>" class="img-thumbnail img-responsive" alt="Brevet">
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <img src="<?= $this->assetUrl("img/pages/means/bvi.jpg"); ?>" class="img-thumbnail img-responsive" alt="Bureau Veritas Certification">
        </div>
    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
