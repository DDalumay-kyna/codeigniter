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

	function fetch_single_data($id)
	{
		$this->db->where("id",$id);
		$query = $this->db->get("users");
		return $query;
	}

	function update_data($data, $id)
	{
		$this->db->where("id",$id);
		$this->db->update("users",$data);
	}

	function can_login($email, $password)
	{
		$this->db->where('email',email);
		$this->db->where('password',password);
		$query = $this->db->get('users');

		if($query->num_row() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}	