<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board Extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->model('board_model');
    }
    
    function index(){
        $this->load->view('header');
        $posts = $this->board_model->gets();
        $this->load->view('main', array('posts'=>$posts));
        $this->load->view('footer');
    }

    function post($id){
        $post = $this->board_model->get($id);
        $this->load->view('header');
        $this->load->view('post', array('post'=>$post));
        $this->load->view('footer');
    }

    function write(){
        $this->load->view('header');
        $this->load->library('form_validation');
 
        $this->form_validation->set_rules('title', '제목', 'required');
        $this->form_validation->set_rules('content', '본문', 'required');
         
        if ($this->form_validation->run() == FALSE)
        {
             $this->load->view('write');
        }
        else
        {
            $post_id = $this->board_model->add(array('title'=>$this->input->post('title'), 
                                                     'content'=>$this->input->post('content'), 
                                                     'nickname'=>$this->session->userdata('nickname')));
            $this->load->helper('url');
            redirect('/board/post/'.$post_id);
        }
         
        $this->load->view('footer');
    }
}