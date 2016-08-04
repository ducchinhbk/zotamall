<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		
		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}
        
		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');
		
		$data['name'] = $this->config->get('config_name');

		
		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

	

		$data['home'] = $this->url->custom_link('common/home');
        $data['explore'] = $this->url->custom_link('promotion/explore', '', true);
        $data['create'] = $this->url->custom_link('manage/create', '', true);
		$data['wishlist'] = $this->url->custom_link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->custom_link('account/account', '', true);
        $data['edit_profile'] = $this->url->custom_link('account/edit', '', true);
		$data['register'] = $this->url->custom_link('account/register', '', true);
		$data['login'] = $this->url->custom_link('account/login', '', true);
		$data['order'] = $this->url->custom_link('account/order', '', true);
		$data['logout'] = $this->url->custom_link('account/logout', '', true);

        $data['promotion'] = '';
        if($this->customer->isLogged())
        {
            $this->load->model('catalog/shop');
            $shop_info = $this->model_catalog_shop->getShopByCustomerId($this->customer->getId());
            if(!empty($shop_info))
            {
                $data['promotion'] = $this->url->custom_link($shop_info['link']);
            }
        }
		
		
			

		return $this->load->view('common/header', $data);
		
	}
}