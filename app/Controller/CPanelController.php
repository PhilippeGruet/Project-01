<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArticlesModel;
use \Model\Trans_articlesModel;
use \Model\ParagraphsModel;

class CPanelController extends Controller
{
	// Users list
	public function users() {
		// Get users from db

		$this->show('cpanel/users');
	}

	// Articles list
	public function articles() {
		// Get articles from db

		$this->show('cpanel/articles');
	}

	// Article creation page
	public function newArticle() {
		// ajouter recherche des articles deja écrit
		// pour éventuel link vers une traduction

		$messages = [];

		if (!empty($_POST)) {
			$title 			= $_POST['title'];
			$articleLang 	= $_POST['articleLang'];
			$originArticle 	= $_POST['originArticle'];
			$paragraphsNb = sizeof($_POST) - 4;
			for ($i=1; $i <= $paragraphsNb; $i++) {
				$paragraphs[$i] = $_POST[$i];
			}

			// les vérifs,
			if ( empty($title) ) {
				$messages = ['title' => "Veuillez donner un titre à votre article"];
			}
			if ( empty($_POST['date']) ) {
				$date = date("Y-m-d");
			} else {
				$date = substr($_POST['date'], 6, 4).substr($_POST['date'], 3, 2).substr($_POST['date'], 0, 2);
			}
			// si erreurs, renvoie du $_POST

			if (empty($messages)) {
				if ( empty($originArticle) ) {
					// New article entry
					$articles_manager = new ArticlesModel();
					$id_article = $articles_manager->insert([
						'id_article' => NULL,
					]);
				} else {
					$id_article['id_article'] = $originArticle;
				}

				$trans_articles_manager = new Trans_articlesModel();
				$id_trans_article = $trans_articles_manager->insert([
					'id_article' 	=> $id_article['id_article'],
					'name' 			=> $title,
					'id_author' 	=> $this->getUser()['id_user'],
					'lang' 			=> $articleLang,
					'article_date'  => $date,
				]);

				$paragraphs_manager = new ParagraphsModel();
				foreach ($paragraphs as $key => $paragraph) {
					$paragraphs_manager->insert([
						'id_trans_article'  => $id_trans_article['id_trans_article'],
						'text' 				=> $paragraph['text'],
						'img' 				=> $paragraph['img'],
						'format' 			=> $paragraph['format'],
					]);
				}

				$messages = ['success' => "Article ajouté."];
			}

		} else {
			// Default values
			$title = "";
			$articleLang = "";
			$originArticle = "";
			$paragraphs[1] = ['text'=>"",'img'=>"",'format'=>"2"];
		}

		$trans_articles_manager = new Trans_articlesModel();
		$trans_articles = $trans_articles_manager->findAll();

		$this->show('cpanel/newArticle', [
			'trans_articles' => $trans_articles,
			'title' 		 => $title,
			'articleLang' 	 => $articleLang,
			'originArticle'  => $originArticle,
			'paragraphs' 	 => $paragraphs,
			'messages' 		 => $messages,
		]);
	}

	// Update article
	public function article($idArticle) {
		// if POST...
		// Display same page as newArticle()
		$this->show('cpanel/articles');
	}

}
