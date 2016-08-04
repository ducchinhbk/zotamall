<?php
class ControllerManageCreatePlace extends Controller {
	private $error = array();

	public function index() {
	   
        if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->custom_link('manage/create');

			$this->response->redirect($this->url->custom_link('account/login'));
		}
        
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));
	    
		$this->document->addStyle('catalog/view/javascript/calendar/bootstrap-datetimepicker.css');
        $this->document->addScript('catalog/view/javascript/calendar/moment-with-locales.js');
        $this->document->addScript('catalog/view/javascript/calendar/bootstrap-datetimepicker.js');
        
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
        
        $this->load->model('localisation/zone');
        $zones = $this->model_localisation_zone->getZonesByParentId(0);
        
		foreach ($zones as $zone) {

			$data['zones'][] = array(
				'zone_id'     => $zone['zone_id'],
				'name'        => $zone['name'],
				'code'        => $zone['code'],
				'sort'        => $zone['sort'],
				'status'      => $zone['status']
			);
		}
        
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('manage/create_place', $data));
	}
    
    public function save() {

		$json = array();
        
		// Validate if customer is logged in.
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->custom_link('manage/create');

			$this->response->redirect($this->url->custom_link('account/login'));
		}
            
        if (!$json) {
			
			if ((utf8_strlen(trim($this->request->post['name'])) < 1)) {
			     $json['error']['name'] = 'Tiêu đề không được rỗng.';
			}

            if ((int)$this->request->post['category_id'] == 0) {
                $json['error']['category_id'] = 'Danh mục chưa được chọn .';
            }

            if ((utf8_strlen($this->request->post['working_time']) < 2) || (utf8_strlen($this->request->post['working_time']) > 128)) {
                $json['error']['working_time'] = 'Giờ mở cửa chưa được nhập hoặc không đúng định dạng';
            }
            
            if ((utf8_strlen(trim($this->request->post['image'])) < 1)) {
			     $json['error']['image'] = 'Hình ảnh chưa được upload.';
			}
            
            if (utf8_strlen($this->request->post['short_description']) < 50) {
                $json['error']['short_description'] = 'Đoạn mở tả ngắn ngọn phải ít nhất 50 ký tự';
            }

            if (utf8_strlen($this->request->post['description']) < 300) {
                $json['error']['description'] = 'Nội dung giới thiệu phải ít nhất 300 ký tự';
            }

            if ($this->request->post['telephone'] == '' || !is_numeric($this->request->post['telephone']) || utf8_strlen($this->request->post['telephone']) > 64) {
                $json['error']['telephone'] = 'Số điện thoại rỗng hoặc không đúng định dạng';
            }

			if (utf8_strlen($this->request->post['email']) < 4 || utf8_strlen($this->request->post['email']) > 256) {
                $json['error']['email'] = 'Email rỗng hoặc không đúng định dạng';
            }
            
            if ((utf8_strlen($this->request->post['address']) < 2) || (utf8_strlen($this->request->post['address']) > 256)) {
                $json['error']['address'] = 'Địa chỉ rỗng hoặc không đúng định dạng';
            }
            
            if ((int)$this->request->post['city_id'] == 0) {
                $json['error']['city_id'] = 'Thành phố chưa được chọn.';
            }
            
            if ((int)$this->request->post['district_id'] == 0) {
                $json['error']['district_id'] = 'Quận huyện chưa được chọn.';
            }
            
            if (!$json) {
                $this->load->model('catalog/shop');
                $this->load->model('account/activity');
                
                $data = array(
                    'name'               => $this->request->post['name'],
                    'category_id'        => $this->request->post['category_id'],
                    'working_time'       => $this->request->post['working_time'],
                    'image'              => $this->request->post['image'],
                    'short_description'  => $this->request->post['short_description'],
                    'description'        => $this->request->post['description'],
                    'telephone'          => $this->request->post['telephone'],
                    'email'              => $this->request->post['email'],
                    'address'            => $this->request->post['address'],
                    'city_id'            => $this->request->post['city_id'],
                    'district_id'        => $this->request->post['district_id'],
                    'url'                =>remove_vietnamese_accents($this->request->post['name'])
                );
                
                $activity_data = array(
                    'customer_id' => $this->customer->getId(),
                    'name'        => $this->customer->getFirstName() . ' ' . $this->customer->getLastName()
                );
                $shop_info = $this->model_catalog_shop->getShopByCustomerId($this->customer->getId());
                if(!empty($shop_info))
                {
                    $this->model_catalog_shop->editShop($shop_info['shop_id'], $data);
                    
                    $this->model_account_activity->addActivity('shop_edit', $activity_data);
                    
                }
                else{
                    $shop_id = $this->model_catalog_shop->addShop($data);
                    
                    $this->model_account_activity->addActivity('shop_add', $activity_data);
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
            $config['upload_path']          = 'image/catalog/shop/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $config['max_width']            = 2560;
            $config['max_height']           = 990;
    
    		$this->load->library('upload');
            
            $this->upload->initialize($config);
            
            
            if ( ! $this->upload->do_upload('uploadImage'))
            {
                $json['error'] = $this->upload->display_errors();
            }
            else
            {   $image = $this->upload->data();
                if(!empty($image)){
                    
                    $json['image'] = 'catalog/shop/'.$image['file_name'];
                    
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