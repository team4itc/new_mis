<?php
class student extends CI_Controller
{
public function __construct()
{
        parent::__construct();
}
	public function index()
	{ 
		$this->load->view('student/dashboard');
	}


	//conclude

	public function concludelineup()
	{ 
		$this->load->view('student/conclude_lineup');
	}
	public function concludehomeroom()
	{ 
		$this->load->view('student/conclude_homeroom');
	}
	public function concludedepartment()
	{ 
		$this->load->view('student/conclude_department');
	}
	public function concludescout()
	{ 
		$this->load->view('student/conclude_scout');
	}
	public function concludespecial()
	{ 
		$this->load->view('student/conclude_special');
	}


//end conclude


	//profile
	public function profile()
	{
		$this->load->view('student/profile');

	}
}