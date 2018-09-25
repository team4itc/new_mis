<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		
}
	public function index(){
			$this->load->view('index');
	}
	public function chk_login()
	{	
		$username  = $this->input->post('username');
		$password  = $this->input->post('password');

	$QueryStd = $this->db->query("SELECT * from user where username='$username' && password='$password'");
	$ChkStd = $QueryStd->num_rows();

	$QueryTch = $this->db->query("SELECT * from teacher where username='$username' && password='$password'");
	$ChkTch = $QueryTch->num_rows();



		foreach ($QueryStd->result() As $row){
		$id=$row->id;
		$name=$row->username;
		$data = array(
			'id'=>$id,
			'name'=>$id
			);
		$this->session->set_userdata($data);
	 	
	}

		if($ChkStd==1){ 
			redirect("welcome/main","refresh");
		}
		if($ChkTch==1){ 
			redirect("welcome/admin_index","refresh");
		}
		if($ChkAdm==1){ 
			redirect("welcome/admin_index","refresh");
		}
	
		if($ChkStd == 0 AND $ChkTch == 0 AND $ChkAdm == 0){
			$this->load->view('LoginFail');
		}



	}


	public function main(){
		$id=$this->session->userdata('id');
		$name=$this->session->userdata('name');
		echo $id;
		echo $name;

	}
}
/////////////////////////////////////////////////////////////////////////////////////

	/*
	public function show(){
		$sql="SELECT * FROM user";x
		$rs= $this->db->query($sql);
		$data['rs']= $rs->result_array();
		$this->load->view('showview',$data);

	}

	public function addform(){
		$this->load->view('addview');
	} 
	public function add(){
	 	if($this->input->post('btnsave')!=null){
		$data = array(
		'id' => '',
  		'name' => $this->input->post("name") ,
  		'email' => $this->input->post("email") ,
  		'phone' => $this->input->post("phone") ,
   		'message' => $this->input->post("message") );
   		$this->db->insert('user', $data); 
   		redirect("welcome/show","refresh");
   		exit();
		}
	}



	public function del($id){
		echo "id=".$id;
		$this->db->delete('user', array('id'=>$id));
		redirect("welcome/show","refresh");
		exit();
	}
public function edit($id){
		$sql ="SELECT * FROM user WHERE id='$id'";
		$rs = $this->db->query($sql);
		if($rs->num_rows()==0){
			$data['rs']=array();
			}else {
				$data['rs'] = $rs->row_array();
			}
		
		$this->load->view('editview',$data);
		}
	

		

	public function edit2(	){
		if($this->input->post('btnsave')!=null){
		$id = $this->input->post("id");
		$data = array(
  		'name' => $this->input->post("name") ,
   		'email' => $this->input->post("email") ,
   		'phone' => $this->input->post("phone") ,
   		'message' => $this->input->post("message") );
   		$this->db->update('user', $data, array('id' => $id));
   		redirect("welcome/show","refresh");
   		exit();
	}
}
*/




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */