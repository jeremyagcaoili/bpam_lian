<?php 
    class Emergency_Contact_Details{
        public $id;
        public $full_name;
        public $telephone;
        public $email;

        public function set_instance_array($arr){
            $this->id = $arr['id'];
            $this->full_name = $arr['full_name'];
            $this->telephone = $arr['telephone'];
            $this->email = $arr['email'];
        }
    }
    
    class Emergency_Contact_Details_Model extends CI_Model{

    }
?>