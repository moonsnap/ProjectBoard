<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    function index(){
        $this->load->view('header');
        $this->load->view('index');
        $this->load->view('footer');
    }
}
?>