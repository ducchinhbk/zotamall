<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink(HTTP_SERVER, 'canonical');
		}

        $loginQuery = array();
        $this->session->data['currentpage'] = 'common/home';

        if('' !== $this->customer->getId()){
            $loginQuery['name'] = $this->customer->getLastName();
            $loginQuery['email'] = $this->customer->getEmail();
            $loginQuery['image'] = $this->customer->getImage();
        }

		$data['footer'] = $this->load->controller('common/footer');
        $data['product_dn'] = $this->load->controller('product/product_dn');

        $headerAction = new Action('common/header', $loginQuery);
        $data['header'] = $headerAction->execute($this->registry);

        $data['login'] = $this->load->controller('login/login');
        $this->response->setOutput($this->load->view('default/template/common/home.tpl', $data));
	}
}