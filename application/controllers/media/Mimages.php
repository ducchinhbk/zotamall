<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mimages extends CI_Controller {

	/**
	 * Cauth controller.
	 *
	 */
    public function __construct(){    
        parent::__construct();
        $this->load->helper("url"); 
        $this->load->helper("form");     
    }
    
    public function index(){
        //die('fladfhladf');
        $this->load->model("media/mimage");
        
        $image = '';
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $file = $this->input->post('avatar');
            $image = $this->mimage->do_upload($file);
            
        }
            
        echo $image;
        //$data['images'] = $this->mimage->get_images();
        //$this->load->view("welcome_message",$data);    
    }
    
   
}
