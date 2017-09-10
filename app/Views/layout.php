<!DOCTYPE html>
<html lang="<?= $_SESSION['locale'] ?>">
<?php $app = getApp(); ?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/flag-icon.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<?= $this->section('css') ?>
</head>
<body>
	<header style="background: black;"></header>

	<div id="nav">
		<nav class="navbar navbar-default navbar-static">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= $this->url('default_home'); ?>"><?= $app->getLocale('navbar:home');?></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php //The company ?>
						<li class="<?= ( substr($w_current_route, 0, 15) == 'default_company' )? 'active': '';?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $app->getLocale('navbar:the_company');?> <b class="caret"></b></a>
							<ul class="dropdown-menu multi-level">
								<li class="<?= ( $w_current_route == 'default_company_1' )? 'active': '';?>"><a href="<?= $this->url('default_company_1'); ?>"><?= $app->getLocale('navbar:SEFTIM_50_years_of_Lightning_Protection_worldwide');?></a></li>
								<?php  ?>
								<li class="dropdown-submenu <?= ( substr($w_current_route, 0, 17) == 'default_company_2' )? 'active': ''; ?>">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $app->getLocale('navbar:Our_missions');?></a>
									<ul class="dropdown-menu">
										<li class="<?= ( $w_current_route == 'default_company_2_1' )? 'active': '';?>"><a href="<?= $this->url('default_company_2_1'); ?>"><?= $app->getLocale('navbar:Electromagnetic_compatibility');?></a></li>
										<li class="<?= ( $w_current_route == 'default_company_2_2' )? 'active': '';?>"><a href="<?= $this->url('default_company_2_2'); ?>"><?= $app->getLocale('navbar:Lightning_study_and_check');?></a></li>
										<li class="<?= ( $w_current_route == 'default_company_2_3' )? 'active': '';?>"><a href="<?= $this->url('default_company_2_3'); ?>"><?= $app->getLocale('navbar:Electronic_engineering');?></a></li>
										<li class="<?= ( $w_current_route == 'default_company_2_4' )? 'active': '';?>"><a href="<?= $this->url('default_company_2_4'); ?>"><?= $app->getLocale('navbar:Overhaul_of_electronic_system');?></a></li>
										<li class="<?= ( $w_current_route == 'default_company_2_5' )? 'active': '';?>"><a href="<?= $this->url('default_company_2_5'); ?>"><?= $app->getLocale('navbar:Lightning_protection_training');?></a></li>
									</ul>
								</li>
								<li class="<?= ( $w_current_route == 'default_company_3' )? 'active': '';?>"><a href="<?= $this->url('default_company_3'); ?>"><?= $app->getLocale('navbar:Our_solutions');?></a></li>
								<li class="<?= ( $w_current_route == 'default_company_4' )? 'active': '';?>"><a href="<?= $this->url('default_company_4'); ?>"><?= $app->getLocale('navbar:Your_main_contacts');?></a></li>
							</ul>
						</li>

					  <?php //Our means ?>
					  <li class="<?= ( substr($w_current_route, 0, 13) == 'default_means' )? 'active': '';?>">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $app->getLocale('navbar:Our_means');?> <b class="caret"></b></a>
						  <ul class="dropdown-menu multi-level">
						  	<li class="<?= ( $w_current_route == 'default_means_1' )? 'active': '';?>"><a href="<?= $this->url('default_means_1'); ?>"><?= $app->getLocale('navbar:Our_means_for_studies_and_development');?></a></li>
						  	<li class="dropdown-submenu <?= ( substr($w_current_route, 0, 15) == 'default_means_2' )? 'active': ''; ?>">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $app->getLocale('navbar:Laboratories');?></a>
								<ul class="dropdown-menu">
									<li class="<?= ( $w_current_route == 'default_means_2_1' )? 'active': '';?>"><a href="<?= $this->url('default_means_2_1'); ?>"><?= $app->getLocale('navbar:Shanghai_Lightning_Protection_Center');?></a></li>
									<li class="<?= ( $w_current_route == 'default_means_2_2' )? 'active': '';?>"><a href="<?= $this->url('default_means_2_2'); ?>"><?= $app->getLocale('navbar:Shanghai_Lightning_GrandTop');?></a></li>
									<li class="<?= ( $w_current_route == 'default_means_2_3' )? 'active': '';?>"><a href="<?= $this->url('default_means_2_3'); ?>"><?= $app->getLocale('navbar:Elemko_Laboratory');?></a></li>
								</ul>
							</li>
						  	<li class="dropdown-submenu <?= ( substr($w_current_route, 0, 16) == 'default_means_3' )? 'active': ''; ?>">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $app->getLocale('navbar:Software');?></a>
								<ul class="dropdown-menu">
									<li class="<?= ( $w_current_route == 'default_means_3' )? 'active': '';?>"><a href="<?= $this->url('default_means_3'); ?>"><?= $app->getLocale('navbar:JUPITER_2.0_&_JUPITER_2.2');?></a></li>
								</ul>
							</li>
						  	<li class="dropdown-submenu <?= ( substr($w_current_route, 0, 15) == 'default_means_4' )? 'active': '';?>">
								<a href="<?= $this->url('default_means_4'); ?>" ><?= $app->getLocale('navbar:SOS_Lightning');?></a>
								<ul class="dropdown-menu">
									<li class="<?= ( $w_current_route == 'default_means_4_1' )? 'active': '';?>"><a href="<?= $this->url('default_means_4_1'); ?>"><?= $app->getLocale('navbar:Subscribers_only');?></a></li>
								</ul>
							</li>
						  	<li class="<?= ( $w_current_route == 'default_means_5' )? 'active': '';?>"><a href="<?= $this->url('default_means_5'); ?>"><?= $app->getLocale('navbar:SEFTIM_Technical_leaflets');?></a></li>
						  </ul>
					  </li>

					  <?php //Training ?>
					  <li class="<?= ( substr($w_current_route, 0, 16) == 'default_training' )? 'active': '';?>">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $app->getLocale('navbar:Training');?> <b class="caret"></b></a>
						  <ul class="dropdown-menu multi-level">
						  	<li class="<?= ( $w_current_route == 'default_training_1' )? 'active': '';?>"><a href="<?= $this->url('default_training_1'); ?>"><?= $app->getLocale('navbar:Qualifoudre_Seminar/Training');?></a></li>
						  	<li class="<?= ( $w_current_route == 'default_training_2' )? 'active': '';?>"><a href="<?= $this->url('default_training_2'); ?>"><?= $app->getLocale('navbar:Training_list');?></a></li>
						  	<li class="<?= ( $w_current_route == 'default_training_3' )? 'active': '';?>"><a href="<?= $this->url('default_training_3'); ?>"><?= $app->getLocale('navbar:Seminar/Training_on_demand');?></a></li>
						  </ul>
					  </li>

					  <?php //Our publications ?>
					  <li class="<?= ( substr($w_current_route, 0, 14) == 'default_papers' )? 'active': '';?>">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $app->getLocale('navbar:Our_papers');?> <b class="caret"></b></a>
						  <ul class="dropdown-menu multi-level">
							<li class="<?= ( $w_current_route == 'default_papers_3' )? 'active': '';?>"><a href="<?= $this->url('default_papers_3'); ?>"><?= $app->getLocale('navbar:French_lightning_protection_association');?></a></li>
							<li class="<?= ( $w_current_route == 'default_papers_1' )? 'active': '';?>"><a href="<?= $this->url('default_papers_1'); ?>"><?= $app->getLocale('navbar:CIGRE');?></a></li>
							<li class="<?= ( $w_current_route == 'default_papers_2' )? 'active': '';?>"><a href="<?= $this->url('default_papers_2'); ?>"><?= $app->getLocale('navbar:DDESB');?></a></li>
							<li class="<?= ( $w_current_route == 'default_papers_4' )? 'active': '';?>"><a href="<?= $this->url('default_papers_4'); ?>"><?= $app->getLocale('navbar:Global_congress_on_process_safety');?></a></li>
							<li class="<?= ( $w_current_route == 'default_papers_5' )? 'active': '';?>"><a href="<?= $this->url('default_papers_5'); ?>"><?= $app->getLocale('navbar:GROUND');?></a></li>
							<li class="<?= ( $w_current_route == 'default_papers_6' )? 'active': '';?>"><a href="<?= $this->url('default_papers_6'); ?>"><?= $app->getLocale('navbar:ICLP');?></a></li>
							<li class="<?= ( $w_current_route == 'default_papers_7' )? 'active': '';?>"><a href="<?= $this->url('default_papers_7'); ?>"><?= $app->getLocale('navbar:ILCC');?></a></li>
							<li class="<?= ( $w_current_route == 'default_papers_8' )? 'active': '';?>"><a href="<?= $this->url('default_papers_8'); ?>"><?= $app->getLocale('navbar:ILPS');?></a></li>
							<li class="<?= ( $w_current_route == 'default_papers_9' )? 'active': '';?>"><a href="<?= $this->url('default_papers_9'); ?>"><?= $app->getLocale('navbar:SIPDA');?></a></li>
							<li class="<?= ( $w_current_route == 'default_papers_10' )? 'active': '';?>"><a href="<?= $this->url('default_papers_10'); ?>"><?= $app->getLocale('navbar:Other_publications');?></a></li>
							<li class="dropdown-submenu <?= ( substr($w_current_route, 0, 17) == 'default_papers_11' )? 'active': ''; ?>">
								<a href="<?= $this->url('default_papers_11'); ?>"><?= $app->getLocale('navbar:By_topic');?></a>
								<ul class="dropdown-menu">
									<li class="<?= ( $w_current_route == 'default_papers_11_1' )? 'active': '';?>"><a href="<?= $this->url('default_papers_11_1'); ?>"><?= $app->getLocale('navbar:Lightning_Protection_System');?></a></li>
									<li class="<?= ( $w_current_route == 'default_papers_11_2' )? 'active': '';?>"><a href="<?= $this->url('default_papers_11_2'); ?>"><?= $app->getLocale('navbar:Lightning_Earthing_and_Grounding');?></a></li>
									<li class="<?= ( $w_current_route == 'default_papers_11_3' )? 'active': '';?>"><a href="<?= $this->url('default_papers_11_3'); ?>"><?= $app->getLocale('navbar:Lightning_Risk');?></a></li>
									<li class="<?= ( $w_current_route == 'default_papers_11_4' )? 'active': '';?>"><a href="<?= $this->url('default_papers_11_4'); ?>"><?= $app->getLocale('navbar:SPD');?></a></li>
									<li class="<?= ( $w_current_route == 'default_papers_11_5' )? 'active': '';?>"><a href="<?= $this->url('default_papers_11_5'); ?>"><?= $app->getLocale('navbar:Storm_detection');?></a></li>
									<li class="<?= ( $w_current_route == 'default_papers_11_6' )? 'active': '';?>"><a href="<?= $this->url('default_papers_11_6'); ?>"><?= $app->getLocale('navbar:Various');?></a></li>
								</ul>
							</li>
						  </ul>
					  </li>

					  <?php //Press ?>
					  <li class="<?= ( explode('_', $w_current_route)[1] == 'press' )? 'active': '';?>">
						  <a href="<?= $this->url('default_press_review'); ?>"><?= $app->getLocale('navbar:Press_review');?></a>
					  </li>

					  <?php //Portal ?>
					  <li class="<?= ( explode('_', $w_current_route)[1] == 'portal' )? 'active': '';?>">
						  <a href="<?= $this->url('default_portal'); ?>"><?= $app->getLocale('navbar:Portal');?></a>
					  </li>

					  <?php //Contact ?>
					  <li class="<?= ( explode('_', $w_current_route)[1] == 'contact' )? 'active': '';?>">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $app->getLocale('navbar:Contact');?> <b class="caret"></b></a>
						  <ul class="dropdown-menu multi-level">
							<li class="<?= ( $w_current_route == 'default_contact_1' )? 'active':'';?>"><a href="<?= $this->url('default_contact_1'); ?>"><?= $app->getLocale('navbar:Antibes');?></a></li>
							<li class="<?= ( $w_current_route == 'default_contact_2' )? 'active':'';?>"><a href="<?= $this->url('default_contact_2'); ?>"><?= $app->getLocale('navbar:China_September_2015');?></a></li>
							<li class="<?= ( $w_current_route == 'default_contact_3' )? 'active':'';?>"><a href="<?= $this->url('default_contact_3'); ?>"><?= $app->getLocale('navbar:Guadeloupe');?></a></li>
							<li class="<?= ( $w_current_route == 'default_contact_4' )? 'active':'';?>"><a href="<?= $this->url('default_contact_4'); ?>"><?= $app->getLocale('navbar:Martinique');?></a></li>
							<li class="<?= ( $w_current_route == 'default_contact_5' )? 'active':'';?>"><a href="<?= $this->url('default_contact_5'); ?>"><?= $app->getLocale('navbar:New_Caledonia');?></a></li>
							<li class="<?= ( $w_current_route == 'default_contact_6' )? 'active':'';?>"><a href="<?= $this->url('default_contact_6'); ?>"><?= $app->getLocale('navbar:Indian_Ocean');?></a></li>
							<li class="<?= ( $w_current_route == 'default_contact_7' )? 'active':'';?>"><a href="<?= $this->url('default_contact_7'); ?>"><?= $app->getLocale('navbar:Paris');?></a></li>
							<li class="<?= ( $w_current_route == 'default_contact_8' )? 'active':'';?>"><a href="<?= $this->url('default_contact_8'); ?>"><?= $app->getLocale('navbar:Perpignan');?></a></li>
							<li class="<?= ( $w_current_route == 'default_contact_9' )? 'active':'';?>"><a href="<?= $this->url('default_contact_9'); ?>"><?= $app->getLocale('navbar:Portugal');?></a></li>
							<li class="<?= ( $w_current_route == 'default_contact_10' )? 'active':'';?>"><a href="<?= $this->url('default_contact_10'); ?>"><?= $app->getLocale('navbar:Reims');?></a></li>
							<li class="<?= ( $w_current_route == 'default_contact_11' )? 'active':'';?>"><a href="<?= $this->url('default_contact_11'); ?>"><?= $app->getLocale('navbar:SEFTIM_worldwide');?></a></li>
						  </ul>
					  </li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<?php if ($w_user): //Logged user?>
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <b class="caret"></b></a>
								<ul class="dropdown-menu multi-level">
									<li><a href="<?= $this->url('security_profil'); ?>"><?= $app->getLocale('navbar:profil');?> <span class="glyphicon glyphicon-cog pull-right" aria-hidden="true"></span></a></li>
									<li><a href="<?= $this->url('security_logout'); ?>"><?= $app->getLocale('navbar:logout');?> <span class="glyphicon glyphicon-log-out pull-right" aria-hidden="true"></span></a></li>
								</ul>
							</li>
						<?php else: //Not logged?>
							<li><a href="<?= $this->url('security_login'); ?>"><?= $app->getLocale('log_in');?></a></li>
						<?php endif; ?>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= isset($_SESSION["locale"])? strtoupper($_SESSION["locale"]): "EN" ; ?> <span class="caret"></span></a>
							<ul id="langSwitch" class="dropdown-menu">
								<li><a href="<?= $this->url('default_version') . '?lang=fr&cP=' . $_SERVER['REQUEST_URI'] ?>"><span class="flag-icon flag-icon-fr"></span> FR</a></li>
								<li><a href="<?= $this->url('default_version') . '?lang=en&cP=' . $_SERVER['REQUEST_URI'] ?>"><span class="flag-icon flag-icon-us"></span> EN</a></li>
							</ul>
						</li>

					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div><?php //End #nav ?>

	<div id="main-content" class="container">
		<div class="navbar-correction"></div>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
			<!-- <h2>Debug :</h2> -->
			<!-- getApp : -->
			<?php //var_dump(getApp()); ?>
			<!-- Current route : -->
			<?php //var_dump($w_current_route); ?>
			<!-- SESSION : -->
			<?php //var_dump($_SESSION); ?>
			<!-- GET : -->
			<?php //var_dump($_GET); ?>
			<!-- POST : -->
			<?php //var_dump($_POST); ?>
			<!-- SERVER : -->
			<?php //var_dump($_SERVER); ?>
		</footer>
	</div>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<script src="<?= $this->assetUrl('js/app.js'); ?>"></script>
	<?= $this->section('js') ?>
</body>
</html>
