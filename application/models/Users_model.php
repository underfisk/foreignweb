<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends CI_Model
{
	function __construct(){
	}

	function getID($usr)
    {
        $q = $this->db->where('usr',$usr);
        $q = $this->db->select('id');
        $q = $this->db->get('users',1);
        return $q->num_rows() > 0 ? $q->row()->id : false;
    }

	function isValid($usr,$pwd)
	{
		$q = $this->db->where('usr',$usr);
		$q = $this->db->where('pwd',$pwd);
		$q = $this->db->get('users');
		return $q->num_rows() > 0 ? true : false;
	}
	
	function emailExists($e){
		$this->db->select('email',$e);
		return $this->db->num_rows() > 0 ? true : false;
	}
	
	function Add($u_data)
	{
		return $this->db->insert('users',$u_data);
	}
	
	function Remove($id)
	{
		$this->db->select('id',$id);
		return $this->db->delete('users');
	}
	
	function Update($id,$u_data)
	{
		$this->db->where('id',$id);
		return $this->db->update('users',$u_data);
	}
	
	function byUsr($usr,$exists_only = false)
	{
		$q = $this->db->where('usr',$usr);
		$q = $this->db->get('users');
		if ($q->num_rows() > 0){
			if (!$exists_only){
				return $q->result_array();
			}
			else
				return true;
		}
		else
			return false;
	}

	function byId($id,$exists_only = false)
	{
		$q = $this->db->where('id',$id);
		$q = $this->db->get('users');
		if ($q->num_rows() > 0){
			if (!$exists_only){
				return $q->result_array();
			}
			else
				return true;
		}
		else
			return false;

	}
	
	function all()
	{
		$this->db->get('users');
		return $this->db->num_rows() > 0 ? $this->db->result_array() : false;
	}
	
	function Total()
	{
		$this->db->get('users');
		return $this->db->num_rows();
	}

	function HashExists($h)
	{
		$q = $this->db->where('hash',$h);
		$q = $this->db->get('users',1);
		return $q->num_rows() > 0 ? $q->result_array() : false;
	}

}

?>