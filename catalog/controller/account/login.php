<?php
require_once DIR_FACEBOOK.'/autoload.php';

class ControllerAccountLogin extends Controller {
	private $error = array();
	
	public function index() {
		
		if ($this->customer->isLogged()) {
			$this->response->redirect($this->url->custom_link('account/account'));
		}
		
		$this->load->language('account/login');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('account/customer');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			// Unset guest
			unset($this->session->data['guest']);
            //set token for preventing CSRF
            $token = token(32);
            $this->session->data['token']  = $token;
            setcookie('token', $token, time() + 60 * 60 * 24 * 30, '/', $this->request->server['HTTP_HOST']);
			// Wishlist
			if (isset($this->session->data['wishlist']) && is_array($this->session->data['wishlist'])) {
				$this->load->model('account/wishlist');

				foreach ($this->session->data['wishlist'] as $key => $product_id) {
					$this->model_account_wishlist->addWishlist($product_id);

					unset($this->session->data['wishlist'][$key]);
				}
			}

			// Add to activity log
			$this->load->model('account/activity');

			$activity_data = array(
				'customer_id' => $this->customer->getId(),
				'name'        => $this->customer->getFirstName() . ' ' . $this->customer->getLastName()
			);

			$this->model_account_activity->addActivity('login', $activity_data);

			// Added strpos check to pass McAfee PCI compliance test (http://forum.opencart.com/viewtopic.php?f=10&t=12043&p=151494#p151295)
			if (isset($this->request->post['redirect']) && (strpos($this->request->post['redirect'], $this->config->get('config_url')) !== false || strpos($this->request->post['redirect'], $this->config->get('config_ssl')) !== false)) {
				$this->response->redirect(str_replace('&amp;', '&', $this->request->post['redirect']));
			} else {
				$this->response->redirect($this->url->custom_link('account/account'));
			}
		}
		//facebook login setup
		$fb = new Facebook\Facebook(array(
		  'app_id' => '189952838014491',
		  'app_secret' => '4112151381263a557fa64a8f92f8dbe2',
		  'default_graph_version' => 'v2.5',
		));
		$helper = $fb->getRedirectLoginHelper();
		$permissions = array('email', 'user_likes'); // optional
		$callBack = $this->url->custom_link('account/login/fblogin');
		$loginUrl = $helper->getLoginUrl($callBack, $permissions);
		$data['fbLogin'] = $loginUrl;
		
		if (isset($this->session->data['error'])) {
			$data['error_warning'] = $this->session->data['error'];

			unset($this->session->data['error']);
		} elseif (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['action'] = $this->url->custom_link('account/login');
		$data['register'] = $this->url->custom_link('account/register');
		$data['forgotten'] = $this->url->custom_link('account/forgotten');

		// Added strpos check to pass McAfee PCI compliance test (http://forum.opencart.com/viewtopic.php?f=10&t=12043&p=151494#p151295)
		if (isset($this->request->post['redirect']) && (strpos($this->request->post['redirect'], $this->config->get('config_url')) !== false || strpos($this->request->post['redirect'], $this->config->get('config_ssl')) !== false)) {
			$data['redirect'] = $this->request->post['redirect'];
		} elseif (isset($this->session->data['redirect'])) {
			$data['redirect'] = $this->session->data['redirect'];

			unset($this->session->data['redirect']);
		} else {
			$data['redirect'] = '';
		}
        
        $data['email'] = '';
        $data['success'] = '';
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		}

		if (isset($this->request->post['email'])) {
			$data['email'] = $this->request->post['email'];
		}

		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/login', $data));
	}

	protected function validate() {
		// Check how many login attempts have been made.
		$login_info = $this->model_account_customer->getLoginAttempts($this->request->post['email']);

		if ($login_info && ($login_info['total'] >= $this->config->get('config_login_attempts')) && strtotime('-1 hour') < strtotime($login_info['date_modified'])) {
			$this->error['warning'] = $this->language->get('error_attempts');
		}

		// Check if customer has been approved.
		$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

		if ($customer_info && !$customer_info['approved']) {
			$this->error['warning'] = $this->language->get('error_approved');
		}

		if (!$this->error) {
			if (!$this->customer->login($this->request->post['email'], $this->request->post['password'])) {
				$this->error['warning'] = $this->language->get('error_login');

				$this->model_account_customer->addLoginAttempt($this->request->post['email']);
			} else {
				$this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
			}
		}

		return !$this->error;
	}
	
	public function fblogin(){
		if (!isset($this->request->get['code'])) {
			$this->response->redirect($this->url->home_url());
		}
		$this->load->model('account/customer');
        
		$fb = new Facebook\Facebook(array(
		  'app_id' => '189952838014491',
		  'app_secret' => '4112151381263a557fa64a8f92f8dbe2',
		  'default_graph_version' => 'v2.5',
		));

		$helper = $fb->getRedirectLoginHelper();
		try {
		  $accessToken = $helper->getAccessToken();
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
		  // When Graph returns an error
		  echo 'Login facebook error: ' . $e->getMessage();
		  exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  // When validation fails or other local issues
		  echo 'Login facebook error: ' . $e->getMessage();
		  exit;
		}

		if (isset($accessToken)) {
		  // to do here
            try {
              $response = $fb->get('/me?fields=id,first_name,last_name,email', $accessToken);
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
              // When Graph returns an error
              echo 'Graph returned an error: ' . $e->getMessage();
              exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
              // When validation fails or other local issues
              echo 'Facebook SDK returned an error: ' . $e->getMessage();
              exit;
            }
            $user = $response->getGraphUser();
            
            $img = file_get_contents('https://graph.facebook.com/'.$user->getField('id').'/picture?type=large');
            $image = 'catalog/user/'.$user->getField('id').'.jpg';
            if (!is_file(DIR_IMAGE . $image)) {
                file_put_contents($image, $img);
            }
            
            $customerData = array(
                'email' => $user->getField('email'),
                'first_name' => $user->getField('first_name'),
                'last_name' => $user->getField('last_name'),
                'image' => $image,
                'password' => '@##!9fahf',
            );
            //set token for preventing CSRF
            $token = token(32);
            $this->session->data['token']  = $token;
            setcookie('token', $token, time() + 60 * 60 * 24 * 30, '/', $this->request->server['HTTP_HOST']);
            // Add to activity log
			$this->load->model('account/activity');
            
            $customerInfo = $this->model_account_customer->getCustomerByEmail($customerData['email']);
            if(!empty($customerInfo)){
                $this->customer->login($customerInfo['email'], '', true);
                
                $activity_data = array(
    				'customer_id' => $customerInfo['customer_id'],
    				'name'        => $customerInfo['firstname'] . ' ' . $customerInfo['lastname']
    			);
    			$this->model_account_activity->addActivity('facebook_login', $activity_data);

                $this->response->redirect($this->url->custom_link('account/account'));
            }
            
            $customer_id = $this->model_account_customer->addCustomer($customerData);
			$this->customer->login($customerData['email'], '', true);

			unset($this->session->data['guest']);
			$activity_data = array(
				'customer_id' => $customer_id,
				'name'        => $customerData['firstname'] . ' ' . $customerData['lastname']
			);
			$this->model_account_activity->addActivity('facebook_login', $activity_data);

			$this->response->redirect($this->url->custom_link('account/account'));
            
		}
	}
    public function glogin(){
        
    }
}
