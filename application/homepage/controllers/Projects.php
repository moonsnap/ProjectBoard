<?php
class Projects extends CI_Controller {
    function index(){
        $this->load->view('header');
        $this->load->view('Projects');
        $this->load->view('footer');
    }
}
?>