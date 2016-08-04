<?php
class ControllerPromotionExplore extends Controller {
	public function index() {
		
        $this->load->language('promotion/shop');
        $this->document->setTitle($this->language->get('heading_title'));
		$this->document->setDescription( $this->language->get('heading_title') );
		$this->document->setKeywords( $this->language->get('heading_title') );
        
        $this->document->addStyle('catalog/view/theme/zingwo/stylesheet/about.css');
        $this->document->addStyle('catalog/view/javascript/calendar/bootstrap-datetimepicker.css');
        $this->document->addScript('catalog/view/javascript/calendar/moment-with-locales.js');
        $this->document->addScript('catalog/view/javascript/calendar/bootstrap-datetimepicker.js');
        
        
        $filter_name = $city = $category = $time = $type = null;
        $page = 1;
        $url = '';
        if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		}
        
        if (isset($this->request->get['city'])) {
			$city = $this->request->get['city'];
		}
        
        if (isset($this->request->get['category'])) {
			$category = $this->request->get['category'];
		}
        
        if (isset($this->request->get['time'])) {
			$time = $this->request->get['time'];
		}
        
		if (isset($this->request->get['type'])) {
			$type = $this->request->get['type'];
		} 
        
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		}

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}
        
        /*if (isset($this->request->get['category'])) {
			$url .= '&category=' . $this->request->get['category'];
		}
        if (isset($this->request->get['city'])) {
			$url .= '&city=' . $this->request->get['city'];
		}
        
        if (isset($this->request->get['category'])) {
			$url .= '&category=' . $this->request->get['category'];
		}
        
        if (isset($this->request->get['time'])) {
			$url .= '&time=' . $this->request->get['time'];
		}
        
        if (isset($this->request->get['type'])) {
			$url .= '&type=' . $this->request->get['type'];
		}
        
        if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		} */
        
        /***Get categories ***/
        $this->load->model('catalog/category');
        $data['categories'] = array();
        $data['activeCateName'] = $data['activeCateUrl'] = '';
        $results = $this->model_catalog_category->getCategories(0);
        foreach ($results as $result) {
            if (isset($this->request->get['category']) && $this->request->get['category'] == $result['link']) {
    			$data['activeCateName'] = $result['name'];
                $data['activeCateUrl'] = $result['link'];
    		}
    		$data['categories'][] = array(
                'name' => $result['name'],
                'link' => $result['link'],
            );
        } 
        
        /***Get city(zones)***/
        $this->load->model('catalog/zone');
        $data['cities'] = array();
        $results = $this->model_catalog_zone->getZonesByParentId(0);
        foreach ($results as $result) {
            
    		$data['cities'][] = array(
                'name' => $result['name'] ,
                'link' => $result['link'],
            );
        }
		
        
        //$data['url'] = $this->url->custom_link('promotion/explore', $url);
        
        
        /***Get promotions ***/
        $this->load->model('catalog/promotion');
        $this->load->model('tool/image');
        
        $data['promotions'] = array();
        $filter_data = array(
			'filter_name'	  => $filter_name,
			'type'            => $type,
            'time'            => $time,
            'category'       => $category,
            'city'           => $city,
			'start'           => ($page - 1) * 20,
			'limit'           => 20
		);
		$results = $this->model_catalog_promotion->getPromotions($filter_data);
		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], 375, 144);
				} else {
					$image = $this->model_tool_image->resize('no_image.jpg', 375, 144);
				}
				$data['promotions'][] = array(
					'promotion_id'  => $result['promotion_id'],
					'image'       => $image,
					'name'        => $result['name'],
					'shop_name'   => $result['shop_name'],
                    'dateOuput'  => convertDate($result['start_date'], $result['end_date']),
                    'city'  => $result['city'],
					'link'        => $this->url->custom_link($result['link'])
				);
			}
		}
        
        
        $data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
    		
		$this->response->setOutput($this->load->view('promotion/explore', $data));
	  

		
		
	}

	
}
