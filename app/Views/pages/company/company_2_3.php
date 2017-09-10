<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Electronic_engineering')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Electronic engineering</h2>

        <p>Three fields of action :</p>

        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <h3>Transmission and communication systems :</h3>
            <p>Design and set-up of « missing links » for low frequency systems up to microwawe and infrared frequencies : acquisition, recognition or reshaping decices for signals, adaptation interfaces, modulators and demodulators, transceivers.</p>
        </div>

        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <h3>Videos systems :</h3>
            <p>Development of multiplexer and demultiplexer equipment for recording, transmission or monitoring systems for video applications : enable to increase the line capacity of existing installations or to simplify their extension.</p>
        </div>

        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <h3>Ancillary devices and testing equipments :</h3>
            <p>Development of accessories ti widen capacity of use of some equipments or to improve their operation : airborne power supply units, portable hihg voltage supply units, battery chargers, test facilities.</p>
        </div>

        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <h3>To modify, to increase, to improve capacity of electronic systems</h3>
            <p>Equipped with a team of qualified and experienced engineers and technicians, SEFTIM is able to handle quickly and successfully various developments, as testified by our references.</p>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <h2>Ingénierie électronique</h2>

        <p>On compte trois domaines d’action :</p>

        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <h3>Moyens de communication et de transmission :</h3>
            <p>Conception et réalisation de « chaînons manquants » pour des systèmes basse fréquence jusqu’aux systèmes hyperfréquence et infrarouge :</p>
            <p>Dispositifs d’acquisition, de reconnaissance ou de remise en forme de signaux, interfaces d’adaptation, modulateurs et démodulateurs, émetteurs ou récepteurs.</p>
        </div>

        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <h3>Moyens vidéo :</h3>
            <p>Réalisation des dispositifs de multiplexage et de démultiplexage pour les systèmes de surveillance, de transmission ou d’enregistrement vidéo :</p>
            <p>Permettent d’accroître la capacité de transmission d’installations existantes ou d’en simplifier l’extension.</p>
        </div>

        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <h3>Accessoires d’utilisation et moyens de tests :</h3>
            <p>Développement d’accessoires d’utilisation pour élargir les capacités d’emploi de certains matériels ou pour améliorer leur fonctionnement :</p>
            <p>Alimentations de bord, alimentations haute tension transportables, chargeurs, équipement de test.</p>
        </div>

        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <h3>Modifier, accroître, améliorer, la capacité des systèmes électroniques</h3>
            <p>Dotée d’une équipe d’ingénieurs et techniciens qualifiés et expérimentés, SEFTIM est capable d’aborder rapidement et avec succès des réalisations très diverses, comme en témoignent nos références.</p>
        </div>
    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
