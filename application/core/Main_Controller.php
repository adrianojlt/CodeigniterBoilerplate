<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_Controller extends MX_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->template->set_layout('MainLayout');
		$this->template->set_partial('partial', 'partials/testPartial');
	}
	
}
