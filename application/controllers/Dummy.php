<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dummy extends CI_Controller {
    
    public function index() {
        if (!$this->agent->is_mobile()) {
            $this->load->view('dummy_view');
        } else {
            $this->load->view('dummy_view_mobile');
        }
    }
    
    public function dummy_content() {
        echo "qwerty123";
    }
    
}
