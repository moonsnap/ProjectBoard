<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function register(){
        $this->load->view('header');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('nickname', '닉네임', 'required|min_length[3]|max_length[10]');
        $this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[20]|matches[re_password]');
        $this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');
        
        if($this->form_validation->run() === false){
            $this->load->view('register');
        }
        else{
            $hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            
            $this->load->model('user_model');
            $this->user_model->add(array('email'=>$this->input->post('email'),
                                         'password'=>$hash,
                                         'nickname'=>$this->input->post('nickname')));
        }
        $this->load->view('footer');
    }
    
}

?>