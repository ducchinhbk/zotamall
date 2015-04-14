<?php

class ControllerProductShock extends Controller
{
    public function index()
    {
        $this->document->setTitle($this->config->get('config_title'));
        $this->document->setDescription($this->config->get('config_meta_description'));
        $data['heading_title'] = $this->config->get('config_title');

        $loginQuery = array();
        $this->session->data['currentpage'] = 'product/shock';
        if('' !== $this->customer->getId()){
            $loginQuery['name'] = $this->customer->getLastName();
            $loginQuery['email'] = $this->customer->getEmail();
            $loginQuery['image'] = $this->customer->getImage();
        }

        $data['footer'] = $this->load->controller('common/footer');
        $headerAction = new Action('common/header', $loginQuery);
        $data['header'] = $headerAction->execute($this->registry);

        $this->response->setOutput($this->load->view('default/template/product/dailydeal.tpl', $data));
    }
}

?>