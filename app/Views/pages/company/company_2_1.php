<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Electromagnetic_compatibility')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Electromagnetic compability</h2>

        <p>Four spheres of activities :</p>

        <h3>Consultancy advice :</h3>

        <p>Elaboration of normative documents, qualification of materials, development of technical specifications, implementation of standard, tests.</p>

        <h3>Development and manufacturing of specific devices :</h3>

        <p>Filters, shielding, surge voltage limiters, surge protective devices, lightning strike counter, impulse counters, lightning protection systems.</p>

        <h3>Study and set-up :</h3>

        <p>Protection of sites, immunity and protection of electric and electronic systems.</p>

        <h3>Assistance to building owner for contracting follow-up :</h3>

        <p>Working site control, control on site of equipments, earthing measurement at low and high frequency.</p>

        <p>We carry out protection against all kinds of electromagnetic, aggressions : lightning industrial noises electrostatic discharges, radio electric interferences, electromagnetic impulses.</p>

        <h3>Protect the electronic systems</h3>

        <p>The many references acquired by SEFTIM testify to its capacity to intervene in all the stagess of the projects :</p>

        <ul>
            <li>Field or file study of existing installations</li>
            <li>Riskassessment</li>
            <li>Definition of the means to implement</li>
            <li>Drafting of technical specification</li>
            <li>Issuance of invitations to tender</li>
            <li>Evaluation of the received offers</li>
            <li>Analysis and installation of equipments</li>
            <li>Certification of the installed system</li>
            <li>Maintenance of the installation</li>
        </ul>
    </div>

<?php else: ?>
    <div class="row">
        <h2>Compatibilité électromagnétique</h2>

        <p>Il y a quatre domaines :</p>

        <h3>Conseil :</h3>

        <p>Elaboration de documents normatifs, qualification des matériels, élaboration de spécifications techniques de besoins, mise en oeuvre de normes, essais.</p>

        <h3>Développement et fabrication de dispositifs spécifiques :</h3>

        <p>Filtres, blindage, écrêteurs, parafoudres, compteurs de coups de foudre, compteur d’impulsions, paratonnerres.</p>

        <h3>Etude et réalisation :</h3>

        <p>Protection de sites, insensibilisation et protection de systèmes électriques et électroniques.</p>

        <h3>Assistance à maître d’ouvrage pour la conduite des travaux :</h3>

        <p>Suivi de chantier, contrôle sur site des équipements, mesure de terre en basse et haute fréquence.</p>

        <p>Nous réalisons la protection contre les agressions électromagnétiques de tous ordres : foudre, parasites industriels, décharges électrostatiques, pollution radioélectrique, IEM.</p>

        <h3>Protéger les systèmes électroniques</h3>

        <p>Les nombreuses références acquises par SEFTIM témoignent de sa capacité à intervenir dans toutes les étapes des projets :</p>

        <ul>
            <li>Etude de l’existant sur dossier ou sur le terrain</li>
            <li>Analyse du risque</li>
            <li>Définition des moyens à mettre en oeuvre</li>
            <li>Rédaction d’un cahier des charges</li>
            <li>Lancement de consultations</li>
            <li>Dépouillement des offres reçues</li>
            <li>Réception et installation de matériels</li>
            <li>Validation industrielle de la réalisation</li>
            <li>Maintenance de l’installation</li>
        </ul>
    </div>
<?php endif; ?>

<?php $this->stop('main_content') ?>
