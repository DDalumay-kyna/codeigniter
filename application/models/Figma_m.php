<?php
class Figma_m extends CI_Model 
{
	
	function saverecords($data)
	{
        $this->db->insert('users',$data);
        return true;
	}
	
	/*View*/
	function display_records()
	{
		$query=$this->db->get("users");
		return $query->result();
	}
}	