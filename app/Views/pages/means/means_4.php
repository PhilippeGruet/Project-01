<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:SOS_Lightning')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>SOS Lightning</h2>

        <div class="col-md-4">

        </div>

        <div class="col-md-8">
          <p class="text-justify">Are you from the industry or site manager looking for advice on your facility lightning protection scheme or wiling to get an independent advice ?</p>
          <p class="text-justify">Are you a lightning protection Professional looking for a technical or standard clarification ?</p>
          <p class="text-justify">Then SEFTIM SOS Lghtning is made for you. Its enough to send an email Sos-lightning@seftim.fr describing what you need. You will receive an answer by email. In addition, if the question is of general interest, question and answer will also be posted on the site.</p>
        </div>

        <p class="text-justify">If you are a private indvidual, it is likely that the answer to your need already exists in the web sites of  lightning protection national associations that exist worldwide such as National Lightning Safety Institute in USA. However, no question will remain unanswered.</p>

    </div>
<?php else: ?>
    <div class="row">
        <h2>SOS Foudre</h2>
        <div class="col-md-4">

        </div>

        <div class="col-md-8">
          <p class="text-justify">Vous êtes un industriel ou un responsable de site désirant avoir un conseil sur la protection foudre de votre site ou qui souhaite une expertise indépendante ?</p>
          <p class="text-justify">Vous êtes un professionnel de la foudre désireux d’avoir un éclaircissement technique ou normatif ?</p>
          <p class="text-justify">Alors le SOS Foudre de SEFTIM vous est destiné. Il suffit d’envoyer un mail à Sos-foudre@seftim.fr avec la description de votre besoin.  Vous recevrez une réponse par email. Si votre question est d’intérêt général, la question et la réponse seront également  postées sur le site.</p>
        </div>

        <p class="text-justify">Si vous êtes un particulier, il est probable que la réponse attendue soit déjà sur le site de l’Association Protection Foudre. Dans tous les cas il est préférable de contacter l’APF pour tout ce qui traite de la protection des personnes. Néanmoins, nous ne laisserons pas de questions sans réponses.</p>

        <hr>
        <p class="text-justify"><strong>Listes des normes foudre applicables en France :</strong>connaître la liste des normes applicables dans le domaine de la foudre est parfois un vrai casse-tête. Les normes changent, certains arrêtés imposent des normes qui ont été remplacées par des normes plus récentes, divers comités produisent des normes foudre et les normes utiles ne sont pas toujours les mêmes selon qu’on est bureau d’études, installateur, vérificateur ou même fabriquant.</p>
        <p class="text-justify">SEFTIM maintien une liste des normes applicables pour ses propres besoins. Cette liste est dorénavant disponible à tous les abonnés sur service SOS Foudre. Inscrivez-vous en envoyant un mail à <a href="Sos-foudre@seftim.fr">Sos-foudre@seftim.fr</a>.</p>
        <p class="text-justify">En vous inscrivant, vous aurez accès à cette liste des normes et vous recevrez périodiquement la liste des normes mises à jour.</p>
        <p class="text-justify">Connaître les normes applicables dans chaque situation est non seulement le garant d’utiliser le bon référentiel pour chaque activité du domaine de la foudre mais également une des exigences <a href="http://www.ineris.fr/centredoc/referentiel-qualifoudre-v3-3-1389094470.pdf" target="_blank">Qualifoudre</a>.</p>
        <p class="text-justify"><strong>Avis ministériel sur l’application des PDA dans la réglementation française</strong></p>
        <p class="text-justify">Des Ministères ont publiés une position commune sur ce sujet concernant notamment les ERP et les ICPE. Le document est disponible sur le partie réservée aux abonnés du SOS  Foudre SEFTIM.</p>

    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
