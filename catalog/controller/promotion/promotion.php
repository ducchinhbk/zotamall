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
		  
        
            $data['footer'] = $this->load->controller('common/footer');
    		$data['header'] = $this->load->controller('common/header');
        		
    		$this->response->setOutput($this->load->view('promotion/promotion', $data));
	  
        }
        else{
            
            $this->load->language('error/not_found');

            $this->document->setTitle($this->language->get('heading_title'));

            $data['heading_title'] = $this->language->get('heading_title');

		    $data['text_error'] = $this->language->get('text_error');

            $data['button_continue'] = $this->language->get('button_continue');

            $data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
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
