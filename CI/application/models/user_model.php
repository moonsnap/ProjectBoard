<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function add($user_data){
        $this->db->set('email', $user_data['email']);
        $this->db->set('password', $user_data['password']);
        $this->db->set('nickname', $user_data['nickname']);
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('user');

        $result = $this->db->insert_id();
        return $result;
    }
}
