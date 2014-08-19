<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Timesheets extends Admin_Controller {

	public function __construct() {

		parent::__construct();

		$this->template->set_partial('AdminTablesSideBar', 'partials/AdminTablesSideBar');
	}

	public function index()
	{
		$this->template->set('assets',array());

		//$this->carabiner->js('admin/tables.js');
		//$this->carabiner->css('school.css');

		$this->template->build('content/timesheets/AdminBodyTimesheets');
	}

	public function client( $id = 0 ) {

	}

	public function user( $id = 0 ) {
		
	}

	public function tmp() {

		//$this->firephp->log($active,'active');

		$sampleRecords = '
			{
				"Result":"OK",
					"Records":[
					  	{"PersonId":1,"Name":"Benjamin Button","Age":17,"RecordDate":"\/Date(1320259705710)\/"},
					  	{"PersonId":2,"Name":"Douglas Adams","Age":42,"RecordDate":"\/Date(1320259705710)\/"},
					  	{"PersonId":3,"Name":"Isaac Asimov","Age":26,"RecordDate":"\/Date(1320259705710)\/"},
						{"PersonId":4,"Name":"Thomas More","Age":65,"RecordDate":"\/Date(1320259705710)\/"}
					]
			}
		';

		echo $sampleRecords;
	}
}

