<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Characters_model extends CI_Model
{
    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('characters');
        return $this->db->affected_rows() > 0 ? true : false;
    }
}