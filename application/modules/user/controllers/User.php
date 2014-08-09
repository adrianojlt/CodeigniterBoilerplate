<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends User_Controller {

	public function __construct() {
		parent::__construct();

		//$this->template->set_layout('UserLayout');
		$menu = array('main'		=> 'Main', 'admin'		=> 'Admin');
		$this->template->set('menu', $menu);
	}

	public function index() {
		$this->template->build('UserBodyIndex');
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

