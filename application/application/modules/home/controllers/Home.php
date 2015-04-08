<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
     * 
	 */
     
    public function __construct() {
        parent::__construct();       
        
    }
     
	public function index()
	{
	    $this->load->library('session');
	    $lang = $this->session->userdata('language');
        echo $lang;
	    $this->lang->load("message", $lang);
        
	    $data["msg_first_name"] = $this->lang->line("msg_first_name");
        $data["msg_last_name"] = $this->lang->line("msg_last_name");
        $data["msg_dob"] = $this->lang->line("msg_dob");
        $data["msg_address"] = $this->lang->line("msg_address");
        
        
		$this->load->view('home', $data);
	}
}
