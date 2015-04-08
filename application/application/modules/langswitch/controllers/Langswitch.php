<?php
class Langswitch extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
 
    function index($language = "") {
        
        $data = "";
        $this->load->view('lang_form', $data);
    }
    
    function change() {
        $language = $this->input->post('language');
        
        $language = ($language != "") ? $language : "english";
        $this->session->set_userdata('language', $language);
        
        redirect(base_url());
    }
}