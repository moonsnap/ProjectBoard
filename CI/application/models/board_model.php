<?php
class Board_model extends CI_Model{
    function __construct(){       
        parent::__construct();
    }
 
    function page_entry($limit, $start){
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get('board');

        if($query->num_rows()>0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
        return false;    
    }

    function get($id){        
        return $this->db->get_where('board', array('id'=>$id))->row();
    }

    function total_entry(){
        return $this->db->get('board')->num_rows();
    }

    function hit($id){
        $this->db->set('hits', 'hits+1',FALSE);
        $this->db->where('id',$id);
        $this->db->update('board');
    }

    function add($option){
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('board',array(
            'title'=>strip_tags($option['title']),
            'content'=>$option['content'],
            'author'=>strip_tags($option['nickname']))
        );
        return $this->db->insert_id();
    }

    function modify($option){
        $this->db->update('board', array('title'=>strip_tags($option['title']),
                                         'content'=>$option['content']));
        return $this->db->get_where('board', array('id'=>$option['id']))->row();
    }

    function delete($id){
        return $this->db->delete('board', array('id'=>$id));
    }

    function prev_id($id){
        $this->db->select('id');
        $this->db->where('id <', $id);
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        return $this->db->get('board')->row();        
    }

    function next_id($id){
        $this->db->select('id');
        $this->db->where('id >', $id);       
        $this->db->limit(1);
        return $this->db->get('board')->row();        
    }
}
?>

