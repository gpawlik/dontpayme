<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
    
    public function __construct()
    {                                  
        parent::__construct();
        $this->results_model->get_language();                          
    }            

    public function index(){    
        $data['chapters'] = $this->results_model->get_chapters();
        $this->_render('pages/home','FULLPAGE', $data);
    }
    
    public function chapters(){     
        $data['chapters'] = $this->results_model->get_chapters();        
        $this->_render('pages/chapterlist','FULLPAGE', $data);
    }
    
    public function chapter($slug="")
    { 
        if(empty($slug)) {
            show_404();
            return false;
        }
        
        $chapter = $this->results_model->get_chapters($slug);
        if($chapter) {            
            $data['chapter_data']   = (array) $chapter;
            $data['chapter_images'] = $this->results_model->get_images($data['chapter_data']['id']);
            $this->_render('pages/chapter','FULLPAGE',$data);
        }
        else {
            show_404();
        }                
    }
    
    
    public function subscribe_user()
    { 
        $user_email = $this->input->post('user_email');
        if(empty($user_email)) {
            show_404();
            return false;
        }        
        $this->results_model->save_subscribers($user_email);                      
    }

}