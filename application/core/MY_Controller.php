<?php

class MY_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load_cache_driver();
    }
    
    function load_cache_driver() {
        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
    }
    
}

