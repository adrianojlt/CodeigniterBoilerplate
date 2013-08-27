<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MX_Controller {

	public function __construct() {

		parent::__construct();

		$this->template->set_layout('AdminLayout');
		$this->template->set_partial('AdminNavBar', 'partials/AdminB3NavBar');
		//$this->template->set_partial('AdminSideBar', 'partials/AdminSideBar');

		//if (!$this->ion_auth->is_admin()) redirect('Login/index');
	}
	
	public function logout() {
		$this->ion_auth->logout();
		redirect('Main/index');	
	}
}
