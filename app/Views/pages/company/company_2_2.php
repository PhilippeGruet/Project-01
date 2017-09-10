<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Lightning_study_and_check')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Lightning study and check</h2>

        <p class="text-justify">Studies and checks of lightning can be divided into 4 fields:</p>

        <h3>Lightning risks analysis</h3>
        <p class="text-justify">In this part we realize risks calculation following the International and European Norm 62305-2 and we also take in consideration danger studies, safety studies and pyrotechnic studies (according to the operating field) and EIPS/EIS & MMR according to the case (nuclear or petrochemical industry, explosives depot, …). This analysis also includes ministerial decrees. Thanks to our norms mastery, we are able to determine the most accurate risk level while being 100% in accordance with the norms.</p>

        <h3>Technical Studies</h3>
        <p class="text-justify">These studies aim at determining protection means following the results of the lightning risk analysis. As an independent studies office we propose the most adapted protection means to the site while trying to offer you the best economical profitability.</p>

        <h3>Lightning Checks</h3>
        <p class="text-justify">This part concerns the initial check realized after work in order to make sure that the new lightning protection system is not only conform to the norms but also responds to the technical studies requirements – that may be even more constraining than the norms – to offer a fully operational system.</p>

        <h3>Earth-Lightning Engineering</h3>
        <p class="text-justify">Earth-Lightning Engineering purpose is to define, to measure and to optimize the earths in order to reduce the constraints on lightning conductors and to favor the lightning flow into a given circuit.</p>
    </div>
<?php else: ?>
    <div class="row">
        <h2>Etudes et vérifications foudre</h2>

        <p class="text-justify">Les études et les vérifications foudre couvrent 4 domaines:</p>

        <h3>Analyses des risques foudre</h3>
        <p class="text-justify">Il s’agit de réaliser des calculs de risque suivant la norme internationale et européenne 62305-2 et également de prendre en compte les études de danger, études de sûreté et études pyrotechniques (suivant l’application) et les EIPS/EIS et MMR en fonction des cas (industrie nucléaire ou pétro-chimique, dépôts d’explosifs, …). Les arrêtés ministériels sont également pris en compte dans cette analyse. Notre maîtrise des normes nous permet de déterminer le niveau de risque le plus adapté tout en conservant une conformité à 100% avec les normes.</p>

        <h3>Etudes techniques</h3>
        <p class="text-justify">Il s’agit de déterminer les moyens de protection à mettre en œuvre pour tenir compte des résultats de l’ARF. En tant que bureau d’étude indépendant les moyens de protection préconisés sont ceux les mieux adaptés au site dans un souci de rentabilité économique.</p>

        <h3>Vérifications foudre</h3>
        <p class="text-justify">Il s’agit de la vérification initiale réalisée après les travaux afin de s’assurer que le système de protection foudre mis en place est non seulement conforme aux normes en vigueur mais également aux exigences de l’étude technique qui peuvent être plus contraignantes que les premières dans l’objectif d’avoir un système complètement opérationnel.</p>

        <h3>Ingénierie terre-foudre</h3>
        <p class="text-justify">Il s’agit de définir, mesurer et optimiser les prises de terre pour réduire les contraintes sur les parafoudres et favoriser l’écoulement de la foudre dans un circuit donné.</p>
    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
