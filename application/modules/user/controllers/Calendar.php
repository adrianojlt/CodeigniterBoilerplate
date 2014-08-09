<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends User_Controller {

	public function __construct() {
		parent::__construct();

		//$this->template->set_layout('UserLayout');
		$menu = array('main'		=> 'Main', 'admin'		=> 'Admin');
		$this->template->set('menu', $menu);
	}

	public function index() {
		$this->template->build('UserBodyCalendar');
	}
	
	private function _tmp() {
		
	}
}

