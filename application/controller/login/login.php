<?php
require_once(DIR_SYSTEM . 'library/Facebook/FacebookSession.php');
require_once(DIR_SYSTEM . 'library/Facebook/FacebookRequest.php');
require_once(DIR_SYSTEM . 'library/Facebook/FacebookResponse.php');
require_once(DIR_SYSTEM . 'library/Facebook/FacebookSDKException.php');
require_once(DIR_SYSTEM . 'library/Facebook/FacebookRequestException.php');
require_once(DIR_SYSTEM . 'library/Facebook/FacebookRedirectLoginHelper.php');
require_once(DIR_SYSTEM . 'library/Facebook/FacebookAuthorizationException.php');
require_once(DIR_SYSTEM . 'library/Facebook/GraphObject.php');
require_once(DIR_SYSTEM . 'library/Facebook/GraphUser.php');
require_once(DIR_SYSTEM . 'library/Facebook/GraphAlbum.php');
require_once(DIR_SYSTEM . 'library/Facebook/GraphSessionInfo.php');
require_once(DIR_SYSTEM . 'library/Facebook/Entities/AccessToken.php');
require_once(DIR_SYSTEM . 'library/Facebook/HttpClients/FacebookCurl.php');
require_once(DIR_SYSTEM . 'library/Facebook/HttpClients/FacebookHttpable.php');
require_once(DIR_SYSTEM . 'library/Facebook/HttpClients/FacebookCurlHttpClient.php');

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphAlbum;
use Facebook\GraphSessionInfo;
use Facebook\FacebookCurl;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;

class ControllerLoginLogin extends Controller {
    public function index($currentPage = '') {
        $app_id = '651313361641726';
        $app_secret = '2b4fd78d7d3acdfcfff6e50c064b8f37';
        $redirect_url = HTTP_SERVER. 'login';

        FacebookSession::setDefaultApplication($app_id,$app_secret);
        $helper = new FacebookRedirectLoginHelper($redirect_url);
        $sess = $helper->getSessionFromRedirect();
        if(isset($sess)){
            $request = new FacebookRequest($sess, 'GET', '/me');
            $response = $request->execute();
            $graph = $response->getGraphObject(GraphUser::className());
            $name = $graph->getName();
            $email = $graph->getProperty('email');
            $id = $graph->getId();
            $image = 'https://graph.facebook.com/'. $id . '/picture?width=30';

            $args = array(
                'name' => $name,
                'email' => $email,
                'image' => $image
            );
            // insert new customer
            $this->load->model('account/customer');
            $customer_id = $this->model_account_customer->insertOrUpdate($args);

            // set current user
            $this->session->data['customer_id'] = $customer_id;
            $this->customer = new Customer($this->registry);

            // redirect to current page
            $this->response->redirect($this->url->link($currentPage, '', 'SSL'));
        }else{
            $data['linkLoginFacebook'] = $helper->getLoginUrl();
            return $this->load->view('default/template/login/login.tpl', $data);
        }
    }

    public function logout(){
        $this->customer->logout();
        $this->response->redirect($this->url->link($this->session->data['currentpage']));
    }
}