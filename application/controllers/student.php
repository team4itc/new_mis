<?php
class student extends CI_Controller
{
public function __construct()
{
        parent::__construct();
}
	public function main()
	{ 
		$this->load->view('student/view_main');
	}
}