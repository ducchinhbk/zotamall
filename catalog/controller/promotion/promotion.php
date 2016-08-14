<?php
class ControllerPromotionPromotion extends Controller {
	public function index() {
		
        $this->load->language('promotion/shop');
		$this->document->setTitle($this->language->get('heading_title'));
        
        $this->document->addStyle('catalog/view/theme/zingwo/stylesheet/about.css');
        
        if (isset($this->request->get['action'])) {
			$action = $this->request->get['action'];
		} else {
			$action = '';
		}
        
        if($action == 'edit'){
            $this->edit();
        }
        else{
            $this->detail();
        }
           
	}

    protected function detail()
    {
        if (isset($this->request->get['promotion_id'])) {
			$promotion_id = (int)$this->request->get['promotion_id'];
		} else {
			$promotion_id = 0;
		}
        
        $this->load->model('catalog/promotion');
        $promotion_info = $this->model_catalog_promotion->getPromotion($promotion_id);
		if ( !empty($promotion_info) ) {
		    $this->load->model('tool/image');
		    $this->load->model('catalog/shop');
            $shop_info = $this->model_catalog_shop->getShop($promotion_info['shop_id']);
            
            $avatar = $this->model_tool_image->resize('catalog/shop/default_shop.png', 128, 128);
            if ($shop_info['avatar']) {
                $avatar = $this->model_tool_image->resize($shop_info['avatar'], 128, 128);
            }  
            $data['shop'] = array(
  				'shop_id' => $shop_info['shop_id'],
  				'avatar' => $avatar,
  				'name' => $shop_info['name'],
  				'telephone' => $shop_info['telephone'],
                'short_description' => $shop_info['short_description'],
                'address' => $shop_info['address'].', '. $shop_info['district'] .', '. $shop_info['city'],
                'district' => $shop_info['district'],
  				'city' => $shop_info['city'],
                'latitute' => $shop_info['latitute'],
                'longtitute' => $shop_info['longtitute'],
                'link' => $this->url->custom_link($shop_info['link']),
                'viewLgMap' => $this->url->custom_link('promotion/viewmap', array('lat' => $shop_info['latitute'], 'long' => $shop_info['longtitute'])),
   			);
            
            $data['promotion'] = $promotion_info;
            $data['fb_share'] = $this->url->custom_link($promotion_info['link']);
            
            $data['footer'] = $this->load->controller('common/footer');
    		$data['header'] = $this->load->controller('common/header');
    		$this->response->setOutput($this->load->view('promotion/promotion', $data));
        }
        else{
            $this->response->redirect($this->url->custom_link('error/not_found'));
        }
    }
    
    protected function edit(){
        if (isset($this->request->get['promotion_id'])) {
			$promotion_id = (int)$this->request->get['promotion_id'];
		} else {
			$promotion_id = 0;
		}
        $this->load->model('catalog/promotion');
        $promotion_info = $this->model_catalog_promotion->getPromotion($promotion_id);
		if ( empty($promotion_info) ) {
            $this->response->redirect($this->url->home_url());
        }
        
        if($this->customer->getId() != $promotion_info['customer_id'])
        {
            $this->response->redirect($this->url->home_url());
        }
        
        $this->document->addStyle('catalog/view/javascript/calendar/bootstrap-datetimepicker.css');
        $this->document->addScript('catalog/view/javascript/calendar/moment-with-locales.js');
        $this->document->addScript('catalog/view/javascript/calendar/bootstrap-datetimepicker.js');
        
        
        $data['promotion_id'] = $promotion_id;
        $data['footer'] = $this->load->controller('common/footer');
  		$data['header'] = $this->load->controller('common/header');
        		
  		$this->response->setOutput($this->load->view('promotion/promotion_edit', $data));
    }
    
    public function delete(){
        $json = array();
        if (!isset($this->request->post['promotion_id'])) {
            $json['error'] = 'Khuyến mãi bạn muốn xóa không tồn tại.';
		}
        else{
            $this->load->model('catalog/promotion');
            $promotion = $this->model_catalog_promotion->getPromotion($this->request->post['promotion_id']);
            if (!$this->customer->isLogged() || $this->customer->getId() != (int)$promotion['customer_id']) {
                $json['redirect'] = $this->url->home_url();    
            }
            else{
                $this->load->model('account/activity');
                $activity_data = array(
                    'customer_id' => $this->customer->getId(),
                    'name'        => $this->customer->getFirstName() . ' ' . $this->customer->getLastName()
                );
                $this->model_catalog_promotion->deletePromotion($this->request->post['promotion_id']);
                $this->model_account_activity->addActivity('promotion_delete', $activity_data);
                $json['success'] = 'Khuyến mãi đã được xóa thành công.';
            }
        }
        
        $this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }
	
}
