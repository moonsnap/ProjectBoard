<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
    function index(){
        $this->load->view('header');
        $this->load->view('gallery');
        $this->load->view('footer');
    }
}
?>