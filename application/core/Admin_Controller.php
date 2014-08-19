<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MX_Controller {

	public function __construct() {

		parent::__construct();

		$this->set_default_layout();
		//$this->set_sb2_layout();

		//if (!$this->ion_auth->is_admin()) redirect('Login/index');
	}

	private function set_default_layout() {
		$this->template->set_theme('default');
		$this->template->set_layout('AdminLayout');
		$this->template->set_partial('AdminNavBar', 'partials/AdminB3NavBar');

	}

	private function set_sb2_layout() {
		$this->template->set_theme('default');
		$this->template->set_layout('AdminSB2Layout');
		$this->template->set_partial('AdminNavBar', 'partials/AdminSB2NavBar');
	}
	
	public function logout() {
		$this->ion_auth->logout();
		redirect('Main/index');	
	}
}
