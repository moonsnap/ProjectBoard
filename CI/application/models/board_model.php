<?php
class Board_model extends CI_Model{
    function __construct(){       
        parent::__construct();
    }
 
    function gets(){
        return $this->db->query("SELECT * FROM board ORDER BY id DESC")->result();
    }
 
    function get($post_id){
        $this->db->select('id');
        $this->db->select('title');
        $this->db->select('content');
        $this->db->select('author');
        $this->db->select('hits');
        $this->db->select('UNIX_TIMESTAMP(created) AS created');
        return $this->db->get_where('board', array('id'=>$post_id))->row();
    }

    function add($option){
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('board',array(
            'title'=>$option['title'],
            'content'=>$option['content'],
            'author'=>$option['nickname'])
        );
        return $this->db->insert_id();
    }
}
?>