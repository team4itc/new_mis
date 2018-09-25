<?php
class welcome extends CI_Controller //Controller ชื่อ product
{
public function __construct() //คือการเรียกใช้เป็นอันดับแรก
{
		
        parent::__construct();
		 //$this->load->model('mymodel');
		// $this->load->library('form_validation');
}


///////////////////   search   ////////////////////////////////////////////////////////////////////////////////////	
	//$this->load->library('session'); 
	public function search()
    {
        $keyword  =   $this->input->post('keyword');
		//////////////////////////////// รับตัวแปล จาก form  /////////////////////////////////////////////////
        $data['rs']  =  $this->mymodel->search($keyword);
		//////////////////// class model ที่อยู่ในไฟล์ models -> method search ////////////////////////////////////////
        $this->load->view('main',$data);
		////////////////// file main.php //////////////////////////////////////////////////////////////
    }



///////////////////   login   ////////////////////////////////////////////////////////////////////////////////////	
	public function index() //method หรือ  function ชื่อว่า  index
	{ 
		$this->load->view('index');
		/*$this->form_validation->set_message('user','custom_validation',"dsfsfdsfds");
		$this->form_validation->set_rules('pass','Password','required');
		if($this->form_validation->run() == TRUE){
			
		}

*/

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
				redirect("header/main");
			}


			if($chk_hdr == 0 ){
				redirect("teacher/main");
			}
		}
		
		if($chk_prs ==0 AND $chk_std ==0){ 
			echo "LOGIN FAIL";
		}
 
	}
		
		
		/*
		

		if($post = $this->input->post()){
			extract($post);
			$sql = "select * from tb_member where member_name = '$user' and member_tel = '$pass'";

			$ret = $this->db->query($sql);
			if($ret->num_rows()){
				$data_ret = $ret->result();
				$this->session->set_userdata('member_name',$data_ret[0]->member_name);
				$this->session->set_userdata('member_tel',$data_ret[0]->member_tel);
				redirect("member/search","refresh");
				exit();
				// echo $rs = "welcome";
			}else{
				echo "<script>alert('ไมสามารถเข้าสู่ระบบได้');</script>";
			}
		}
		//$data['message'] = "authen class";
		$this->load->view('login',$data); 
		
	}



///////////////////   main   ////////////////////////////////////////////////////////////////////////////////////	

	public function main() //method หรือ  function ชื่อว่า  index
	{
		$rs = $this->db->get("tb_member");
		$data['rs'] = $rs->result_array();
		$this->load->view("main",$data);
		//$this->load->view("member/index",$data);
		/*
		$sql = "select * from tb_member order by id asc";
		$rs = $this->db->query($sql);
		$data['rs'] = $rs->result_array();
		$this->load->view("member/index",$data);
		//                  โฟลเดอ   / ไฟล์    */       
	



public function main() //method หรือ  function ชื่อว่า  index
	{
		$id=$this->session->userdata('id');
		echo $id;
		$name=$this->session->userdata('name');
		echo $name;
		
		$member_tel=$this->session->userdata('member_tel');
		echo $member_tel;

	}

/////////////////////////  insert /////////////////////////////////////////////////////////////////////////////////////
	

	public function add(){ //method หรือ  function ชื่อว่า  add

		$this->load->view("add");
		
	if($this->input->post("save")!= null) //ถ้าข้อมูลที่รับมาจาก form ไม่เท่ากับ ค่าว่าง
		{
			$ins = array( //และเก็บค่าข้อมูลแบบ array
			"member_name" => $this->input->post("m_name") ,
			"member_tel" => $this->input->post("m_tel") ,
			"member_address" => $this->input->post("m_addr")

			//field ในฐานข้อมูล			//รับค่าแบบ post  //ตัวแปลจาก form
		);
			$name = $this->input->post("m_name"); 
			$tel = $this->input->post("m_tel");
			$sql = $this->db->query("select * from tb_member where member_name = '$name' or member_tel = '$tel' ");
			$chk = $sql->num_rows();
			//echo $chk;
			if($chk == null){
				echo "<script>alert('เพิ่มข้อมูลสำเร็จ');</script>";
				$this->db->insert('tb_member', $ins);
			}else{
				echo "<script>alert('มีข้อมูลนี้อยูแล้ว');</script>";
			}
		}
	}



///////////////////   delete   ////////////////////////////////////////////////////////////////////////////////////	


	public function del($id) //method หรือ  function ชื่อว่า  del และรับค่า  $id จาก form
	{						//ฐานข้อมูล          //field  //ตัวแปล
		$this->db->delete('tb_member', array('id' => $id)); 
		redirect("member/search","refresh");
		exit();
	}



///////////////////   edit   ////////////////////////////////////////////////////////////////////////////////////	

	public function edit($id) //method หรือ  function ชื่อว่า  del และรับค่า  $id จาก form
	{
		
		if($this->input->post("save")!= null) //ถ้าข้อมูลที่รับมาจาก form ไม่เท่ากับ ค่าว่าง
		{
			$ins = array( //และเก็บค่าข้อมูลแบบ array
			"member_name" => $this->input->post("m_name") ,
			"member_tel" => $this->input->post("m_tel") ,
			"member_address" => $this->input->post("m_addr")
			//field ในฐานข้อมูล		 //รับค่าแบบ post  //ตัวแปลจาก form
		);				//	ชื่อฐานข้อมูล
		$this->db->where('id', $id);
		$this->db->update('tb_member', $ins);
		//ไปยัง conntorller "member"
		redirect("member/search","refresh");
		exit();
		}

		$sql = "select * from tb_member where id='$id'";
		$rs = $this->db->query($sql);
		//num_row คือ method ใช้ในการนับจำนวนแถวของข้อมลที่เรา  qurey มาว่ามี่ข้อมูลหรือปล่าว
		if($rs->num_rows()==0){
			$data['rs']=array();
		}else{
			//row_array คือ การดึงค่าจาก field field เดียว เหมาะสำหรับ การเรียงข้อมูลเพียงแค่แถวเดียว จะ แตกต่างจาก  result_array
			$data['rs']=$rs->row_array();
		}
		$this->load->view("edit",$data);
	}






///////////////////   logout   ////////////////////////////////////////////////////////////////////////////////////	

	public function logout(){
		$this->session->sess_destroy();
		redirect("member","refresh");
		exit();
	}

	
}
?>

