<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Overhaul_of_electronic_system')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Overhaul of electronic system</h2>

        <p>Three fields of intervention :</p>

        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <p class="text-justify"><strong>Repairing of damaged materials,</strong> with checking of their correct operation.</p>
            <p class="text-justify"><strong>Overhaul of material</strong> by search for substitutes to the failed or obsolete elements, or even by re-design of some parts.</p>
            <p class="text-justify"><strong>Upgrading of these materials,</strong> by addition of new functions, improvement of the existing performances, or to make them compatible with the new standards.</p>

            <p class="text-justify">Our experience includes in particular the overhaul of sub-systems of the radar system for the French Army (ground and air), the development of new ultra high frequencies sourcesnfor the Air Force and testing simulators for the Tacan beacons.</p>
            <p>This extension of the lifespan of the materials is carried out :</p>
            <ul>
                <li>at a much lower cost than the replacement of these materials by new materials,</li>
                <li>while making the operation « transparent » for the user,</li>
                <li>by decreasing the necessary stock of spare parts,</li>
                <li>and by increasing to a significant degree the reliability of the material.</li>
            </ul>
        </div>

        <div class="col-md-9">
            <h3>To extend life time of the electronic systems</h3>
            <p class="text-justify">Strong of our experiment SEFTIM is able to renovate all radio electric tranmission equipments, as well as their ancillary devices (power supply units, associated testing facility) and this, whatever is the age, the origin, the state of maintenance, and the level of technical documentation available for the materials to be treated.</p>
        </div>
        <div class="col-md-3">

        </div>

    </div>
<?php else: ?>
    <div class="row">
        <h2>Rénovation des systèmes électroniques</h2>

        <p>Nous intervenons dans trois domaines :</p>

        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <p class="text-justify"><strong>Remise en état de matériel endommagé,</strong> avec vérification de leur bon fonctionnement.</p>
            <p class="text-justify"><strong>Rénovation de matériels</strong> par recherche de substituts aux éléments défaillants ou obsolètes, voire par reprise de conception de sous-ensembles.</p>
            <p class="text-justify"><strong>Evolution fonctionnelle de ces matériels,</strong> par ajout de fonctions nouvelles, par amélioration des performances existantes, ou encore pour les rendre compatibles avec les nouvelles normes.</p>

            <p class="text-justify">Notre expérience comprend notamment la rénovation des sous-ensembles du système radar de l’armée française (terre et air), le développement de nouvelles sources hyperfréquences pour le réseau de transmission de l’armée de l’air et la remise en condition des simulateurs de test des balises Tacan.</p>
            <p>Cette prolongation de la durée de vie des matériels est réalisée :</p>
            <ul>
                <li>à un coût très inférieur au remplacement de ces matériels par des matériels neufs,</li>
                <li>en rendant l’opération « transparente » pour l’utilisateur,</li>
                <li>en diminuant le stock de pièces de rechange nécessaires,</li>
                <li>en accroissant de façon significative la fiabilité du matériel.</li>
            </ul>
        </div>

        <div class="col-md-9">
            <h3>Prolonger la vie des systèmes électroniques</h3>
            <p class="text-justify">Forte de notre expérience, SEFTIM est capable de rénover tous matériel de transmission radioélectrique, ainsi que leurs accessoires d’utilisation (blocs d’alimentation, bancs de test associés), et ce, quels que soient l’âge, l’origine, l’état d’ entretien et le niveau de la documentation technique disponible sur les matériels à traiter.</p>
        </div>
        <div class="col-md-3">

        </div>

    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
