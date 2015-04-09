<?php
class ControllerProductProductDn extends Controller {
    public function index() {
        $url = '';
        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
            $url .= '&page=' . $this->request->get['page'];
        } else {
            $page = 1;
            $url .= '&page=1';
        }
        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        $this->load->model('product/product_dn');
        $total = $this->model_product_product_dn->getTotal();

        $pagination = new Pagination();
        $pagination->total = $total;
        $pagination->page = $page;
        $pagination->limit = 50;
        $pagination->url = $this->url->link('deal/product_dn');
        $data['pagination'] = $pagination->render();
        $data['product_dns'] = $this->model_product_product_dn->getProducts($page, 50);
        $template = 'default/template/product/product_dn_list.tpl';

        return $this->load->view($template, $data);
    }

    public function insertOrUpdate(){
        $this->load->model('product/product_dn');
        $this->model_product_product_dn->insertOrUpdate($this->request->post);
        $this->response->setOutput(json_encode("success"));
    }

    public function getOrderedLink(){
        $this->load->model('product/product_dn');
        $data = $this->model_product_product_dn->getOrderedLink($this->request->get);
        $this->response->setOutput(json_encode($data));
    }
}
?>