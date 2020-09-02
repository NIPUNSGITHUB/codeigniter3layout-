<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
 
	public function index()
	{
		$this->data['some_text'] = "Test";
		$this->page = "welcome_message";	
		$this->layout();
	}

	public function employee()
	{
		$this->data['some_text'] = "Different page";
		$this->page = "master_files/employee_master";	
		$this->layout();
	}
}
