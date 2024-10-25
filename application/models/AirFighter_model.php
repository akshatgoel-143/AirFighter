<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AirFighter_model extends CI_Model {

    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
        
    }

    public function get_users()
    {
        $query = $this->db->get('users');
        $result = $query->result();
        return $result;
    }
}