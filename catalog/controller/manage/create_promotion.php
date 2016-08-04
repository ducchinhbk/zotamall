<?php
class ControllerManageCreatePromotion extends Controller {
	private $error = array();

	public function index() {
	   
        if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('manage/create', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}
        
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));
	    
		$this->document->addStyle('catalog/view/javascript/calendar/bootstrap-datetimepicker.css');
        $this->document->addScript('catalog/view/javascript/calendar/moment-with-locales.js');
        $this->document->addScript('catalog/view/javascript/calendar/bootstrap-datetimepicker.js');
        
        if (isset($this->request->get['promotion_id'])) {
			$promotion_id = (int)$this->request->get['promotion_id'];
		} else {
			$promotion_id = 0;
		}
        
        $this->load->model('catalog/category');
        $categories = $this->model_catalog_category->getCategories(0);
		foreach ($categories as $category) {
			 $filter_cat_data = array(
                'filter_category_id'  => $category['category_id'],
                'filter_sub_category' => true
            );

			$data['categories'][] = array(
                'category_id' => $category['category_id'] ,
				'name' => $category['name'] ,
                'href' => $this->url->link('product/category', 'path=' .$category['category_id'] ),
			);
            
		}
        
        
        $this->load->model('catalog/promotion');
        $promotion_info = $this->model_catalog_promotion->getPromotion($promotion_id);
        $this->load->model('tool/image');
        if (isset($promotion_info['image']) && is_file(DIR_IMAGE . $promotion_info['image'])) {
            $image = $this->model_tool_image->resize($promotion_info['image'], 815, 315);
		} else {
            $image = $this->model_tool_image->resize('no_image.jpg', 815, 315);
		}
        $data['promotion_info'] = array(
            'promotion_id'      => isset($promotion_info['promotion_id'])? $promotion_info['promotion_id'] : '',
            'name'              => isset($promotion_info['name'])? $promotion_info['name'] : '',
            'category_id'       => isset($promotion_info['category_id'])? (int)$promotion_info['category_id'] : '',
            'start_date'        => isset($promotion_info['start_date'])? $promotion_info['start_date'] : '',
            'start_hour'        => isset($promotion_info['start_hour'])? $promotion_info['start_hour'] : '',
            'end_date'          => isset($promotion_info['end_date'])? $promotion_info['end_date'] : '',
            'end_hour'          => isset($promotion_info['end_hour'])? $promotion_info['end_hour'] : '',
            'image'             => isset($promotion_info['image'])? $promotion_info['image'] : '',
            'preview_image'     => $image,
            'short_description' => isset($promotion_info['short_description'])? $promotion_info['short_description'] : '',
            'description'       => isset($promotion_info['description'])? $promotion_info['description'] : '',
            'shop_id'           => isset($promotion_info['shop_id'])? $promotion_info['shop_id'] : '',
            'link'              => isset($promotion_info['link'])? $promotion_info['link'] : '',
        );
        
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('manage/create_promotion', $data));
	}

	
    public function save() {

		$json = array();
        
		// Validate if customer is logged in.
		if (!$this->customer->isLogged()) {
		    $this->session->data['redirect'] = $this->url->link('manage/create', '', true);
			$json['redirect'] = $this->url->link('account/login', '', true);
		}

        if (!$json) {
            
			if ((utf8_strlen(trim($this->request->post['name'])) < 1)) {
			     $json['error']['name'] = 'Tên khuyến mãi không được rỗng.';
			}

            if ((int)$this->request->post['category_id'] == 0) {
                $json['error']['category_id'] = 'Danh mục chưa được chọn .';
            }

            if ((utf8_strlen($this->request->post['start_date']) < 2)) {
                $json['error']['start_date'] = 'Ngày bắt đầu chưa được chọn';
            }
            
            if ((utf8_strlen($this->request->post['end_date']) < 2)) {
                $json['error']['end_date'] = 'Ngày kết thúc chưa được chọn';
            }
            
            if ((utf8_strlen(trim($this->request->post['pro_image'])) < 1)) {
			     $json['error']['image'] = 'Hình ảnh chưa được upload.';
			}
            
            if (utf8_strlen($this->request->post['short_description']) < 50) {
                $json['error']['short_description'] = 'Đoạn mở tả ngắn ngọn phải ít nhất 50 ký tự';
            }

            if (utf8_strlen($this->request->post['description']) < 300) {
                $json['error']['description'] = 'Nội dung giới thiệu phải ít nhất 300 ký tự';
            }

            
            if (!$json) {
                
                $data = array();
                $this->load->model('catalog/promotion');
                $this->load->model('catalog/shop');
                $this->load->model('account/activity');
                
                $shop_info = $this->model_catalog_shop->getShopByCustomerId($this->customer->getId());
                //var_dump($shop_info); 
                if(!empty($shop_info)){
                    
                    $data = array(
                        'name'               => $this->request->post['name'],
                        'category_id'        => $this->request->post['category_id'],
                        'start_date'         => $this->request->post['start_date'],
                        'start_hour'         => $this->request->post['start_hour'],
                        'end_date'           => $this->request->post['end_date'],
                        'end_hour'           => $this->request->post['end_hour'],
                        'image'              => $this->request->post['pro_image'],
                        'short_description'  => $this->request->post['short_description'],
                        'description'        => $this->request->post['description'],
                        'shop_id'            => (isset($shop_info['shop_id']))? $shop_info['shop_id']: 0,
                        'url'                =>remove_vietnamese_accents($this->request->post['name'])
                    );
                    
                    $activity_data = array(
                        'customer_id' => $this->customer->getId(),
                        'name'        => $this->customer->getFirstName() . ' ' . $this->customer->getLastName()
                    );
                    if(isset($this->request->post['promotion_id']) && $this->request->post['promotion_id'] != '')
                    {
                        $this->model_catalog_promotion->editPromotion((int)$this->request->post['promotion_id'], $data);
                        $this->model_account_activity->addActivity('promotion_edit', $activity_data);
                    }
                    else
                    {
                        $promotion_id = $this->model_catalog_promotion->addPromotion($data);
                        $this->model_account_activity->addActivity('promotion_add', $activity_data);
                    }
                    $json['success'] = $this->url->custom_link($shop_info['link']);
                    
                }
                else{
                    $json['fail'] = 'Có lỗi xảy ra, bạn chưa tạo địa điểm/cửa hàng!';
                }
                
            }
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
    
    public function image_upload() {
        $json['error'] = '';
        $json['image'] = '';
        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
            $config['upload_path']          = 'image/catalog/promotion/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $config['max_width']            = 2560;
            $config['max_height']           = 990;
    
    		$this->load->library('upload');
            
            $this->upload->initialize($config);
            
            
            if ( ! $this->upload->do_upload('pro_upload_image'))
            {
                $json['error'] = $this->upload->display_errors();
            }
            else
            {   $image = $this->upload->data();
                if(!empty($image)){
                    
                    $json['image'] = 'catalog/promotion/'.$image['file_name'];
                    
                }
    
            }
        
        }
        else{
            $json['error'] = 'Upload image fail';
        }
        
        $this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }
}