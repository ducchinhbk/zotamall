<?php
class ControllerCatalogProductDn extends Controller {
    private $error = array();

    public function index() {
        $this->document->setTitle('Sản phẩm đề nghị');
        $this->load->model('catalog/product_dn');
        $this->getList();
    }

    public function edit(){
        $this->load->language('catalog/product');
        $this->document->setTitle('Sản phẩm đề nghị');
        $this->load->model('catalog/product_dn');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validatePermission()) {
            $this->model_catalog_product_dn->updateProductDn($this->request->post);
        }
        $this->getFrom();
    }

    public function delete(){
        $this->document->setTitle('Sản phẩm đề nghị');
        $this->load->model('catalog/product_dn');

        if (isset($this->request->post['selected']) && $this->validatePermission()) {
            $this->model_catalog_product_dn->deleteProductDn($this->request->post['selected']);
        }

        $this->getList();
    }

    protected function getFrom(){
        $product_dn_id = (int)$_REQUEST['product_dn_id'];

        $productDN = $this->model_catalog_product_dn->getProductDN($product_dn_id);
        if(isset($productDN['product_dn_id'])){
            // current Page
            $url = '';

            if (isset($this->request->get['page'])) {
                $page = $this->request->get['page'];
                $url .= '&page=' . $this->request->get['page'];
            } else {
                $page = 1;
                $url .= '&page=1';
            }
            // BreadCrumbs
            $data['breadcrumbs'] = array();
            $data['breadcrumbs'][] = array(
                'text'      => $this->language->get('text_home'),
                'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
                'separator' => false
            );
            $data['breadcrumbs'][] = array(
                'text'      => 'Sản phẩm đề nghị',
                'href'      => $this->url->link('catalog/product_dn', 'token=' . $this->session->data['token'] . $url, 'SSL'),
                'separator' => ' :: '
            );
            $data['cancel'] = $this->url->link('catalog/product_dn', 'token=' . $this->session->data['token'] . $url, 'SSL');
            $data['action'] = $this->url->link('catalog/product_dn/edit', 'token=' . $this->session->data['token'] . $url, 'SSL');

            $this->load->model('tool/image');

            if (isset($productDN['image']) && is_file(DIR_IMAGE . $productDN['image']) ) {
                $image = $this->model_tool_image->resize($productDN['image'], 40, 40);
            } elseif(strpos($productDN['image'], DIR_ROOT_NAME) < 0){
                $image = $productDN['image'];
            } else {
                $image = $this->model_tool_image->resize('no_image.jpg', 40, 40);
            }

            $data['productdn'] = array(
                'product_dn_id' => $productDN['product_dn_id'],
                'name' => $productDN['name'],
                'link' => $productDN['link'],
                'image' => $image,
                'description' => $productDN['description'],
                'number_dn' => $productDN['number_dn'],
                'max_dn' => $productDN['max_dn'],
                'status' => $productDN['status']
            );

            $data['token'] = $this->session->data['token'];
            $data['error_warning']= '';
            $data['text_form'] = 'Chỉnh sửa sản phẩm đề nghị';

            $template = 'catalog/product_dn_form.tpl';
            $data['header'] = $this->load->controller('common/header');
            $data['column_left'] = $this->load->controller('common/column_left');
            $data['footer'] = $this->load->controller('common/footer');

            $this->response->setOutput($this->load->view($template, $data));
        }
    }

    protected function getList() {
        if (isset($this->request->get['filter_name'])) {
            $filter_name = $this->request->get['filter_name'];
        } else {
            $filter_name = null;
        }

        if (isset($this->request->get['filter_model'])) {
            $filter_model = $this->request->get['filter_model'];
        } else {
            $filter_model = null;
        }

        if (isset($this->request->get['filter_price'])) {
            $filter_price = $this->request->get['filter_price'];
        } else {
            $filter_price = null;
        }

        if (isset($this->request->get['filter_quantity'])) {
            $filter_quantity = $this->request->get['filter_quantity'];
        } else {
            $filter_quantity = null;
        }

        if (isset($this->request->get['filter_status'])) {
            $filter_status = $this->request->get['filter_status'];
        } else {
            $filter_status = null;
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'pd.name';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_model'])) {
            $url .= '&filter_model=' . urlencode(html_entity_decode($this->request->get['filter_model'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_price'])) {
            $url .= '&filter_price=' . $this->request->get['filter_price'];
        }

        if (isset($this->request->get['filter_quantity'])) {
            $url .= '&filter_quantity=' . $this->request->get['filter_quantity'];
        }

        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
        }

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('Sản phẩm đề nghị'),
            'href' => $this->url->link('catalog/product_dn', 'token=' . $this->session->data['token'] . $url, 'SSL')
        );

        $data['add'] = $this->url->link('catalog/product_dn/add', 'token=' . $this->session->data['token'] . $url, 'SSL');
        $data['copy'] = $this->url->link('catalog/product_dn/copy', 'token=' . $this->session->data['token'] . $url, 'SSL');
        $data['delete'] = $this->url->link('catalog/product_dn/delete', 'token=' . $this->session->data['token'] . $url, 'SSL');

        $data['productdns'] = array();

        $filter_data = array(
            'filter_name'	  => $filter_name,
            'filter_model'	  => $filter_model,
            'filter_price'	  => $filter_price,
            'filter_quantity' => $filter_quantity,
            'filter_status'   => $filter_status,
            'sort'            => $sort,
            'order'           => $order,
            'start'           => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit'           => $this->config->get('config_limit_admin')
        );

        $this->load->model('tool/image');

        //$product_total = $this->model_catalog_product_dn->getTotalProducts($filter_data);
        $product_total = $this->model_catalog_product_dn->getTotal();

        $results = $this->model_catalog_product_dn->getProducts($page, 50);
        foreach ($results as $result) {
            if (isset($result['image']) && is_file(DIR_IMAGE . $result['image']) ) {
                $image = $this->model_tool_image->resize($result['image'], 40, 40);
            } elseif(strpos($result['image'], DIR_ROOT_NAME) < 0){
                $image = $result['image'];
            } else {
                $image = $this->model_tool_image->resize('no_image.jpg', 40, 40);
            }

            $data['productdns'][] = array(
                'product_dn_id' => $result['product_dn_id'],
                'image'      => $image,
                'link'       => $result['link'],
                'name'      => $result['name'],
                'number_dn'  => $result['number_dn'],
                'status'  => $result['status'],
                'edit'       => $this->url->link('catalog/product_dn/edit', 'token=' . $this->session->data['token'] . '&product_dn_id=' . $result['product_dn_id'] . $url, 'SSL')
            );
        }

        $data['heading_title'] = $this->language->get('heading_title');

        $data['text_list'] = $this->language->get('text_list');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        $data['text_no_results'] = $this->language->get('text_no_results');
        $data['text_confirm'] = $this->language->get('text_confirm');

        $data['column_image'] = $this->language->get('column_image');
        $data['column_name'] = $this->language->get('column_name');
        $data['column_model'] = $this->language->get('column_model');
        $data['column_price'] = $this->language->get('column_price');
        $data['column_quantity'] = $this->language->get('column_quantity');
        $data['column_status'] = $this->language->get('column_status');
        $data['column_action'] = $this->language->get('column_action');

        $data['entry_name'] = $this->language->get('entry_name');
        $data['entry_model'] = $this->language->get('entry_model');
        $data['entry_price'] = $this->language->get('entry_price');
        $data['entry_quantity'] = $this->language->get('entry_quantity');
        $data['entry_status'] = $this->language->get('entry_status');

        $data['button_copy'] = $this->language->get('button_copy');
        $data['button_add'] = $this->language->get('button_add');
        $data['button_edit'] = $this->language->get('button_edit');
        $data['button_delete'] = $this->language->get('button_delete');
        $data['button_filter'] = $this->language->get('button_filter');

        $data['token'] = $this->session->data['token'];

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->request->post['selected'])) {
            $data['selected'] = (array)$this->request->post['selected'];
        } else {
            $data['selected'] = array();
        }

        $url = '';

        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_model'])) {
            $url .= '&filter_model=' . urlencode(html_entity_decode($this->request->get['filter_model'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_price'])) {
            $url .= '&filter_price=' . $this->request->get['filter_price'];
        }

        if (isset($this->request->get['filter_quantity'])) {
            $url .= '&filter_quantity=' . $this->request->get['filter_quantity'];
        }

        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
        }

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_name'] = $this->url->link('catalog/product_dn', 'token=' . $this->session->data['token'] . '&sort=pd.name' . $url, 'SSL');
        $data['sort_model'] = $this->url->link('catalog/product_dn', 'token=' . $this->session->data['token'] . '&sort=p.model' . $url, 'SSL');
        $data['sort_price'] = $this->url->link('catalog/product_dn', 'token=' . $this->session->data['token'] . '&sort=p.price' . $url, 'SSL');
        $data['sort_quantity'] = $this->url->link('catalog/product_dn', 'token=' . $this->session->data['token'] . '&sort=p.quantity' . $url, 'SSL');
        $data['sort_status'] = $this->url->link('catalog/product_dn', 'token=' . $this->session->data['token'] . '&sort=p.status' . $url, 'SSL');
        $data['sort_order'] = $this->url->link('catalog/product_dn', 'token=' . $this->session->data['token'] . '&sort=p.sort_order' . $url, 'SSL');

        $url = '';

        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_model'])) {
            $url .= '&filter_model=' . urlencode(html_entity_decode($this->request->get['filter_model'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_price'])) {
            $url .= '&filter_price=' . $this->request->get['filter_price'];
        }

        if (isset($this->request->get['filter_quantity'])) {
            $url .= '&filter_quantity=' . $this->request->get['filter_quantity'];
        }

        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
        }

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $product_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/product', 'token=' . $this->session->data['token'] . $url . '&page={page}', 'SSL');

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($product_total - $this->config->get('config_limit_admin'))) ? $product_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $product_total, ceil($product_total / $this->config->get('config_limit_admin')));

        $data['filter_name'] = $filter_name;
        $data['filter_model'] = $filter_model;
        $data['filter_price'] = $filter_price;
        $data['filter_quantity'] = $filter_quantity;
        $data['filter_status'] = $filter_status;

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/product_dn_list.tpl', $data));
    }

    protected function validatePermission() {
        if (!$this->user->hasPermission('modify', 'catalog/product')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        return !$this->error;
    }
}
?>