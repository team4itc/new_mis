<?php
Class Mymodel Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function manage($keyword)
    {
       /*$this->db->like('act_name',$keyword);
		$this->db->where('act_id', '1');
        $query  =   $this->db->get('activity');
        return $query->result();*/
    }
	  
}
?>