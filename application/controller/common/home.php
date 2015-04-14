<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink(HTTP_SERVER, 'canonical');
		}

        $loginQuery = '';
        if(isset($this->request->get['name'])){
            $loginQuery .= '?name='. $this->request->get['name'];
        }
        if(isset($this->request->get['email'])){
            $loginQuery .= '&email='. $this->request->get['email'];
        }
        if(isset($this->request->get['image'])){
            $loginQuery .= '&image='. $this->request->get['image'];
        }

		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header'. $loginQuery);
        $data['product_dn'] = $this->load->controller('product/product_dn');

        $loginAction = new Action('login/login', array('currentpage'=> 'common/home'));
        $data['login'] = $loginAction->execute($this->registry);

        $this->response->setOutput($this->load->view('default/template/common/home.tpl', $data));
	}
}