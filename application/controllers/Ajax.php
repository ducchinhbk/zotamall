<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	/**
	 * Cauth controller.
	 *
	 */
    function __construct()
    {
        
        parent::__construct();
        //$this->load->library('Input');
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
    }
    
    
	public function index(){
	   echo "fdadfldahf";
	}
    
    public function c_get_post_categories()
    {   
        $this->load->model('post');
        
        $cate_id = $this->input->post('cate_id');
        if(empty($cate_id))
        {
            $cate_id = '0';
        }
        
        $categories = $this->post->get_post_sub_categories($cate_id);
        $data['categories'] = $categories;

        $this->load->view('ajax/tpl_subcategory', $data);
        
    }

    public function get_wp_post_tag(){
        header('Content-Type: application/json');
        if(isset($_SESSION['user_id']) && $this->session->user_id > 0 && isset($_COOKIE['vnup_user'])){
            if(isset($_GET['filter_model'])){
                $this->load->model('tag_model');
                $filter_model = $_GET['filter_model'];
                $postTags = $this->tag_model->filter_post_tag_by_name($filter_model);
                $result = array();
                foreach($postTags as $postTag){
                    $result[] = array(
                        'term_name' => $postTag['name'],
                        'term_id' => $postTag['term_id'],
                        'term_slug' => $postTag['slug']
                    );
                }
                echo json_encode($result);
            }
        }
    }

    public function get_wp_posts_filter(){
        header('Content-Type: application/json');
        if(isset($_GET['filter_model'])){
            $this->load->model('post_model');
            $filter_model = $_GET['filter_model'];
            $postList = $this->post_model->getAllPostFilterByTitle($filter_model);
            $result = array();
            foreach($postList as $post){
                $thumbImg = $this->post_model->getPostThumbImage($post['ID']);
                $result[] = array(
                    'title' => $post['post_title'],
                    'date' => $post['post_date'],
                    'author' => $post['user_nicename'],
                    'author_id' => $post['post_author'],
                    'author_email' => $post['user_email'],
                    'post_id' => $post['ID'],
                    'thumb_img' => $thumbImg,
                    'author_nicename' => $post['user_nicename'],
                    'author_avatar' => $post['cus_avatar']
                );
            }
            echo json_encode($result);
        }
    }

    public function save_bookmark(){
        header('Content-Type: application/json');
        if(isset($_SESSION['user_id']) && $this->session->user_id > 0 && isset($_COOKIE['vnup_user'])){
            $this->load->model('bookmark_model');

            $data['post_id'] = $_GET['post_id'];
            $data['post_title'] = $_GET['post_title'];
            $data['post_thumb_img'] = $_GET['post_thumb_img'];
            $data['post_vote'] = $_GET['post_vote'];
            $data['post_author_id'] = $_GET['post_author_id'];
            $data['post_author_name'] = $_GET['post_author_name'];
            $data['post_author_email'] = $_GET['post_author_email'];
            $data['post_author_avatar'] = $_GET['post_author_avatar'];
            $data['post_author_city'] = $_GET['post_author_city'];
            $data['user_id'] = $_SESSION['user_id'];

            $data['data'] = $this->bookmark_model->insert($data);
            $data['status'] = true;
            echo json_encode($data);
        }
    }

    public function remove_bookmark(){
        header('Content-Type: application/json');
        if(isset($_SESSION['user_id']) && $this->session->user_id > 0 && isset($_COOKIE['vnup_user'])){
            $this->load->model('bookmark_model');
            $data['post_id'] = $_GET['post_id'];
            $data['user_id'] = $_SESSION['user_id'];
            $this->bookmark_model->delete($data);
            $data['status'] = true;
            echo json_encode($data);
        }
    }

}
