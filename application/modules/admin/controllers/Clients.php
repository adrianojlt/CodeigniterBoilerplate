<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends Admin_Controller {

	public function __construct() {

		$this->template->set_partial('AdminTablesSideBar', 'partials/AdminTablesSideBar');

		parent::__construct();
	}

	public function index()
	{
		redirect('admin/clients/listclients');
		//$this->template->set('assets',array());
		//$this->carabiner->js('admin/timesheet.js');
		//$this->carabiner->css('school.css');
		//$this->template->build('content/client/AdminBodyListClient');
	}

	public function listclients() {
		$this->template->set('assets',array());
		$this->template->build('content/client/AdminBodyListClients');
	}
	public function newclient() {
		$this->template->set('assets',array());
		$this->template->build('content/client/AdminBodyNewClient');
	}

	public function editclient( $id = 0 ) {
		$this->template->set('assets',array());
		$this->template->build('content/client/AdminBodyEditClient');
	}

	public function user( $id = 0 ) {

	}


	public function tmp() {
		//$this->firephp->log($active,'active');
	}
}

