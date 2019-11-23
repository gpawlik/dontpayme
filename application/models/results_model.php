<?php
class Results_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();    
    }
    

    public function get_language()
    {     
        // 1. check language from URL parameter
        if($this->input->get('lang')) {
          $language = $this->input->get('lang');
        }
        // 2. check language from the session data
        else if($this->session->userdata('language')) {
          $language = $this->session->userdata('language');
        }
        // 3. check language from the browser setting
        else {
          $language = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);          
        }        

        switch($language) {
          case 'it': 
              $lang_file = 'italian';
              $lang_code = 'it';
              break;
          case 'de': 
              $lang_file = 'german';
              $lang_code = 'de';
              break;
          case 'fr': 
              $lang_file = 'french';
              $lang_code = 'fr';
              break;
          case 'pl': 
              $lang_file = 'polish';
              $lang_code = 'pl';
              break;
          default: 
              $lang_file = 'english';
              $lang_code = 'en';
        }           

        $this->session->set_userdata('language',$lang_code);
        $this->lang->load('main',$lang_file); 
        return $language;
    }  

    public function get_chapters($slug="")
    {            
        
        $this->db->select('*');
        $this->db->from('pages');
        
        if(!empty($slug)) {
            $this->db->where('slug', $slug);           
        }

        $query = $this->db->get();

        if ($query->num_rows() > 1) {      
          return $query->result_array();               
        }
        else if ($query->num_rows() === 1) {      
          return $query->row();               
        }
        else {
            return false;
        }
    }
    
    
    public function get_images($chapter_id)
    {  
        $this->db->select('*');
        $this->db->from('images');
        $this->db->where('page_id', $chapter_id);        
        $query = $this->db->get();
        
        return $query->result_array();        
    }
    
    
    public function save_subscribers($user_email)
    {                  
        $user_ip    = $this->session->userdata('ip_address');
        
        $data = array (
          'user_email'      => $user_email,
          'user_ip'         => $user_ip,
          'date_subscribed' => date('Y-m-d')
        );   
        $this->db->insert('subscribers',$data);          
    }

}
?>