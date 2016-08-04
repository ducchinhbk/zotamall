<?php
class ControllerAccountEdit extends Controller {
	private $error = array();

	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->custom_link('account/edit');

			$this->response->redirect($this->url->custom_link('account/login'));
		}

		$this->load->language('account/edit');

		$this->document->setTitle($this->language->get('heading_title'));

		
		$this->load->model('account/customer');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_account_customer->editCustomer($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			// Add to activity log
			$this->load->model('account/activity');

			$activity_data = array(
				'customer_id' => $this->customer->getId(),
				'name'        => $this->customer->getFirstName() . ' ' . $this->customer->getLastName()
			);

			$this->model_account_activity->addActivity('edit', $activity_data);

			$this->response->redirect($this->url->custom_link('account/account'));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_home'),
			'href'      => $this->url->home_url()
		);

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_account'),
			'href'      => $this->url->custom_link('account/account')
		);

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_edit'),
			'href'      => $this->url->custom_link('account/edit')
		);

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_your_details'] = $this->language->get('text_your_details');
		

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['firstname'])) {
			$data['error_firstname'] = $this->error['firstname'];
		} else {
			$data['error_firstname'] = '';
		}

		if (isset($this->error['lastname'])) {
			$data['error_lastname'] = $this->error['lastname'];
		} else {
			$data['error_lastname'] = '';
		}

		if (isset($this->error['aboutme'])) {
			$data['error_aboutme'] = $this->error['aboutme'];
		} else {
			$data['error_aboutme'] = '';
		}

		if (isset($this->error['telephone'])) {
			$data['error_telephone'] = $this->error['telephone'];
		} else {
			$data['error_telephone'] = '';
		}
        
        if (isset($this->error['new_password'])) {
			$data['error_new_password'] = $this->error['new_password'];
		} else {
			$data['error_new_password'] = '';
		}

		if (isset($this->error['confirm_password'])) {
			$data['error_confirm_password'] = $this->error['confirm_password'];
		} else {
			$data['error_confirm_password'] = '';
		}

		$data['action'] = $this->url->custom_link('account/edit');

		if ($this->request->server['REQUEST_METHOD'] != 'POST') {
			$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());
		}

		if (isset($this->request->post['firstname'])) {
			$data['firstname'] = $this->request->post['firstname'];
		} elseif (!empty($customer_info)) {
			$data['firstname'] = $customer_info['firstname'];
		} else {
			$data['firstname'] = '';
		}

		if (isset($this->request->post['lastname'])) {
			$data['lastname'] = $this->request->post['lastname'];
		} elseif (!empty($customer_info)) {
			$data['lastname'] = $customer_info['lastname'];
		} else {
			$data['lastname'] = '';
		}

		if (isset($this->request->post['aboutme'])) {
			$data['aboutme'] = $this->request->post['aboutme'];
		} elseif (!empty($customer_info)) {
			$data['aboutme'] = $customer_info['aboutme'];
		} else {
			$data['aboutme'] = '';
		}

		if (isset($this->request->post['telephone'])) {
			$data['telephone'] = $this->request->post['telephone'];
		} elseif (!empty($customer_info)) {
			$data['telephone'] = $customer_info['telephone'];
		} else {
			$data['telephone'] = '';
		}
        
        if (isset($this->request->post['image'])) {
			$data['image'] = $this->request->post['image'];
		} elseif (!empty($customer_info)) {
			$data['image'] = $customer_info['image'];
		} else {
			$data['image'] = '';
		}
        
	    $this->load->model('tool/image');

		if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($this->request->post['image'], 455, 210);
		} elseif (!empty($customer_info) && is_file(DIR_IMAGE . $customer_info['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($customer_info['image'], 455, 210);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('default.jpg', 455, 210);
		}
        

		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/edit', $data));
	}

	protected function validate() {
		if ((utf8_strlen(trim($this->request->post['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['firstname'])) > 32)) {
			$this->error['firstname'] = 'Tên không được trống hoặc dài quá 32 ký tự';
		}

		if ((utf8_strlen(trim($this->request->post['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['lastname'])) > 32)) {
			$this->error['lastname'] = 'Họ không được trống hoặc dài quá 32 ký tự';
		}

		if ((utf8_strlen($this->request->post['aboutme']) < 20) ) {
			$this->error['aboutme'] = 'Giới thiệu phải ít nhất 20 ký tự';
		}


		if ((utf8_strlen($this->request->post['telephone']) < 3) || (utf8_strlen($this->request->post['telephone']) > 32)) {
			$this->error['telephone'] = 'Số điện thoại chưa được điền hoặc không đúng định dạng';
		}

		if ( utf8_strlen($this->request->post['new_password']) < 6 ) {
			$this->error['new_password'] = 'Mật khẩu phải có ít nhất 6 ký tự';
		}

		if ($this->request->post['confirm_password'] != $this->request->post['new_password']) {
			$this->error['confirm_password'] = "Xác nhận mật khẩu chưa đúng";
		}

		return !$this->error;
	}
    
     public function image_upload() {
        $json['error'] = '';
        $json['image'] = '';
        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
            $config['upload_path']          = 'image/catalog/user/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $config['max_width']            = 2560;
            $config['max_height']           = 990;
    
    		$this->load->library('upload');
            
            $this->upload->initialize($config);
            
            
            if ( ! $this->upload->do_upload('uploadImage'))
            {
                $json['error'] = $this->upload->display_errors();
            }
            else
            {   $image = $this->upload->data();
                if(!empty($image)){
                    
                    $json['image'] = 'catalog/user/'.$image['file_name'];
                    
                }
    
            }
        
        }
        else{
            $json['error'] = 'Upload image fail';
        }
        
        $this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }
}