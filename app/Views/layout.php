<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= $this->url('default_home'); ?>">Accueil</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				  <li><?php //La société ?>
					  <a href="?page=12" class="dropdown-toggle" data-toggle="dropdown">La société <b class="caret"></b></a>
					  <ul class="dropdown-menu multi-level">
					  	<li><a href="#">SEFTIM 50 ans de protection foudre dans le monde</a></li>
					  	<li class="dropdown-submenu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos compétences</a>
							<ul class="dropdown-menu">
								<li><a href="#">Compatibilité électromagnétique</a></li>
								<li><a href="#">Etudes et vérifications foudre</a></li>
								<li><a href="#">Ingénierie électronique</a></li>
								<li><a href="#">Rénovation des systèmes électroniques</a></li>
								<li><a href="#">Formations protection foudre</a></li>
							</ul>
						</li>
					  	<li><a href="#">Nos solutions</a></li>
					  	<li><a href="#">Vos principaux contacts</a></li>
					  </ul>
				  </li>
				  <li><?php //Nos moyens ?>
					  <a href="?page=10" class="dropdown-toggle" data-toggle="dropdown">Nos moyens<b class="caret"></b></a>
					  <ul class="dropdown-menu multi-level">
					  	<li><a href="#">Nos moyens</a></li>
					  	<li class="dropdown-submenu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Laboratoires partenaires</a>
							<ul class="dropdown-menu">
								<li><a href="#">Shanghai Lightning Protection Center</a></li>
								<li><a href="#">Shanghai Lightning Grand Top</a></li>
								<li><a href="#">Laboratoire Elemko (Grèce)</a></li>
							</ul>
						</li>
					  	<li class="dropdown-submenu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Logiciels</a>
							<ul class="dropdown-menu">
								<li><a href="#">JUPITER 2.0 et JUPITER 2.2</a></li>
							</ul>
						</li>
					  	<li class="dropdown-submenu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">SOS Foudre</a>
							<ul class="dropdown-menu">
								<li><a href="#">Réservé aux abonnés</a></li>
							</ul>
						</li>
					  	<li><a href="#">Les fiches techniques SEFTIM</a></li>
					  </ul>
				  </li>
				  <li>
					  <a href="?page=10" class="dropdown-toggle" data-toggle="dropdown">Formations<b class="caret"></b></a>
					  <ul class="dropdown-menu multi-level">
					  	<li><a href="#">Formations Qualifoudre</a></li>
					  	<li><a href="#">Formations sur catalogue</a></li>
					  	<li><a href="#">Formations à la carte</a></li>
					  </ul>
				  </li>
				  <li>
					  <a href="?page=10" class="dropdown-toggle" data-toggle="dropdown">Nos publications<b class="caret"></b></a>
					  <ul class="dropdown-menu multi-level">
						<li><a href="#">Association Protection Foudre (APF)</a></li>
						<li><a href="#">CIGRE</a></li>
						<li><a href="#">DDESB</a></li>
						<li><a href="#">Global Congress on Process Safety</a></li>
						<li><a href="#">GROUD</a></li>
						<li><a href="#">ICLP</a></li>
						<li><a href="#">ILCC</a></li>
						<li><a href="#">ILPS</a></li>
						<li><a href="#">SIPDA</a></li>
						<li><a href="#">Autres publications</a></li>
						<li class="dropdown-submenu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Par thèmes</a>
							<ul class="dropdown-menu">
								<li><a href="#">Parafoudres</a></li>
								<li><a href="#">Prise de terre foudre</a></li>
								<li><a href="#">Risque foudre</a></li>
								<li><a href="#">Systèmes de Protection Foudre</a></li>
								<li><a href="#">Détection d'orage</a></li>
								<li><a href="#">Divers</a></li>
							</ul>
						</li>
					  </ul>
				  </li>
				  <li><a href="#">Presse</a></li>
				  <li><a href="#">Portail</a></li>
				  <li>
					  <a href="?page=10" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
					  <ul class="dropdown-menu multi-level">
						<li><a href="#">Antibes</a></li>
						<li><a href="#">Chines (Septembre 2015)</a></li>
						<li><a href="#">Guadeloupe</a></li>
						<li><a href="#">Martinique</a></li>
						<li><a href="#">Nouvelle Calédonie</a></li>
						<li><a href="#">Océan Indien</a></li>
						<li><a href="#">Paris</a></li>
						<li><a href="#">Perpignan</a></li>
						<li><a href="#">Portugal</a></li>
						<li><a href="#">Reims</a></li>
						<li><a href="#">SEFTIM dans le monde</a></li>
					  </ul>
				  </li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<?php if ($w_user): ?>
						<!-- Membre -->
						<li>
							<a href="<?= $this->url('security_profil'); ?>">
								<?= $w_user['firstname']." ".$w_user['lastname'] ?>
							</a>
						</li>
						<li>
							<a href="<?= $this->url('security_logout'); ?>">
								Déconnexion
							</a>
						</li>

					<?php else: ?>
						<!-- Visiteur -->
						<li class="<?= $w_current_route == "security_login" ? "active" : ""; ?>">
							<a href="<?= $this->url('security_login'); ?>">Connexion</a>
						</li>
						<li class="<?= $w_current_route == "security_register" ? "active" : ""; ?>">
							<a href="<?= $this->url('security_register'); ?>">Inscription</a>
						</li>
					<?php endif; ?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= isset($_SESSION["locale"])? $_SESSION["locale"]: "fr" ; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?= $this->url($w_current_route) ?>">fr</a></li>
							<li><a href="<?= $this->url($w_current_route) ?>">en</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<header>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="<?= $this->assetUrl('js/app.js'); ?>"></script>
</body>
</html>
