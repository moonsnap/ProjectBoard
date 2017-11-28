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
        $this->load->view('main');
        $this->load->view('footer');
    }
    
    function page(){
        $this->load->library('pagination');
        
        $config['base_url'] = base_url().'/board/page';
        $config['total_rows'] = $this->board_model->total_entry();
        $config['per_page'] = 10;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['use_page_numbers'] = TRUE;        
        

        $config['full_tag_open'] = '<nav aria-label="Page navigation"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        $config['prev_link'] = '<span aria-hidden="true">&laquo;</span>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        
        $config['next_link'] = '<span aria-hidden="true">&raquo;</span>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
        
        $data['paging'] = $this->pagination->create_links();
        $data['results'] = $this->board_model->page_entry($config['per_page'], ($page-1)*$config['per_page']);

        $this->load->view('header');
        $this->load->view('main', $data);
        $this->load->view('footer');
    }

    function post($id){
        $this->board_model->hit($id);
        $post = $this->board_model->get($id);

        $prev_id = $this->board_model->prev_id($id);
        $next_id = $this->board_model->next_id($id);

        $this->load->view('header');
        $this->load->view('post', array('post'=>$post, 'prev_id'=>$prev_id, 'next_id'=>$next_id));
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
            redirect('/board/post/'.$post_id);
        }
         
        $this->load->view('footer');
    }

    function delete($id){
        $this->board_model->delete($id); 
        redirect('/board/page');                    
    }

    function modify($id){
        $post = $this->board_model->get($id);
        $this->load->view('header');
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', '제목', 'required');
        $this->form_validation->set_rules('content', '본문', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('modify', array('post'=>$post));
        }
        
        else{
            $post_id = $this->board_model->modify(array('title'=>$this->input->post('title'), 
                                                    'content'=>$this->input->post('content')));
            redirect('/board/post/'.$id);
        }
        $this->load->view('footer');
    }
    
}