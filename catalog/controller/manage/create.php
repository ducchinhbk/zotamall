<?php
class ControllerManageCreate extends Controller {
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
        
        $data['shop_info'] = array();
        
        $this->load->model('catalog/shop');
        $shop_info = $this->model_catalog_shop->getShopByCustomerId($this->customer->getId());
        
        
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
        
        if(!empty($shop_info)){
		  $this->response->setOutput($this->load->view('manage/create', $data));
        }
        else{
            $this->response->setOutput($this->load->view('manage/first_create', $data));
        }
	}

    public function zone() {
		$json = array();

		$this->load->model('localisation/zone');
        if(isset($this->request->get['parent_id']) && $this->request->get['parent_id'] != 0)
        {
    		$zones = $this->model_localisation_zone->getZonesByParentId($this->request->get['parent_id']);
    
    		foreach ($zones as $zone) {
    
    			$json['zones'][] = array(
    				'zone_id'     => $zone['zone_id'],
    				'name'        => $zone['name'],
    				'code'        => $zone['code'],
    				'sort'        => $zone['sort'],
    				'status'      => $zone['status']
    			);
    		}
        }

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
}