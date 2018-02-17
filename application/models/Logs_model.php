<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logs_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $usr
     * @return bool
     */
    public function select($u_id)
    {
        $q = $this->db->where('user_id',$u_id);
        $q = $this->db->get('logs',1);
        return $q->num_rows() > 0 ? $q->result_array() : false;
    }

    /**
     * @param $usr
     * @param $data
     * @return mixed
     */
    public function updateByUsr($u_id,$data)
    {
        $this->db->where('user_id',u_id);
        return $this->db->update('logs',$data);
    }

    public function deleteByUsr($u_id,$where)
    {
        $this->db->where('user_id',u_id);
        $this->db->where('id',$where);
        $this->db->delete('logs');
        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function addByUsr($u_id,$data)
    {
        $this->db->where('user_id',u_id);
        return $this->db->create('logs',$data);
    }
}