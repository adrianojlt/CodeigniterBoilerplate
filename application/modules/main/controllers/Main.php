<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends Main_Controller {

	public function __construct() {
		
		parent::__construct();

		$this->template->set_layout('MainLayout');
		$this->template->set_partial('partial', 'partials/testPartial');

		$menu = array(
			'main'		=> 'Main',
			'user'		=> 'User',
			'admin'		=> 'Admin'
		);

		$this->template->set('menu', $menu);
	}

	public function index()
	{
		$this->_tmp();
		$this->template->build('MainBodyIndex');
	}

	private function _tmp() {

		//$this->ion_auth->login('admin', 'admin@admin.com', true);
		//$user = $this->ion_auth->user()->row();
		//$users = $this->ion_auth->users()->result();
		//$this->firephp->log($user, 'user: ');
		//$this->firephp->log($users, 'users: ');
		//$this->ion_auth->logout();
	}
}

