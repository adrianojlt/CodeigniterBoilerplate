<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Controller extends MX_Controller {

	public function __construct() {

		parent::__construct();

		//$this->_check_credentials();

		//$this->load->library(array('carabiner','template','fuelmenu','ion_auth'));
		//$this->template->set_theme('default');
		$this->template->set_layout('UserLayout');
		$this->template->set_partial('UserMainMenu', 'partials/UserMainMenu');
	}

	private function _check_credentials() {

		if ( $this->ion_auth->in_group("user") ) {

		}
		else {
			redirect('Login/index');
		}
	}
	
	public function logout() {
		$this->ion_auth->logout();
		redirect('Main/index');	
	}
}
