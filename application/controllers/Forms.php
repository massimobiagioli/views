<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {
    
    public function index() {
        $this->load->view('forms_view');
    }
    
    public function handle_data() {
        $form_data = $this->input->post();
        var_dump($form_data);
    }
    
    public function handle_data_head() {
        $form_data = $this->input->post();
        var_dump($form_data);
    }
    
}
