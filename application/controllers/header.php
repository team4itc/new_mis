<?php
class header extends CI_Controller //Controller ชื่อ product
{
public function __construct() //คือการเรียกใช้เป็นอันดับแรก
{
	//7071003	
        parent::__construct();
		 $this->load->model('mymodel');
		
		// $this->load->library('form_validation');
}
public function index(){

	$this->load->view('header/dashboard');
}
public function manage()
    {
		if($this->input->post('btnS')!=null){
        $keyword  =   $this->input->post('keyword');

		$sql = "SELECT * FROM activity WHERE act_name like '%$keyword%' AND type = 'กิจกรรมแผนก' ";
		$show = $this->db->query($sql);
		$data['rs'] = $show->result_array();
		
		}
		else{
		$sql = "SELECT * FROM activity WHERE type ='กิจกรรมแผนก'";
		$show = $this->db->query($sql);
		$data['rs'] = $show->result_array(); 
		}
		//////////////////////////////// รับตัวแปล จาก form  /////////////////////////////////////////////////
        //$data['rs']  =  $this->mymodel->manage($keyword);
		//////////////////// class model ที่อยู่ในไฟล์ models -> method search ////////////////////////////////////////
        $this->load->view('header/manage',$data);
		////////////////// file main.php //////////////////////////////////////////////////////////////
    }

public function del($act_id) //method หรือ  function ชื่อว่า  del และรับค่า  $id จาก form
	{						//ฐานข้อมูล          //field  //ตัวแปล
		$this->db->delete('activity', array('act_id' => $act_id)); 
		redirect("header/manage/","refresh");
		exit();
	}

	
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
		redirect("welcome","refresh");
		exit();
	}

}
?>