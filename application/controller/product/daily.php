<?php

class ControllerProductDaily extends Controller
{
    public function index()
    {
        $this->document->setTitle($this->config->get('config_title'));
        $this->document->setDescription($this->config->get('config_meta_description'));
        $data['heading_title'] = $this->config->get('config_title');

        $this->response->setOutput($this->load->view('default/template/product/dailydeal.tpl', $data));
    }
}

?>