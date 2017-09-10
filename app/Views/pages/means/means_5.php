<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:SEFTIM_Technical_leaflets')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>SEFTIM Technical lealflets</h2>
        <p class="text-justify">To share its experience, SEFTIM produces technical leaflets to explain what we have done in a specific study field. It may deals with nuclear industry, petroleum or renewable energy to list only a few of them. The leaflets present the problem what was encountered by the industry of that particular field as well as the original solutions proposed by SEFTIM. They all are based on real cases but are preserving the confidentiality of the study of our customers.</p>
        <div class="col-md-2">

        </div>
        <div class="col-md-10">
          <p>The list of the published leaflets is given below. They can all be downloaded in a pdf format.</p>
          <ul class="list-group">
            <li class="list-group-item"><a href="#">Thermal Power Plants Lightning Protection</a></li>
            <li class="list-group-item"><a href="#">Lightning protection Nuclear Facilities</a></li>
            <li class="list-group-item"><a href="#">Railway facilities Lightning Protection</a></li>
            <li class="list-group-item"><a href="#">Data Center Lightning Protection</a></li>
            <li class="list-group-item"><a href="#">Lightning Protection Explosive Storage</a></li>
            <li class="list-group-item"><a href="#">Lightning Protection Training</a></li>
            <li class="list-group-item"><a href="#">Renewable Energy Lightning protection</a></li>
            <li class="list-group-item"><a href="#">Petrochemical industries Lightning Protection</a></li>
            <li class="list-group-item"><a href="#">Lightning Protection and EMC Antennas</a></li>
            <li class="list-group-item"><a href="#">Lightning Earthing</a></li>
            <li class="list-group-item"><a href="#">Hotels and Resort Lightning Protection</a></li>
          </ul>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <h2>Les fiches techniques SEFTIM</h2>
        <p class="text-justify">Pour partager son expérience, SEFTIM réalise des fiches techniques présentant nos réalisations dans un domaine précis d’études. Il peut s’agir de l’industrie nucléaire, du pétrole ou des énergies renouvelables pour n’en citer que quelques uns. Les fiches présentent les problématiques rencontrées dans le domaine considéré et les solutions originales qui ont été proposées par SEFTIM. Elles sont toutes basées sur des cas réels tout en préservant la confidentialité de nos clients.</p>

        <div class="col-md-2">

        </div>
        <div class="col-md-10">
          <p>La liste des fiches publiées est donnée ci-dessous. Elles sont toutes téléchargeables au format pdf.</p>
          <ul class="list-group">
            <li class="list-group-item"><a href="#">Protection foudre des centrales thermiques</a></li>
            <li class="list-group-item"><a href="#">Protection foudre des installations Nucléaires</a></li>
            <li class="list-group-item"><a href="#">Protection foudre des installations ferroviaires</a></li>
            <li class="list-group-item"><a href="#">Protection foudre des Data Center</a></li>
            <li class="list-group-item"><a href="#">Protection foudre des dépôts d’explosifs</a></li>
            <li class="list-group-item"><a href="#">Formation Protection foudre</a></li>
            <li class="list-group-item"><a href="#">Protection foudre des énergies renouvelables</a></li>
            <li class="list-group-item"><a href="#">Protection foudre des industries pétrochimiques</a></li>
            <li class="list-group-item"><a href="#">Protection Foudre et CEM des antennes</a></li>
            <li class="list-group-item"><a href="#">Terres Foudre</a></li>
            <li class="list-group-item"><a href="#">Protection Foudre des Hôtels et Resort</a></li>
          </ul>
        </div>
    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
