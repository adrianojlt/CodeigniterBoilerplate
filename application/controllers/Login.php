<?php


class Login extends MX_Controller {
	
	
	function Login() {
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->library(array('carabiner', 'form_validation'));
	}
	
	
	
	
	
	/**
	 * check if someone is loged in, if so ... redirect them accordingly
	 */
	private function check_logon_users() {
		
		if ($this->ion_auth->is_admin()) {								
			redirect('Admin/index');
		}
	}

	
	
	
	
	/**
	 * Entry point
	 */
	public function index() {
		
		// check if someone is already logged in and redirect them if so ...
		$this->check_logon_users();
			
		// only enter here if the button submit is pressed
		if($this->input->post('login')) {
			
			// set form rules
			$this->form_validation->set_rules('user_name','user',		'required');
			$this->form_validation->set_rules('user_pass','password', 	'required');
			
			// define error delimiters so these can be customized with css styles
			$this->form_validation->set_error_delimiters('<p class="error">','</p>');
				
			// see if the previous rules are ok ... 
			if ($this->form_validation->run()) {
				if ($_POST) {
					$user = $this->input->post('user_name', true);
					$pass = $this->input->post('user_pass', true);
					
					// log in ... 
					if ($this->ion_auth->login($user,$pass,false)) {
						if ($this->ion_auth->is_admin()) redirect("Admin/index");
					}
					else {$this->showForm(); }
				}
			}
			else {	// ... the rules dont apply? show login form again ...
				$this->showForm();
			}
		}
		else {		// ... submite button not pressed? display the login form again ...
			$this->showForm();
		}			
	}
	
	
	
	/**
	 * Show login form
	 */
	private function showForm() {
		$this->load->view('loginForm');
	}
	
	
}



