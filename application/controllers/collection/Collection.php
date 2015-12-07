<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('collection_model');
        $this->load->model('user_model');

        // TODO : check previlige to view this collection
    }
    public function index(){
        $header_data['page_active'] = 'Colection';
        $header_data['title'] = 'Bộ sưu tập ';
        $header_data['meta_description'] = 'Bộ sưu tập';  
        $header_data['meta_keyword'] = 'Enter content here';
        $header_data['og_description'] = 'Enter content here';
        $header_data['og_title'] = 'Enter content here';
        $header_data['og_type'] = 'Enter content here';
        $header_data['og_url'] = 'Enter content here';
        $header_data['og_image'] = 'Enter content here';
        
        // CHECK COOKIE FOR LOGIN
        if(isset($_COOKIE['vnup_user']) && isset($_COOKIE['vnup_log_social']) && (!isset($_SESSION['user_id']) || empty($_SESSION['user_id']))){
            $_SESSION['redirect_to'] = $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'];
            redirect(config_item('base_url'). 'user/user');
        }

        $requestURI = $_SERVER['REQUEST_URI'];
        $requestURI = str_replace('.html', '', $requestURI);
        $lastUnderScore = strrpos($requestURI, "_");
        $encodeId = substr($requestURI, $lastUnderScore + 1);
        $data['collectionList'] = array();
        if(is_numeric($encodeId)){
            $collectionId = (int)$encodeId/config_item('multiple') - config_item('plus');
            $data['collectionId'] = $collectionId;
            $collectionObject = $this->collection_model->getCollectionById($collectionId);
            $data['collection_title'] = $collectionObject['collection_title'];
            $searchUser['id'] = $collectionObject['user_id'];
            $data['userOwnerCollection'] = $this->user_model->get_user($searchUser);

            $data['collectionList'] = $this->collection_model->fetchAllPostCollection($collectionId);
        }
        $this->load->view('common/tpl_header', $header_data);
        $this->load->view('collection/tpl_collection', $data);
        $this->load->view('common/tpl_footer');
    }

    public function addposttocolleciton(){
        header('Content-Type: application/json');
        if (isset($_SESSION['user_id']) && $this->session->user_id > 0 && isset($_COOKIE['vnup_user'])) {
            if(isset($_POST['user_collection_id']) && isset($_POST['post_id']) && isset($_POST['post_author_id'])){
                $this->collection_model->insertCollectionData($_POST);
                $result['status'] = true;
                echo json_encode($result);
            }
        }
        echo '';
    }


}
