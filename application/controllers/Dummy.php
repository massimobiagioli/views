<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dummy extends MY_Controller {
    
    public function index() {
        if (!$this->agent->is_mobile()) {
            $this->load->view('dummy_view');
        } else {
            $this->load->view('dummy_view_mobile');
        }
    }
    
    public function dummy_content() {
        $this->load->helper('demo');
        
        // test cache
        $dummyobj = array('x', 'y', 'z');
        $this->cache->save('dummy', $dummyobj);
        $read = $this->cache->get('dummy');
        
        echo "qwerty123 " . demo() . ' ' . print_r($read, true);
    }
    
}
