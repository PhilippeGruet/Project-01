<?php

	$w_routes = array(
		// Main site
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/article/[:articleId]', 'Default#article', 'default_article'],

		// User
		['GET|POST', '/register', 		'Security#register', 'security_register'],
		['GET|POST', '/login', 			'Security#login', 'security_login'],
		['GET|POST', '/forget', 		'Security#forget', 'security_forget'],
		['GET|POST', '/profil', 		'Security#profil', 'security_profil'],
		['GET|POST', '/profil/update', 	'Security#updateProfil', 'security_update'],
		['GET',		 '/logout', 		'Security#logout', 'security_logout'],

		// Admin / Mod
	);
