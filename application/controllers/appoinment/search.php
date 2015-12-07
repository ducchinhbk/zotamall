<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('collection_model');
        $this->load->model('user_model');

        // TODO : check previlige to view this collection
    }
    public function index(){
        $header_data['page_active'] = 'Search';
        $header_data['title'] = 'Trang chủ - ';
        $header_data['meta_description'] = 'Trang chủ';  
        $header_data['meta_keyword'] = 'Enter content here';
        $header_data['og_description'] = 'Enter content here';
        $header_data['og_title'] = 'Enter content here';
        $header_data['og_type'] = 'Enter content here';
        $header_data['og_url'] = 'Enter content here';
        $header_data['og_image'] = 'Enter content here';
        
        $data['home_url'] = '';
        
        
        
        $this->load->view('common/tpl_header', $header_data);
        $this->load->view('appoinment/tpl_search', $data);
        $this->load->view('common/tpl_footer');
    }


}
