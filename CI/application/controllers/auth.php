<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function login(){
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }

    function logout(){
        $this->session->sess_destroy();
        $this->load->helper('url');
        redirect('/board');
    }

    function register(){
        $this->load->view('header');
        
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('nickname', '닉네임', 'required|min_length[3]|max_length[10]');
        $this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[20]|matches[re_password]');
        $this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');
        
        if($this->form_validation->run() == false){
            $this->load->view('register');
        }

        else{
            $hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            
            $this->load->model('user_model');
            $this->user_model->add(array('email'=>$this->input->post('email'),
                                         'password'=>$hash,
                                         'nickname'=>$this->input->post('nickname')));
        
            $this->session->set_flashdata('message', '회원가입에 성공했습니다.');
            $this->load->helper('url');
            redirect('/');
        }
        $this->load->view('footer');
    }
    
    function authentication(){
        $this->load->model('user_model');

        $user = $this->user_model->getByEmail(array('email'=>$this->input->post('userid')));
        
        if($this->input->post('userid') == $user->email &&
            password_verify($this->input->post('password'), $user->password)){
                $this->session->set_userdata('is_login', true);
                $this->session->set_userdata('nickname', $user->nickname);
                $this->load->helper('url');
                redirect('/board');
        }
        else{
            echo "불일치";
            $this->session->set_flashdata('message', '로그인에 실패했습니다.');
            $this->load->helper('url');
            redirect('/auth/login');
        }

    }
}

?>