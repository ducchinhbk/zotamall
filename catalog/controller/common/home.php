<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));
        
        $this->document->addScript('catalog/view/javascript/sequence-js/scripts/sequence.min.js');
        $this->document->addScript('catalog/view/javascript/sequence-js/scripts/hammer.min.js');
        
        $this->load->language('product/category');
		$this->load->model('catalog/category');
		$this->load->model('catalog/promotion');    
		$this->load->model('tool/image');
        
         /***Get categories ***/
        $data['categories'] = array();
        $results = $this->model_catalog_category->getLimitCategories(0, 7);
        foreach ($results as $result) {
            $data['categories'][] = array(
                'name' => $result['name'] ,
                'link' => $this->url->custom_link('promotion/explore', 'category='. $result['link']),
            );
        } 
        
        /***Featured promotions ***/
        $data['featured_promotions'] = array();
		$results = $this->model_catalog_promotion->getFeaturedPromotions();
		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], 375, 144);
				} else {
					$image = $this->model_tool_image->resize('no_image.jpg', 375, 144);
				}
				$data['featured_promotions'][] = array(
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

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}