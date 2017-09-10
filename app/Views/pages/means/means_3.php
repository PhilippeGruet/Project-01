<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:JUPITER_2.0_&_JUPITER_2.2')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>JUPITER 2.0 & JUPITER 2.2</h2>

        <h4>Introduction</h4>

        <p class="text-justify">Software for lightning risks analysis according to CEI/EN 62305</p>

        <p class="text-justify">Risks due to lightning shock on structures aren’t only binded to lightning strike on those structures but also to  impulsion (voltage peak, power shock) generated  mainly by near lightning strike.</p>

        <p class="text-justify">JUPITER estimates lightning risks in every facet and offer protection’s solution including lightning conductor  according to international standard (CEI) and European standard (EN), CEI/EN 62305.</p>

        <p class="text-justify">Besides, according to international standard CEI 60364, each studying office as electrical & electronic systems installer have to estimate voltage peak risks and  adopt adapted solution measures when it’s necessary.</p>

        <p class="text-justify">JUPITER is useful for everyone working in electricity field.</p>

        <p class="text-justify">JUPITER help you to make the good choice and show you, even if risks evaluation is not done, how to select an efficient lightning conductor system.</p>

        <h4>Version 2.0</h4>

        <p>The updates of this new version are :</p>

        <ul>
            <li>Possibility to use real structure dimension with a simple and integrated design tool.</li>
            <li>Possibility to describe real lines (overhead-underground ,  with transformer, etc.)</li>
            <li>Simplified processing of multiples areas.</li>
        </ul>

        <a href="#">Update's detail</a>

    </div>
<?php else: ?>
    <div class="row">
        <h2>JUPITER 2.0 et JUPITER 2.2</h2>

        <h4>Présentation</h4>

        <p class="text-justify">Logiciel pour l’analyse du risque foudre selon CEI/EN 62305</p>

        <p class="text-justify">Le risque dû aux chocs de foudre pour les structures n’est pas seulement lié au coup de foudre sur les dites structures mais également aux impulsions (surtensions et courants de choc) générés principalement par des coup de foudre proche de la structure.</p>

        <p class="text-justify">JUPITER évalue le risque foudre dans tous ses aspects et propose des solutions de protection y compris les parafoudres en accord avec les normes internationales (CEI) et européennes (EN), CEI/EN 62305.</p>

        <p class="text-justify">En outre, en accord avec la norme internationale CEI 60364, tous les bureau d’étude comme les installateurs de systèmes électriques et électroniques doivent évaluer le risque de surtension et adopter quand c’est nécessaire les mesures de protection adaptées.</p>

        <p class="text-justify">JUPITER est donc utile pour quiconque travaillant dans le domaine de l’électricité.</p>

        <p class="text-justify">JUPITER vous aide à prendre la bonne décision et vous montre, même si l’évaluation du risqué n’est pas faite, comment sélectionner un système de parafoudre performant.</p>

        <h4>Version 2.0</h4>

        <p>Les évolutions de la nouvelle version du logiciel sont :</p>

        <ul>
            <li>Possibilité d’utiliser les véritables dimensions de la structure avec un outil de design simple et intégré dans le cadre de la dimension de la structure.</li>
            <li>Possibilité de décrire les véritables lignes (aéro-souterraine, avec transformateur de ligne, … )</li>
            <li>Traitement simplifié des zones multiples.</li>
        </ul>

        <a href="#">Voir les évolutions dans le détail</a>

    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
