<?php
require_once(DIR_SYSTEM . 'library/facebook/FaceBookSession.php');
require_once(DIR_SYSTEM . 'library/facebook/FacebookRequest.php');
require_once(DIR_SYSTEM . 'library/facebook/FacebookResponse.php');
require_once(DIR_SYSTEM . 'library/facebook/FacebookSDKException.php');
require_once(DIR_SYSTEM . 'library/facebook/FacebookRequestException.php');
require_once(DIR_SYSTEM . 'library/facebook/FacebookRedirectLoginHelper.php');
require_once(DIR_SYSTEM . 'library/facebook/FacebookAuthorizationException.php');
require_once(DIR_SYSTEM . 'library/facebook/GraphObject.php');
require_once(DIR_SYSTEM . 'library/facebook/GraphUser.php');
require_once(DIR_SYSTEM . 'library/facebook/GraphSessionInfo.php');
require_once(DIR_SYSTEM . 'library/facebook/Entities/AccessToken.php');
require_once(DIR_SYSTEM . 'library/facebook/HttpClients/FacebookCurl.php');
require_once(DIR_SYSTEM . 'library/facebook/HttpClients/FacebookHttpable.php');
require_once(DIR_SYSTEM . 'library/facebook/HttpClients/FacebookCurlHttpClient.php');

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;
use Facebook\FacebookCurl;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;


class ControllerFacebookFacebook extends Controller {
    public function index() {
        $app_id = '651313361641726';
        $app_secret = '2b4fd78d7d3acdfcfff6e50c064b8f37';
        $redirect_url = 'http://localhost/zotamall?route=facebook/facebook';

        FacebookSession::setDefaultApplication($app_id,$app_secret);
        $helper = new FacebookRedirectLoginHelper($redirect_url);
        $sess = $helper->getSessionFromRedirect();
        if(isset($sess)){
            $request = new FacebookRequest($sess, 'GET', '/me');
            $response = $request->execute();
            $graph = $response->getGraphObject(GraphUser::className());
            $name = $graph->getName();
            echo 'Hi '. $name;
        }else{
            echo '<a href = "'. $helper->getLoginUrl() . '"> Login with facebook </a> ';
        }
    }
}
