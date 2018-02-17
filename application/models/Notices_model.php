<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notices_model extends CI_Model 
{
	function __construct(){
	
	}
	
	function all($limit = 10, $order_by = 'ASC')
	{
		$q = $this->db->order_by('ndate',$order_by);
		$q = $this->db->get('notices',$limit);
		return $q->num_rows() > 0 ? $q->result_array() : false;
	}
	/*
	* @param $id is used to retrieve the notice by id using the id given
	* @param $limit is used to limit how many results we want
	* @param $order_by is used to order the notices date, by default is ASC but can be desc
	* @param $exists_only is used to define if we want to get a return true or false in case that exists or not or the result_array()
	*/
	function byId($id, $limit = false, $order_by = 'ASC', $exists_only = false )
	{
		$this->db->select('nid',$id);
		$this->db->order_by('ndate',$order_by);
		$limit ? $this->db->get('notices',$limit) : $this->db->get('notices');
		if ($this->db->num_rows() > 0){
			if (!$exists_only){
				return $this->db->result_array();
			}
			else
				return true;
				
		}
		else
			return false; //either with exists only or not it would return false
	}
	
	//Returns the total of notices in the database
	function Total()
	{
		$this->db->get('notices');
		return $this->db->num_rows();
	}
	
	//Returns every notice by category with filter limit and by order
	function byCategory($category, $filter_count = 10, $order_by = 'ASC')
	{
		$this->db->select('ncategory',$category);
		$this->db->order_by('ndate',$order_by);
		$this->db->get('notices',$filter_count);
		return $this->db->num_rows() > 0 ? $this->db->result_array() : false;
	}
	
	//Returns every notice by this author
	function byAuthor($a_name)
	{
		$this->db->select('nauthor',$a_name);
		$this->db->get('notices');
		return $this->db->num_rows() > 0 ? $this->db->result_array() : false;
	}
	
	function Add($n_data)
	{
		return $this->db->insert('notices',$n_data);
	}
	
	function Remove($id)
	{
		$this->db->select('id',$id);
		$this->db->delete('notices');
		return $this->db->affected_rows() > 0 ? true : false;
	}
	
	function Update($n_data)
	{
		return $this->db->update('notices',$n_data);
	}
	
}
?>