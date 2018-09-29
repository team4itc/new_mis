<?php
class welcome extends CI_Controller
{
public function __construct() {
		
        parent::__construct();
}

	public function index() 
	{ 	

		$this->load->view('index');

		if($this->input->post('username') == !Null) {

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

		$query_admin = $this->db->query("select * from admin where username = '$username' and password = '$password'");
		$chk_admin = $query_admin->num_rows();
		
		if($chk_admin == 1){
			foreach($query_admin->result() As $row){
			$id= $row->a_id;
			$name= $row->a_fname;
			$data = array(
			'id'=>$id,
			'name'=>$name
			);
			$this->session->set_userdata($data);
			}

			redirect("admin/main");
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
				redirect("header/main");
			}


			if($chk_hdr == 0 ){
				redirect("teacher/main");
			}
		}
		
		if($chk_prs ==0 AND $chk_std ==0){ 
			
			echo"<script language=\"JavaScript\">";
			echo"alert('เข้าสู่ระบบผิดพลาด')";
			echo"</script>";
		}
 	}
	}
}
		
	
?>

