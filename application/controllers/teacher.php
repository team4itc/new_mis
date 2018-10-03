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
		$sql ="SELECT DISTINCT gro,std_level FROM student where depwork='$tdp' order by std_level" ; 
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		//var_dump($data['rs']);
		$this->load->view("teacher/check_lineup",$data);
}
	public function checkhomeroom()
	{ 
		$tdp=$this->session->userdata('t_dep');
		$sql ="SELECT DISTINCT gro,std_level FROM student where depwork='$tdp' order by std_level" ; 
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		$this->load->view('teacher/check_homeroom',$data);
	}
	public function checkdepartment()
	{ 
		$tdp=$this->session->userdata('t_dep');
		$sql ="SELECT DISTINCT gro,std_level FROM student where depwork='$tdp' order by std_level" ; 
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		$this->load->view('teacher/check_department',$data);
	}
	public function checkscout()
	{ $tdp=$this->session->userdata('t_dep');
		$sql ="SELECT DISTINCT gro,std_level FROM student where depwork='$tdp' order by std_level" ; 
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
//checked
		public function checked($id)
    {
    	$tdp=$this->session->userdata('t_dep');
        $sql ="SELECT * FROM student where gro='$id'"; 
        $rs=$this->db->query($sql);
        $num_std = $rs->num_rows();
        $data['rs']=$rs->result_array();
		$this->load->view('teacher/checked',$data); 


		 if($this->input->post('SaveCheck') != Null){

			echo"<script language=\"JavaScript\">";
			echo"alert('<?= $num_std;?>')";
			echo"</script>"; 
		for($i=0;$i<$num_std;$i++){
			$chk[$i]=$this->input->post('Checked[]');
			echo"<script language=\"JavaScript\">";
			echo"alert('NUM =".$i."Chk =".$Chk[$i]."')";
			echo"</script>"; 
			}
    	}
	}
	public function sh_chk(){
		$num_std = $this->session->userdata('num');
		echo "num_std = ".$num_std;
		for($i=0;$i<=$num_std;$i++){
		
		$chk[$i]=$this->input->post('Checked[$i]');
		echo $chk[$i];
		}
		 	// $sql=$this->db->query("select * from student where code='".$chk[$i]."'");
			// $rows=$sql->result_array();
			// foreach ($rows as $sh) {
			// 	echo $sh['code'].'<br>';
			// }

		
	}
	public function ChedkUp()
	{

	}

//end checked

//profile
	public function profile()
	{
		$this->load->view('teacher/profile');

	}


//profile
	public function menu()
	{
		$this->load->view('teacher/menu');

	}

/*	public function logout()
	{
		$this->load->view('welcome/login');
		$this->session->session_destroy()('######');
	}*/
}