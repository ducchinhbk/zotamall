<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(config_item('home_dir'). '/application/utils/ViewUtils.php');

class Personal extends CI_Controller {

    private $reviewAuthorID;
    private $reviewUserName;
    private $reviewUser;
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('collection_model');
        $this->load->model('post_model');
        $this->load->model('user_model');
        $this->load->model('bookmark_model');
        $this->load->library('pagination');
    }
	public function index(){
	    $header_data['page_active'] = 'Personal';
        $header_data['title'] = 'Trang chủ - ';
        $header_data['meta_description'] = 'Trang chủ';  
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

        // CHECK USER WANT TO VIEW
        $requestURI = $_SERVER['REQUEST_URI'];
        $requestURI = str_replace('.html', '', $requestURI);
        if(strrpos($requestURI, '?') !== false){
            $requestURI = substr($requestURI, 0, strrpos($requestURI, '?'));
        }
        $lastSlash = strrpos($requestURI, "/");
        $userLoginName = substr($requestURI, $lastSlash + 1);
        if(is_string($userLoginName) && strlen($userLoginName) > 0){
            $searchUser['user_login'] = $userLoginName;
            $userObject = $this->user_model->get_user($searchUser);
            if($userObject != null && $userObject['ID'] > 0){
                $this->reviewAuthorID = $userObject['ID'];
                $this->reviewUserName = $userObject['user_login'];
                $this->reviewUser = $userObject;
            }else{
                redirect(config_item('wp_home_url'));
            }
        }else{
            redirect(config_item('wp_home_url'));
        }

        $data['user_collections'] = $this->collection_model->getListCollectionBy(1, 30, $this->reviewUser['ID']);
        $data['reviewUsername'] = $this->reviewUserName;
        $data['reviewUser'] = $this->reviewUser;

        $page = 1; $limit = 12;
        if(isset($_GET['page'])){
            $page = (int)$_GET['page'];
        }
        $authorPosts = $this->post_model->getPostByAuthorId($page, $limit, $this->reviewAuthorID);
        $data['postAuthors'] = array();

        $data['page'] = $page;
        $data['total'] = $this->post_model->getCountPostByAuthorId($this->reviewAuthorID);
        $data['numPage'] = ($data['total'] % 12 == 0)? (int)$data['total']/12 : (int)$data['total']/12 + 1;

        $leftRange = $page - 2;
        $rightRange = $page + 2;
        if($leftRange <= 0){
            $leftRange = 1;
            $rightRange = 5;
        }
        if($rightRange >= $data['numPage']){
            $leftRange = $data['numPage'] - 5;
            $rightRange = $data['numPage'];
        }

        for($index = 1; $index <= $data['numPage'] ; $index++){
            $isShow = false;
            if($leftRange <= $index && $index <= $rightRange){ // chia het cho 4
                $isShow = true;
            }
            $data['paginations'][] = array(
                'show' => $isShow,
                'index' => $index,
                'class' => ($page == $index)? 'selected' : '',
                'link' => config_item('base_url') . 'user/personal/' . $data['reviewUsername'] . '?page='. $index
            );
        }
        foreach($authorPosts as $post){
            $thumbImg = $this->post_model->getPostThumbImage($post['ID']);
            $data['postAuthors'][] = array(
                'title' => $post['post_title'],
                'date' => $post['post_date'],
                'author' => $post['user_nicename'],
                'author_id' => $post['post_author'],
                'author_email' => $post['user_email'],
                'post_id' => $post['ID'],
                'thumb_img' => $thumbImg,
                'author_nicename' => $post['user_nicename'],
                'author_avatar' => $post['cus_avatar'],
                'cus_city' => $post['cus_city']
            );
        }

        $data['plus'] = config_item('plus');
        $data['multiple'] = config_item('multiple');

        $data['bookmarks'] = $this->bookmark_model->getBookmarkPost($this->reviewUser['ID']);

		$this->load->view('common/tpl_header', $header_data);
        $this->load->view('user/tpl_personal', $data);
        $this->load->view('common/tpl_footer');
	}

    public function addcollection(){
        header('Content-Type: application/json');
        $result = array();
        if(isset($_POST['post_data']) && isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
            $post_data = $_POST['post_data'];
            if(is_array($post_data)){
                $data['title'] = $post_data['title'];
                $data['description'] = $post_data['description'];
                $data['shared'] = ($post_data['shared'] == 'true')? 1: 0 ; // TRUE OR FALSE
                $data['user_id'] = $_SESSION['user_id'];

                $collectionObject = $this->collection_model->getCollectionByDataFilter($data);
                if($collectionObject != null && $collectionObject['user_collection_id'] > 0){
                    // allredy existed bo suu tap nay`
                    $result['status'] = false;
                    $result['message'] = 'Tên bộ sưu tập đã tồn tại, làm ơn chọn tên khác';
                }else{
                    $collectionObject = $this->collection_model->insert($data);
                    $result['status'] = true;
                    $result['data'] = $collectionObject;
                }
                echo json_encode($result);
            }
        }
    }

    public function getcollection(){
        header('Content-Type: application/json');
        $result = array();
        if(isset($_GET['id']) && strlen($_GET['id']) > 0){
            $collectionId = $_GET['id'];
            $collectionObject = $this->collection_model->getCollectionById($collectionId);
            if($collectionObject != null){
                $result['status'] = true;
                $result['data'] = $collectionObject;
                unset($result['data']['user_id']);
                echo json_encode($result);
            }
        }
    }

    public function deletecollection(){
        header('Content-Type: application/json');
        $result = array();
        if(isset($_POST['collection_id']) && strlen($_POST['collection_id']) > 0 && isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
            $collectionId = $_POST['collection_id'];
            $this->collection_model->deleteById($collectionId, $_SESSION['user_id']);
            $result['status'] = true;
            echo json_encode($result);
        }
    }

    public function editcollection(){
        header('Content-Type: application/json');
        $result = array();
        if(isset($_POST['post_data']) && isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
            $post_data = $_POST['post_data'];
            if(is_array($post_data)){
                $data['title'] = $post_data['title'];
                $data['description'] = $post_data['description'];
                $data['shared'] = ($post_data['shared'] == 'true')? 1: 0 ; // TRUE OR FALSE
                $data['user_collection_id'] = $post_data['collection_id'];
                $data['user_id'] = $_SESSION['user_id'];
                $this->collection_model->update($data);
                $result['status'] = true;
                echo json_encode($result);
            }
        }
    }

}
