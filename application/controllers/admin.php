<?php
class admin extends CI_Controller 
{
public function __construct() 
{
		
        parent::__construct();
}


	public function Main(){ 
		$this->load->view('admin/index');
	}
	public function Report(){ 
		$this->load->view('admin/Report');
	}
	public function Act1(){ 
		$this->load->view('admin/Act1');
	}
	public function Act2(){ 
		$this->load->view('admin/Act2');
	}
	public function Mydata(){ 
    $id=$this->session->userdata('id');

	    $sql = "SELECT * FROM admin WHERE a_id = '$id'";
		$rs= $this->db->query($sql);
		$data['rs']= $rs->result_array();
		$this->load->view('admin/Mydata',$data);
	}

	public function Edit_Pass($id){ 
    
	    $sql = "SELECT * FROM admin WHERE a_id = '$id'";
		$rs= $this->db->query($sql);
		$data['rs']= $rs->result_array();
		$this->load->view('admin/Edit_Pass',$data);
	}
	public function LogOut(){ 
		$this->load->view('admin/LogOut');
	}
	
	

	public function showActivity(){ 
		$sql="SELECT * FROM activity WHERE type = 'กิจกรรมเข้าแถว'";
		$rs= $this->db->query($sql);
		$data['rs']= $rs->result_array();
		$this->load->view('admin/showActivity',$data);
	}
		public function showDepart(){ 
		$sql="SELECT * FROM department";
		$rs= $this->db->query($sql);
		$data['rs']= $rs->result_array();
		$this->load->view('admin/showdepart',$data);
	}
	
	
}
////Controller

	 	//ดึงค่า act_have ออกมา เพื่อที่จะทำ +1 ของค่าที่มีอยู่ 
	 	/*$show = $this->db->query($sql1);
	 	if($show->num_rows()==0){
			$data['show']=array();
			}else {
				$data['show'] = $show->row_array();
			}
	 	
		$data = array(
		'report_id' => '',
  		'user_id' => $this->input->post("user_id") ,
  		'act_id' => $this->input->post("act_id") );
   		$this->db->insert('report', $data); 
   		redirect("welcome/user_index","refresh");
   		exit();
		*/
	

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
?>

