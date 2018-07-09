<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Characters_model extends CI_Model
{
    public function delete($id)
    {
        $this->db->where('c_id',$id);
        $this->db->delete('characters');
        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function byUserID($id)
    {
        $sql = "SELECT characters.* FROM characters,users WHERE user_id = users.id AND user_id=? ORDER BY 'ASC'";
        //the sql is not 100% done, we'll have still to group the inventory as an inner and much more
        $q = $this->db->query($sql,$id);
        return $q->num_rows() > 0 ? $q->result_array() : false;
    }

    public function existsByName($c)
    {
        $sql = "SELECT c_name FROM characters WHERE c_name = ?";
        $q = $this->db->query($sql,$c);
        return $q->num_rows() > 0 ? true : false;
    }

    public function NewInventory($cid)
    {
        if ($this->db->insert('inventory',array('char_id' => $cid)))
            return $this->db->insert_id();
        else
            return 0; //we know its an error number
        
    }

    public function Create($d)
    {
        if ($this->db->insert('characters',$d))
            return $this->db->insert_id();
        else
            return false;
    }

    public function UpdateByCharID($id,$d)
    {
       $this->db->where('c_id',$id);
       return $this->db->update('characters',$d);
    }

    public function CountByUserId($id)
    {
        $q = $this->db->where('user_id',$id);
        $q = $this->db->select('c_id');
        $q = $this->db->get('characters');
        return $q->num_rows();
    }
}