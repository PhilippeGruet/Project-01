<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Portal')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <div class="entry clearfix">
            <h1 class="post-title entry-title">Portal</h1>
			<div class="entry-content clearfix">
                <h1>Our partners</h1>
                <ul>
                    <li><a href="http://emr.nc/" target="_blank">Environnement de la mine au récif (EMR)</a></li>
                    <li><a href="http://www.apfoudre.com/" target="_blank">Association Protection Foudre (APF)</a></li>
                    <li><a href="http://www.centraliens-lyon.net/" target="_blank">Associations des centraliens de Lyon</a></li>
                    <li><a href="http://www.caledonian-airborne.com/" target="_blank">Caledonian Airborne Systems</a></li>
                    <li><a href="China Meteorological Administration" target="_blank">China Meteorological Administration</a></li>
                    <li><a href="http://www.cigre.org/" target="_blank">International Council on Large Electric Systems (CIGRE)</a></li>
                    <li><a href="http://www.ddesb.pentagon.mil/" target="_blank">Department of Defense Explosives Safety Board (DDESB)</a></li>
                    <li><a href="http://www.ffie.fr/annexes/haut-de-page/version-anglaise/" target="_blank">Fédération Française des Entreprises de Génie Électrique et Énergétique (FFIE)</a></li>
                    <li><a href="http://www.iclp-centre.org/" target="_blank">International Conference on Lightning Protection (ICLP)</a></li>
                    <li><a href="http://www.diee.unica.it/iclp2010/" target="_blank">International Conference on Lightning Protection 2010 (ICLP)</a></li>
                    <li><a href="https://www.see.asso.fr/en/ilps2014" target="_blank">Internation Lightning Protection Symposium 2014 (ILPS)</a></li>
                    <li><a href="http://www.software-jupiter.com/index_fr.htm" target="_blank">JUPITER</a></li>
                    <li><a href="http://www.signatureindustries.com/" target="_blank">Signature Industrie</a></li>
                    <li><a href="http://www.see.asso.fr/" target="_blank">Société des Electriciens et Electroniciens (SEE)</a></li>
                    <li><a href="http://www.enr.fr/" target="_blank">Syndicat des énergies renouvelables</a></li>
                    <li><a href="http://lightningelectrotechnologies.com/" target="_blank">Lightning Electrotechnologies</a></li>
                </ul>
                <h1>Standard committees</h1>
                <ul>
                    <li><a href="http://www.bsigroup.com/" target="_blank">Angeleterre : BSI</a></li>
                    <li><a href="http://www.ute-fr.com/" target="_blank">France : UTE</a></li>
                    <li><a href="http://www.cenelec.eu/" target="_blank">Europe : CENELEC</a></li>
                    <li><a href="http://www.iec.ch/index.html" target="_blank">Internationale : CEI (IEC)</a></li>
                </ul>
                <h1>Our references</h1>
                <ul>
                    <li><a href="http://www.eurocontrol.int/" target="_blank">Eurocontrol (EEC)</a></li>
                    <li><a href="http://www.tour-eiffel.com/" target="_blank">La tour Eiffel</a></li>
                    <li><a href="http://www.villette.com/" target="_blank">Parc de La Villette</a></li>
                    <li><a href="http://www.airfranceindustries.com/" target="_blank">Air France Industrie</a></li>
                    <li><a href="http://www.defense.gouv.fr/dga/" target="_blank">Direction Générale de l’Armement (DGA)</a></li>
                    <li><a href="http://www.dassault.fr/" target="_blank">Groupe Dassault</a></li>
                    <li><a href="http://www.thalesgroup.com/" target="_blank">Thales</a></li>
                    <li><a href="http://www.onera.fr/" target="_blank">Onera</a></li>
                    <li><a href="http://www.eurocopter.com/" target="_blank">Eurocopter</a></li>
                    <li><a href="http://www.orange.com/" target="_blank">France Telecom</a></li>
                    <li><a href="http://www.dsna-dti.aviation-civile.gouv.fr/" target="_blank">Service Technique de la Navigation Aérienne</a></li>
                    <li><a href="http://www.disneylandparis.com/" target="_blank">Disneyland Resort</a></li>
                    <li><a href="http://fr.dcnsgroup.com/" target="_blank">DCNS</a></li>
                </ul>
    		</div>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="entry clearfix">
		    <h1 class="post-title entry-title">Portail</h1>
			<div class="entry-content clearfix">
                <h1>Nos partenaires</h1>
                <ul>
                    <li><a href="http://emr.nc/" target="_blank">Environnement de la mine au récif (EMR)</a></li>
                    <li><a href="http://www.apfoudre.com/" target="_blank">Association Protection Foudre (APF)</a></li>
                    <li><a href="http://www.centraliens-lyon.net/" target="_blank">Associations des centraliens de Lyon</a></li>
                    <li><a href="http://www.caledonian-airborne.com/" target="_blank">Caledonian Airborne Systems</a></li>
                    <li><a href="http://2011.cma.gov.cn/en/" target="_blank">China Meteorological Administration</a></li>
                    <li><a href="http://fr.cigre.org/" target="_blank">Conseil International des Grands Réseaux Électrique (CIGRE)</a></li>
                    <li><a href="http://www.ddesb.pentagon.mil/" target="_blank">Department of Defense Explosives Safety Board (DDESB)</a></li>
                    <li><a href="http://www.ffie.fr/" target="_blank">Fédération Française des Entreprises de Génie Électrique et Énergétique (FFIE)</a></li>
                    <li><a href="http://www.iclp-centre.org/" target="_blank">International Conference on Lightning Protection (ICLP)</a></li>
                    <li><a href="http://www.diee.unica.it/iclp2010/" target="_blank">International Conference on Lightning Protection 2010 (ICLP)</a></li>
                    <li><a href="https://www.see.asso.fr/ilps2014" target="_blank">Internation Lightning Protection Symposium 2014 (ILPS)</a></li>
                    <li><a href="http://www.software-jupiter.com/index_fr.htm" target="_blank">JUPITER</a></li>
                    <li><a href="http://www.signatureindustries.com/" target="_blank">Signature Industrie</a></li>
                    <li><a href="http://www.see.asso.fr/" target="_blank">Société des Electriciens et Electroniciens (SEE)</a></li>
                    <li><a href="http://www.enr.fr/" target="_blank">Syndicat des énergies renouvelables</a></li>
                    <li><a href="http://lightningelectrotechnologies.com/" target="_blank">Lightning Electrotechnologies</a></li>
                </ul>
                <h1>Comités de normalisation</h1>
                <ul>
                    <li><a href="http://www.bsigroup.com/" target="_blank">Angeleterre : BSI</a></li>
                    <li><a href="http://www.ute-fr.com/" target="_blank">France : UTE</a></li>
                    <li><a href="http://www.cenelec.eu/" target="_blank">Europe : CENELEC</a></li>
                    <li><a href="http://www.iec.ch/index.html" target="_blank">Internationale : CEI (IEC)</a></li>
                </ul>
                <h1>Quelques références</h1>
                <ul>
                    <li><a href="http://www.eurocontrol.int/" target="_blank">Eurocontrol (EEC)</a></li>
                    <li><a href="http://www.tour-eiffel.com/" target="_blank">La tour Eiffel</a></li>
                    <li><a href="http://www.villette.com/" target="_blank">Parc de La Villette</a></li>
                    <li><a href="http://www.airfranceindustries.com/" target="_blank">Air France Industrie</a></li>
                    <li><a href="http://www.defense.gouv.fr/dga/" target="_blank">Direction Générale de l’Armement (DGA)</a></li>
                    <li><a href="http://www.dassault.fr/" target="_blank">Groupe Dassault</a></li>
                    <li><a href="http://www.thalesgroup.com/" target="_blank">Thales</a></li>
                    <li><a href="http://www.onera.fr/" target="_blank">Onera</a></li>
                    <li><a href="http://www.eurocopter.com/" target="_blank">Eurocopter</a></li>
                    <li><a href="http://www.orange.com/" target="_blank">France Telecom</a></li>
                    <li><a href="http://www.dsna-dti.aviation-civile.gouv.fr/" target="_blank">Service Technique de la Navigation Aérienne</a></li>
                    <li><a href="http://www.disneylandparis.com/" target="_blank">Disneyland Resort</a></li>
                    <li><a href="http://fr.dcnsgroup.com/" target="_blank">DCNS</a></li>
                </ul>
    		</div>
    	</div>
    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
