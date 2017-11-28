<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactme extends CI_Controller {
    function index(){
        $this->load->view('header');
        $this->load->view('contactme');
        $this->load->view('footer');
    }
}
?>