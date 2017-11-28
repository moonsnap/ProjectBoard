<?php
class User_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getByEmail($option){
        $result = $this->db->get_where('home_user', array('email'=>$option['email']))->row();
        return $result;
    }
}
?>