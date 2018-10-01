<?php
class teacher extends CI_Controller
{
public function __construct()
{
        parent::__construct();
}
	public function index()
	{  
		$this->load->view('teacher/dashboard');
	}
//check	
	public function checklineup()
	{ 
		$tdp=$this->session->userdata('t_dep');
		$sql ="SELECT * FROM student where depwork='$tdp'" ;
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		//var_dump($data['rs']);
		$this->load->view("teacher/check_lineup",$data);
	}
	public function checkhomeroom()
	{ 
		$sql ="SELECT * FROM student";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		$this->load->view('teacher/check_homeroom',$data);
	}
	public function checkdepartment()
	{ 
		$sql ="SELECT * FROM student";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		$this->load->view('teacher/check_department',$data);
	}
	public function checkscout()
	{ 
		$sql ="SELECT * FROM student";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		$this->load->view('teacher/check_scout',$data);
	}

//end check
//conclude

	public function concludelineup()
	{ 
		$this->load->view('teacher/conclude_lineup');
	}
	public function concludehomeroom()
	{ 
		$this->load->view('teacher/conclude_homeroom');
	}
	public function concludedepartment()
	{ 
		$this->load->view('teacher/conclude_department');
	}
	public function concludescout()
	{ 
		$this->load->view('teacher/conclude_scout');
	}
	public function concludespecial()
	{ 
		$this->load->view('teacher/conclude_special');
	}


//end conclude

//profile
	public function profile()
	{
		$this->load->view('teacher/profile');
	}

/*	public function logout()
	{
		$this->load->view('welcome/login');
		$this->session->session_destroy()('######');
	}*/
}