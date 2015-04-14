<?php
class ControllerCommonSeoUrl extends Controller {
    private $secertID = 789;

	public function index() {
		// Add rewrite to url class
		if ($this->config->get('config_seo_url')) {
			$this->url->addRewrite($this);
		}

		// Decode URL
        if (isset($this->request->get['_route_'])) {
            $url = $this->request->get['_route_'];
            if (strpos($url,'shock') !== false) {
                $this->request->get['route'] = 'product/shock';
            }
            if (strpos($url,'daily') !== false) {
                $this->request->get['route'] = 'product/daily';
            }

            if (isset($this->request->get['route'])) {
                return new Action($this->request->get['route']);
            }
        }
	}

	public function rewrite($link) {
		$url_info = parse_url(str_replace('&amp;', '&', $link));

		$url = $url_info['scheme'] . '://' . $url_info['host'] . (isset($url_info['port']) ? ':' . $url_info['port'] : '') . str_replace('/index.php', '', $url_info['path']);

		$data = array();

		parse_str($url_info['query'], $data);

        foreach($data as $key => $value){
            if(isset($data['route'])){
                $route = $data['route'];

                if(strpos($route, 'product/shock') !== false){
                    $url .= '/shock';
                }
                if(strpos($route, 'product/daily') !== false){
                    $url .= '/daily';
                }
            }elseif ($key == 'product_id'){
                $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "product` WHERE product_id=" . (int)$key);
                $product = $query->row;
                if(isset($product['product_id'])){
                    $url .= '/' . $this->remove_vietnamese_accents($product['name']) . '-' . ($key + $this->$secertID);
                }
            }
        }
        return $url;
	}

    function remove_vietnamese_accents($string) {
        $trans = array(
            'à'=>'a','á'=>'a','ả'=>'a','ã'=>'a','ạ'=>'a',
            '?'=>'a','?'=>'a','?'=>'a','?'=>'a','?'=>'a','?'=>'a',
            'â'=>'a','?'=>'a','?'=>'a','?'=>'a','?'=>'a','?'=>'a',
            'À'=>'a','Á'=>'a','?'=>'a','Ã'=>'a','?'=>'a',
            '?'=>'a','?'=>'a','?'=>'a','?'=>'a','?'=>'a','?'=>'a',
            'Â'=>'a','?'=>'a','?'=>'a','?'=>'a','?'=>'a','?'=>'a',
            '?'=>'d','?'=>'d',
            'è'=>'e','é'=>'e','?'=>'e','?'=>'e','?'=>'e',
            'ê'=>'e','?'=>'e','?'=>'e','?'=>'e','?'=>'e','?'=>'e',
            'È'=>'e','É'=>'e','?'=>'e','?'=>'e','?'=>'e',
            'Ê'=>'e','?'=>'e','?'=>'e','?'=>'e','?'=>'e','?'=>'e',
            'ì'=>'i','í'=>'i','?'=>'i','?'=>'i','?'=>'i',
            'Ì'=>'i','Í'=>'i','?'=>'i','?'=>'i','?'=>'i',
            'ò'=>'o','ó'=>'o','?'=>'o','õ'=>'o','?'=>'o',
            'ô'=>'o','?'=>'o','?'=>'o','?'=>'o','?'=>'o','?'=>'o',
            '?'=>'o','?'=>'o','?'=>'o','?'=>'o','?'=>'o','?'=>'o',
            'Ò'=>'o','Ó'=>'o','?'=>'o','Õ'=>'o','?'=>'o',
            'Ô'=>'o','?'=>'o','?'=>'o','?'=>'o','?'=>'o','?'=>'o',
            '?'=>'o','?'=>'o','?'=>'o','?'=>'o','?'=>'o','?'=>'o',
            'ù'=>'u','ú'=>'u','?'=>'u','?'=>'u','?'=>'u',
            '?'=>'u','?'=>'u','?'=>'u','?'=>'u','?'=>'u','?'=>'u',
            'Ù'=>'u','Ú'=>'u','?'=>'u','?'=>'u','?'=>'u',
            '?'=>'u','?'=>'u','?'=>'u','?'=>'u','?'=>'u','?'=>'u',
            '?'=>'y','ý'=>'y','?'=>'y','?'=>'y','?'=>'y',
            'Y'=>'y','?'=>'y','Ý'=>'y','?'=>'y','?'=>'y','?'=>'y'
        );
        return strtr($string, $trans);
    }
}
