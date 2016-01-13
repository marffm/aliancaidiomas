<?php

class Footer extends Controller {
    
    protected $registry;
    
    public function __construct($registry) {
        $this->registry = $registry;
    }
    
    function index() {
        $data = array();
        $data['pageTitle'] = 'Test Title page';
        
        
        $data['filename'] = 'views/common/footer.tpl';
        if (file_exists($data['filename'])) {
            require_once 'views/common/footer.tpl';
        }
    }
    
}