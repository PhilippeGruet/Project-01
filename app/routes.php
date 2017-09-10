<?php
	$w_routes = array(
		// ---- Front office ----
		['GET|POST', '/',		 				'Default#home', 			'default_home'],
		['GET',		 '/article/[:articleId]', 	'Default#article',			'default_article'],
		['GET',		 '/version', 				'Default#version',  		'default_version'],

		// -- Old navbar --
		['GET',		 '/company/SEFTIM_50_years_of_Lightning_Protection_worldwide',	'Default#company_1',  	'default_company_1'],
		['GET',		 '/company/Electromagnetic_compatibility',						'Default#company_2_1',  'default_company_2_1'],
		['GET',		 '/company/Lightning_study_and_check',							'Default#company_2_2',  'default_company_2_2'],
		['GET',		 '/company/Electronic_engineering',								'Default#company_2_3',  'default_company_2_3'],
		['GET',		 '/company/Overhaul_of_electronic_system',						'Default#company_2_4',  'default_company_2_4'],
		['GET',		 '/company/Lightning_protection_training',						'Default#company_2_5',  'default_company_2_5'],
		['GET',		 '/company/Our_solutions',										'Default#company_3',  	'default_company_3'],
		['GET',		 '/company/Your_main_contacts',									'Default#company_4',  	'default_company_4'],

		['GET',		 '/means/Our_means_for_studies_and_development', 				'Default#means_1',  	'default_means_1'],
		['GET',		 '/means/Shanghai_Lightning_Protection_Center',					'Default#means_2_1',  	'default_means_2_1'],
		['GET',		 '/means/Shanghai_Lightning_GrandTop',							'Default#means_2_2',  	'default_means_2_2'],
		['GET',		 '/means/Elemko_Laboratory',									'Default#means_2_3',  	'default_means_2_3'],
		['GET',		 '/means/Jupiter',												'Default#means_3',  	'default_means_3'],
		['GET',		 '/means/SOS_Lightning',										'Default#means_4',  	'default_means_4'],
		['GET',		 '/means/Subscribers_only',										'Default#means_4_1',  	'default_means_4_1'],
		['GET',		 '/means/SEFTIM_Technical_leaflets',							'Default#means_5',  	'default_means_5'],

		['GET',		 '/training/Qualifoudre_Seminar',								'Default#training_1',  	'default_training_1'],
		['GET',		 '/training/Training_list',										'Default#training_2',  	'default_training_2'],
		['GET',		 '/training/Training_on_demand',								'Default#training_3',  	'default_training_3'],

		['GET',		 '/papers/CIGRE',												'Default#papers_1',  	'default_papers_1'],
		['GET',		 '/papers/DDESB',												'Default#papers_2',  	'default_papers_2'],
		['GET',		 '/papers/French_lightning_protection_association',				'Default#papers_3',  	'default_papers_3'],
		['GET',		 '/papers/Global_congress_on_process_safety',					'Default#papers_4',  	'default_papers_4'],
		['GET',		 '/papers/GROUND',												'Default#papers_5',  	'default_papers_5'],
		['GET',		 '/papers/ICLP',												'Default#papers_6',  	'default_papers_6'],
		['GET',		 '/papers/ILCC',												'Default#papers_7',  	'default_papers_7'],
		['GET',		 '/papers/ILPS',												'Default#papers_8',  	'default_papers_8'],
		['GET',		 '/papers/SIPDA',												'Default#papers_9',  	'default_papers_9'],
		['GET',		 '/papers/Other_publications',									'Default#papers_10',  	'default_papers_10'],
		['GET',		 '/papers/By_topic',											'Default#papers_11',  	'default_papers_11'],
		['GET',		 '/papers/Lightning_Earthing_and_Grounding',					'Default#papers_11_1',  'default_papers_11_1'],
		['GET',		 '/papers/Lightning_Protection_System',							'Default#papers_11_2',  'default_papers_11_2'],
		['GET',		 '/papers/Lightning_Risk',										'Default#papers_11_3',  'default_papers_11_3'],
		['GET',		 '/papers/SPD',													'Default#papers_11_4',  'default_papers_11_4'],
		['GET',		 '/papers/Storm_detection',										'Default#papers_11_5',  'default_papers_11_5'],
		['GET',		 '/papers/Various',												'Default#papers_11_6',  'default_papers_11_6'],

		['GET',		 '/press_review',												'Default#press_review', 'default_press_review'],

		['GET',		 '/portal',														'Default#portal',  		'default_portal'],

		['GET',		 '/contact/Antibes',											'Default#contact_1',  	'default_contact_1'],
		['GET',		 '/contact/China',												'Default#contact_2',  	'default_contact_2'],
		['GET',		 '/contact/Guadeloupe',											'Default#contact_3',  	'default_contact_3'],
		['GET',		 '/contact/Indian_Ocean',										'Default#contact_4',  	'default_contact_4'],
		['GET',		 '/contact/Martinique',											'Default#contact_5',  	'default_contact_5'],
		['GET',		 '/contact/New_Caledonia',										'Default#contact_6',  	'default_contact_6'],
		['GET',		 '/contact/Paris',												'Default#contact_7',  	'default_contact_7'],
		['GET',		 '/contact/Perpignan',											'Default#contact_8',  	'default_contact_8'],
		['GET',		 '/contact/Portugal',											'Default#contact_9',  	'default_contact_9'],
		['GET',		 '/contact/Reims',												'Default#contact_10',  	'default_contact_10'],
		['GET',		 '/contact/SEFTIM_worldwide',									'Default#contact_11',  	'default_contact_11'],


		// User
		['GET|POST', '/register', 				'Security#register', 		'security_register'],
		['GET|POST', '/login', 					'Security#login', 			'security_login'],
		['GET|POST', '/forget', 				'Security#forget', 			'security_forget'],
		['GET|POST', '/profil', 				'Security#profil', 			'security_profil'],
		['GET|POST', '/profil/update', 			'Security#updateProfil',	'security_update'],
		['GET',		 '/logout', 				'Security#logout', 			'security_logout'],

		// ---- Back office ----
		// Admin / Mod
		['GET',		 '/cpanel/users', 			'CPanel#users', 			'cpanel_users'],
		['GET',		 '/cpanel/upUser/[i:id]', 	'CPanel#upUser', 			'cpanel_upUser'],
		['GET',		 '/cpanel/articles',		'CPanel#articles', 			'cpanel_articles'],
		['GET|POST', '/cpanel/newArticle',		'CPanel#newArticle', 		'cpanel_newArticle'],
		['GET|POST', '/cpanel/article/[i:id]',	'CPanel#article', 			'cpanel_article'],
	);
