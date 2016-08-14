<?php
class ControllerPromotionViewmap extends Controller {
	public function index() {
		
        $this->load->language('promotion/shop');
        $this->document->setTitle($this->language->get('heading_title'));
		$this->document->setDescription( $this->language->get('heading_title') );
		$this->document->setKeywords( $this->language->get('heading_title') );
        
        if (!isset($this->request->get['lat']) || !isset($this->request->get['long'])) {
			$this->response->redirect($this->url->custom_link('error/not_found'));
		}
        $data['lat'] = $this->request->get['lat'];
        $data['long'] = $this->request->get['long'];
        
        $data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
    		
		$this->response->setOutput($this->load->view('promotion/viewmap', $data));
	  

		
		
	}

	
}
