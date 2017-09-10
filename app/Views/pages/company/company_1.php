<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:SEFTIM_50_years_of_Lightning_Protection_worldwide')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>SEFTIM 50 years of Lightning Protection worldwide</div>

        <p class="text-justify">
            Company SEFTIM is involved in Lightning Protection since its creation almost 50 years ago.
        </p>

        <p class="text-justify">
            Initially positioned to very sensitive fields : aviation, radars, nuclear, since the end of the last century it enlarges its field of action to every activities needing its skills. With the development of sensitive’s means to electronics and computers, everyone is affected, from the SMB to historical monuments, including datacenters and petrochemical industries or renewable energy.
        </p>

        <p class="text-justify">
            SEFTIM is also successfully present on export business : USA, China, Spain, Italia, South America, Poland, Bolivia, Korea, Africa only to speak for the newest.
        </p>

        <p class="text-justify">
            In order to cope with this growing need, SEFTIM has a growing team, counting at present time 20 people including un expert Quaifoudre level 4, two trainers Qualifoudre level 4, 5 Qualifoudre referent (the most important amount of referent in a single company) and a University of Mons expert as well as offices in various sites in metropolitan France or far away. Indeed, even if we could feel relevant in the field of the lightning protection merely by reading the standards (which is already a first challenge given the standard’s complexity), in SEFTIM, we think that the competence and the expertise is cultivate through time. Thus, an engineer is regarded as skilled as after a long formation process including theoretical angles and at least 6 months of companionship. SEFTIM cultivate permanently its expertise thanks to an active involvement to standardization activities and international research studies. Sharing with its locals and internationals peers is a technical improvement (even if it’s a huge financial cost funded by the company) and it’s also the key of our legitimacy.
        </p>

        <p class="text-justify">
            Fortified by this long experience permanently renewed, SEFTIM offers a complete formation schedule in order to share its expertise.
        </p>

        <p class="text-justify">
            <a href="#">Download the company brochure</a>
        </p>
    </div>
<?php else: ?>
    <div class="row">
        <h2>SEFTIM 50 ans de protection foudre dans le monde</div>

        <p class="text-justify">
            La société SEFTIM réalise des études de protection contre la foudre depuis sa création il y a presque 50 ans maintenant.
        </p>

        <p class="text-justify">
            Initialement orientée vers les domaines les plus sensibles : aviation, radars, nucléaire, elle a depuis la fin du siècle dernier élargi son champ d’action à toutes les activités nécessitant son expertise. Avec le développement des moyens sensibles électroniques et l’informatiques, dans la pratique tout le monde est concerné, depuis la PME jusqu’aux monuments historiques sans parler des data center et des industries pétrochimiques ou les énergies renouvelables.
        </p>

        <p class="text-justify">
            SEFTIM est même présent avec succès sur des marchés export : USA, Chine, Espagne, Italie, Amérique du Sud, Pologne, Bolivie, Russie, Corée pour ne parler que des plus récents.
        </p>

        <p class="text-justify">
            Pour faire face à ces besoins croissants SEFTIM a une équipe en croissance constante  comptant à ce jour 20 personnes dont un expert Qualifoudre niveau 4, deux formateurs Qualifoudre niveau 4, 5 référents Qualifoudre (le nombre de référents le plus important au sein d’une même société), une expert de l’Université de Mons et une équipe export ainsi que des bureaux dans de nombreux sites en Métropole ou plus lointains. En effet, même si on a la possibilité de se sentir compétent en protection contre la foudre à la simple lecture des normes du domaine (ce qui est, il est vrai, déjà un premier challenge du fait de leur complexité) nous pensons chez SEFTIM que la compétence et l’expertise se développent avec le temps. Ainsi, un ingénieur n’est considéré comme compétent qu’au bout d’un long processus de formation comprenant des aspects théoriques et au moins 6 mois de compagnonnage. SEFTIM développe en permanence sa compétence dans le domaine grâce à une participation active aux activités normatives et aux travaux de recherche internationaux. Le partage avec ses pairs et notamment étrangers est un enrichissement technique (même si c’est un énorme coût financé sur fonds propres) et c’est également une clé de notre légitimité dans le domaine.
        </p>

        <p class="text-justify">
            Fort de cette longue expérience en permanence renouvelée, SEFTIM propose un programme complet de formation pour faire partager ses compétences.
        </p>

        <p class="text-justify">
            <a href="#">Télécharger la plaquette de présentation</a>
        </p>
    </div>
<?php endif; ?>

<?php $this->stop('main_content') ?>
