<?php
class LangSwitch extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
 
    function index($language = "") {
        $language = ($language != "") ? $language : "vietnamese";
        $this->session->set_userdata('language', $language);
        
        redirect(base_url());
    }
}