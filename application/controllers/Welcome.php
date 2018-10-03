<?php
class welcome extends CI_Controller
{
public function __construct()
{
        parent::__construct();
}
	public function search()
    {
        $keyword  =   $this->input->post('keyword');
        $data['rs']  =  $this->mymodel->search($keyword);
        $this->load->view('main',$data);
    }

	public function index()
	{ 
		$this->load->view('index');
		$username = $this->input->post('username');
		$password = $this->input->post('password');  
		
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

			redirect("/student/index");
		}

		$query_prs = $this->db->query("SELECT * from person where username = '$username' and password = '$password'");
		$chk_prs = $query_prs->num_rows();
		
		if($chk_prs == 1){

			$rs_her= $query_prs->result();
			$person_id=$rs_her[0]->person_id;
			
			$sql_tcode = ("SELECT * from teacher where teacher_code ='$username'");
			$show=$this->db->query($sql_tcode);
			
			

			foreach ($show -> result() as $row)
			{
			    $t_group1=$row->std_gro1;
			    $t_group2=$row->std_gro2;
			    $t_group3=$row->std_gro3;
			    $t_dep=$row->teacher_dep;

			$data = array(
				't_group1'=>$t_group1,
				't_group2'=>$t_group2,
				't_group3'=>$t_group3,
				't_dep'=>$t_dep
						);
			$this->session->set_userdata($data);
			}
			$tdp=$this->session->userdata('t_dep');
			echo "t_dep =".$tdp;
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
				redirect("teacher/index");
			}
		}
		
		if($chk_prs ==0 AND $chk_std ==0){ 
		}
 
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect("member","refresh");
		exit();
	}
}