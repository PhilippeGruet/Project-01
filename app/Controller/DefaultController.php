<?php
namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{
	public function home() {
		
		$this->show('default/home');
	}

	public function version() {
		$_SESSION["locale"] = $_GET["lang"];
		getApp()->setLocale($_GET['lang']);

		$this->redirect('http://' . $_SERVER['HTTP_HOST'] . $_GET['cP']);
	}

	public function article($articleId) {

		$this->show('default/article', ["articleId" => $articleId]);
	}

	// Old navbar
	public function company_1() {
		$this->show('pages/company/company_1');
	}
	public function company_2_1() {
		$this->show('pages/company/company_2_1');
	}
	public function company_2_2() {
		$this->show('pages/company/company_2_2');
	}
	public function company_2_3() {
		$this->show('pages/company/company_2_3');
	}
	public function company_2_4() {
		$this->show('pages/company/company_2_4');
	}
	public function company_2_5() {
		$this->show('pages/company/company_2_5');
	}
	public function company_3() {
		$this->show('pages/company/company_3');
	}
	public function company_4() {
		$this->show('pages/company/company_4');
	}

	public function means_1() {
		$this->show('pages/means/means_1');
	}
	public function means_2_1() {
		$this->show('pages/means/means_2_1');
	}
	public function means_2_2() {
		$this->show('pages/means/means_2_2');
	}
	public function means_2_3() {
		$this->show('pages/means/means_2_3');
	}
	public function means_3() {
		$this->show('pages/means/means_3');
	}
	public function means_4() {
		$this->show('pages/means/means_4');
	}
	public function means_4_1() {
		$this->show('pages/means/means_4_1');
	}
	public function means_5() {
		$this->show('pages/means/means_5');
	}

	public function training_1() {
		$this->show('pages/training/training_1');
	}
	public function training_2() {
		$this->show('pages/training/training_2');
	}
	public function training_3() {
		$this->show('pages/training/training_3');
	}

	public function papers_1() {
		$this->show('pages/papers/papers_1');
	}
	public function papers_2() {
		$this->show('pages/papers/papers_2');
	}
	public function papers_3() {
		$this->show('pages/papers/papers_3');
	}
	public function papers_4() {
		$this->show('pages/papers/papers_4');
	}
	public function papers_5() {
		$this->show('pages/papers/papers_5');
	}
	public function papers_6() {
		$this->show('pages/papers/papers_6');
	}
	public function papers_7() {
		$this->show('pages/papers/papers_7');
	}
	public function papers_8() {
		$this->show('pages/papers/papers_8');
	}
	public function papers_9() {
		$this->show('pages/papers/papers_9');
	}
	public function papers_10() {
		$this->show('pages/papers/papers_10');
	}
	public function papers_11() {
		$this->show('pages/papers/papers_11');
	}
	public function papers_11_1() {
		$this->show('pages/papers/papers_11_1');
	}
	public function papers_11_2() {
		$this->show('pages/papers/papers_11_2');
	}
	public function papers_11_3() {
		$this->show('pages/papers/papers_11_3');
	}
	public function papers_11_4() {
		$this->show('pages/papers/papers_11_4');
	}
	public function papers_11_5() {
		$this->show('pages/papers/papers_11_5');
	}
	public function papers_11_6() {
		$this->show('pages/papers/papers_11_6');
	}

	public function press_review() {
		$this->show('pages/press_review/press_review');
	}

	public function portal() {
		$this->show('pages/portal/portal');
	}

	public function contact_1() {
		$this->show('pages/contact/contact_1');
	}
	public function contact_2() {
		$this->show('pages/contact/contact_2');
	}
	public function contact_3() {
		$this->show('pages/contact/contact_3');
	}
	public function contact_4() {
		$this->show('pages/contact/contact_4');
	}
	public function contact_5() {
		$this->show('pages/contact/contact_5');
	}
	public function contact_6() {
		$this->show('pages/contact/contact_6');
	}
	public function contact_7() {
		$this->show('pages/contact/contact_7');
	}
	public function contact_8() {
		$this->show('pages/contact/contact_8');
	}
	public function contact_9() {
		$this->show('pages/contact/contact_9');
	}
	public function contact_10() {
		$this->show('pages/contact/contact_10');
	}
	public function contact_11() {
		$this->show('pages/contact/contact_11');
	}



}
