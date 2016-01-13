<?php

class Home extends Controller {
    
    protected $registry;
    
    public function __construct($registry) {
        $this->registry = $registry;
    }
    
    function index(){
        $data = array();
        $this->document->setTitle('Home');
        
        $this->loader->Load('header');

        
        
        
        
        $data['filename'] = 'views/home.tpl';
        if (file_exists($data['filename'])) {
            require_once 'views/home.tpl';
        }
        
        $this->loader->Load('footer');
    }


    function teste(){        
        echo 'teste';        
    }
    
}