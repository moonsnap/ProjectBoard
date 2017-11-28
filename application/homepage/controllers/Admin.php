<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->database();
    }
    
    function index(){
        $this->load->view('header');
        if($this->session->userdata('is_login')){
            $this->load->view('admin', array('error'=>' '));
        }
        else{
            $this->load->view('login');
        }
        $this->load->view('footer');
    }

    function authentication(){
        $this->load->model('user_model');

        $user = $this->user_model->getByEmail(array('email'=>$this->input->post('userid')));
        
        if($this->input->post('userid') == $user->email &&
            $this->input->post('password') == $user->password){
                $this->session->set_userdata('is_login', true);
                redirect('admin');
        }
        else{
            echo "불일치";
            redirect('admin');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('/main');
    }

    function do_upload(){
        $config['upload_path'] = './static/images';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024;
        $config['max_width'] = 3000;
        $config['max_height'] = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('header');
            $this->load->view('admin', $error);
            $this->load->view('footer');
        }
        else{
            $data = array('uploadData' => $this->upload->data());
            $this->load->view('uploadsuccess', $data);
        }
    }
}
?>