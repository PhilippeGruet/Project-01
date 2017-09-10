<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Our_solutions')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Our Solutions</h2>
        <ul>
            <li>Electric and magnetic field portable generator – <a href="#">Documentation</a></li>
            <li>Lightning conductor dedicated to radar protection’s – <a href="#">Documentation</a></li>
            <li>Lightning Stroke Counter
                <ul>
                    <li>CI-01S – <a href="#">Documentation</a></li>
                    <li>CCF-3 – <a href="#">Documentation</a></li>
                    <li>Emétteur CI-DL – <a href="#">Documentation</a></li>
                    <li>Récépteur BCI-DL – <a href="#">Documentation</a></li>
                    <li>CCF-25 – <a href="#">Documentation</a></li>
                    <li>CCF-50 – <a href="#">Documentation</a></li>
                </ul>
            </li>
            <li>Sarbe G2R : Personnal detection beacon – <a href="#">Documentation</a></li>
            <li>Headlight command for chopers
                <ul>
                    <li>Standard – <a href="#">Documentation</a></li>
                    <li>mini – <a href="#">Documentation</a></li>
                </ul>
            </li>
            <li>Ligthning risk analyse software : JUPITER – <a href="http://www.software-jupiter.com/index.htm" target="_blank" rel="external">Website</a> – <a href="mailto:info@seftim.fr">Contact by email</a></li>
        </ul>
    </div>
<?php else: ?>
    <div class="row">
        <h2>Nos solutions</h2>

        <p class="text-justify">Quand les matériels nécessaires n’existent pas sur le marché SEFTIM fort de sa compétence électronique et de son expérience peut le développer. Ci-dessous une liste de matériels développés pour des besoins divers.</p>
        <ul>
            <li>Générateur de champ magnétique et électrique portable – <a href="#">Documentation</a></li>
            <li>Paratonnerre TRANSRAD dédié à la protection des radars – <a href="#">Documentation</a></li>
            <li>Compteur de coup de foudre

                <ul>
                    <li>CI-01S – <a href="#">Documentation</a></li>
                    <li>CCF-3 – <a href="#">Documentation</a></li>
                    <li>A fibre optique : Emétteur CI-DL – <a href="#">Documentation</a></li>
                    <li>A fibre optique : Récépteur BCI-DL – <a href="#">Documentation</a></li>
                    <li>CCF-25 – <a href="#">Documentation</a></li>
                    <li>CCF-50 – <a href="#">Documentation</a></li>
                </ul>
            </li>
            <li>Sarbe G2R : Balise de détection personnelle pour avion – <a href="#">Documentation</a></li>
            <li>Commande de phares pour hélicoptères
                <ul>
                    <li>Standard – <a href="#">Documentation</a></li>
                    <li>mini – <a href="#">Documentation</a></li>
                </ul>
            </li>
            <li>Logiciel d’Analyse de Risques Foudre : JUPITER – <a href="http://www.software-jupiter.com/index.htm" target="_blank" rel="external">Site web</a> – <a href="mailto:info@seftim.fr">Nous contacter par mail</a></li>
        </ul>
    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
