<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    function index(){
        $this->load->view('header');
        $this->load->view('blog');
        $this->load->view('footer');
    }
}
?>