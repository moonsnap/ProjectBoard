<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutme extends CI_Controller {
    function index(){
        $this->load->view('header');
        $this->load->view('aboutme');
        $this->load->view('footer');
    }
}
?>