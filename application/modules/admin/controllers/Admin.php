<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {

	public function __construct() {

		parent::__construct();

		//$this->template->set_layout('AdminLayout');
		//$this->template->set_partial('AdminNavBar', 'partials/AdminNavBar');
		//$this->template->set_partial('AdminNavBar', 'partials/AdminB3NavBar');
		//$this->template->set_partial('AdminSideBar', 'partials/AdminSideBar');

		//$this->carabiner->css('adminStyle.css');
	}

	public function index()
	{
		$this->template->set('assets',array('jquery','bootstrap3'));
		$this->template->build('AdminBodyIndex');
	}

	public function users() 
	{
		$this->template->set('assets',array('jquery','bootstrap3'));
		$this->template->build('AdminBodyUsers');
	}

	public function calendar() 
	{
		$this->template->set('assets',array('jquery','bootstrap3'));
		$this->template->build('AdminBodyCalendar');
	}

	public function test() 
	{
		$this->template->set('assets',array('jquery','bootstrap3'));
		$this->template->build('AdminBodyTest');
	}

	public function uiElements() 
	{
		
	}

	public function systemSettings()
	{
		$this->template->set('assets',array('jquery','bootstrap3'));
		$this->template->build('AdminBodySystemSettings');
	}

	public function logout() {
		$this->ion_auth->logout();
		redirect('Main/index');	
	}

	public function tmp() {
		//$this->firephp->log($active,'active');

	}
}

