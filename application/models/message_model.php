<?php
class message_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
            $this->load->database();
            
         // Your own constructor code
        }

    public function message_users($name,$email,$message)
    {
        
        
        
          $array =array(
                        'name' =>$name,
                     'email' =>$email,
                       'message' => $message);
        $this->db->insert('veggies',$array);
        
         
      
    
    
        
    }
}
