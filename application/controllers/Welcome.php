<?php
class welcome extends CI_Controller //Controller ชื่อ product
{
public function __construct() //คือการเรียกใช้เป็นอันดับแรก
{
		
        parent::__construct();
		
}


///////////////////   login   ////////////////////////////////////////////////////////////////////////////////////	
	public function index() //method หรือ  function ชื่อว่า  index
	{ 
	
		
		$this->load->view('index');
		$username =  $this->input->post('username');
		$password =  $this->input->post('password');  
		$query_std = $this->db->query("select * from student where code = '$username' and pin_id = '$password'");
		$chk_std = $query_std->num_rows();
		
		if($chk_std == 1){
			foreach($query_std->result() As $row){
			$id= $row->code;
			$name= $row->name;
			$data = array(
			'id'=>$id,
			'name'=>$name
			);
			$this->session->set_userdata($data);
			}

			redirect("student/main");
		}

		$query_prs = $this->db->query("SELECT * from person where username = '$username' and password = '$password'");
		$chk_prs = $query_prs->num_rows();
		
		if($chk_prs == 1){



			$rs_her= $query_prs->result();
			$person_id=$rs_her[0]->person_id;
			

			$query_hdr = $this->db->query("SELECT * From header WHERE teacher_id = '$person_id'");
			$chk_hdr = $query_hdr->num_rows();


		foreach($query_prs->result() As $row){
			$id= $row->person_id;
			$name= $row->name;
			$data = array(
			'id'=>$id,
			'name'=>$name
			);
			$this->session->set_userdata($data);
			}
 

			if($chk_hdr == 1 ){
				redirect("header");
			}


			if($chk_hdr == 0 ){
				redirect("teacher/main");
			}
		}
		
		if($chk_prs ==0 AND $chk_std ==0){ 
			echo "LOGIN FAIL";
		}
	}

	
}
?>

