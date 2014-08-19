<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Admin_Controller {

	public function __construct() {

		$this->template->set_partial('AdminTablesSideBar', 'partials/AdminTablesSideBar');

		parent::__construct();
	}

	public function index()
	{
		redirect('admin/users/listusers');
	}

	public function listusers() {
		$this->template->set('assets',array());
		$this->template->build('content/users/AdminBodyListUsers');
	}

	public function newuser() {
		$this->template->set('assets',array());
		$this->template->build('content/users/AdminBodyNewUser');
	}

	public function edituser( $id = 0 ) {
		$this->template->set('assets',array());
		$this->template->build('content/users/AdminBodyEditUser');
	}


	public function tmp() {
		//$this->firephp->log($active,'active');
	}
}

