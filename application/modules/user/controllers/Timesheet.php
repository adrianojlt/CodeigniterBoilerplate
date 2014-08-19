<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Timesheet extends User_Controller {

	public function __construct() {
		parent::__construct();

		//$this->template->set_layout('UserLayout');
		$menu = array('main'		=> 'Main', 'admin'		=> 'Admin');
		$this->template->set('menu', $menu);
	}

	public function index() {
		$this->carabiner->js('admin/timesheet.js');
		$this->template->build('UserBodyTimesheetIndex');
	}

	public function edit( $rowid = 0 ) {
		$this->template->build('UserBodyTimesheetEdit');
	}

	private function _tmp() {
		
	}
}

