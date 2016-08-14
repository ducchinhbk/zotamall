<?php
class ControllerPromotionShop extends Controller {
	public function index() {
		
        $this->load->language('promotion/shop');
		$this->document->setTitle($this->language->get('heading_title'));
        
        if (isset($this->request->get['shop_id'])) {
			$shop_id = (int)$this->request->get['shop_id'];
		} else {
			$shop_id = 0;
		}
        
		$this->load->model('catalog/shop');
		$shop_info = $this->model_catalog_shop->getShop($shop_id);

		if ($shop_info) {
            
            $data['shop_info'] = $shop_info;
            
            $data['promotions'] = array();
            $this->load->model('catalog/promotion');
            $results = $this->model_catalog_promotion->getPromotionsByShopId($shop_id);
            $this->load->model('tool/image');
            foreach ($results as $result) {
    			if (is_file(DIR_IMAGE . $result['image'])) {
    				$image = $this->model_tool_image->resize($result['image'], 393, 151);
    			} else {
    				$image = $this->model_tool_image->resize('no_image.png', 393, 151);
    			}
                if ($this->customer->isLogged() && $this->customer->getId() == $shop_info['customer_id']) {
                    $action = '<div class="loged-action">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                  <i class="icon lg-icon icon-action"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="'. $this->url->custom_link($result['link'], 'action=edit', true) .'">Chỉnh sữa</a></li>
                                    <li><a href="javascript:void(0)" class="remove-action" data-id="'. $result['promotion_id'] .'" data-popup-open="popup-confirm">Xóa</a></li>
                                </ul>
                                </div> ';
                }
                else{
                    $action = '';
                }
                
                $data['promotions'][] = array(
    				'promotion_id' => $result['promotion_id'],
    				'image'        => $image,
    				'name'         => $result['name'],
    				'dateOuput'  => convertDate($result['start_date'], $result['end_date']),
    				'city'      => $shop_info['city'],
    				'action'       => $action,
                    'link'         => $this->url->custom_link($result['link'])
    			);
            
            }
            $data['viewLgMap'] = $this->url->custom_link('promotion/viewmap', array('lat' => $shop_info['latitute'], 'long' => $shop_info['longtitute']));
          
            $data['footer'] = $this->load->controller('common/footer');
    		$data['header'] = $this->load->controller('common/header');
    		
    		$this->response->setOutput($this->load->view('promotion/shop', $data));
	   } else {

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

	
}
