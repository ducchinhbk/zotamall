<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url {
	private $ssl;
	private $rewrite = array();

	public function __construct($ssl = false) {
		$this->ssl = $ssl;
	}
	
	public function addRewrite($rewrite) {
		$this->rewrite[] = $rewrite;
	}

	public function link($route, $args = '', $secure = false) {
		if ($this->ssl && $secure) {
			$url = 'https://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/index.php?route=' . $route;
		} else {
			$url = 'http://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/index.php?route=' . $route;
		}
		
		if ($args) {
		 
			if (is_array($args)) {
				$url .= '&amp;' . http_build_query($args);
			} else {
				$url .= str_replace('&', '&amp;', '&' . ltrim($args, '&'));
			}
		}

		foreach ($this->rewrite as $rewrite) {
			$url = $rewrite->rewrite($url);
		}

		return $url;
	}
    
    public function custom_link($route, $args = '', $secure = false) {
		if ($this->ssl && $secure) {
			$url = 'https://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/' . $route;
		} else {
			$url = 'http://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/' . $route;
		}
		
		if ($args) {
		 
			if (is_array($args)) {
				$url .= '&amp;' . http_build_query($args);
			} else {
				$url .= str_replace('&', '?', '&' . ltrim($args, '&'));
			}
		}


		return $url;
	}
    
    public function home_url($secure = false) {
		if ($this->ssl && $secure) {
			$url = 'https://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/';
		} else {
			$url = 'http://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/';
		}
		
		
		return $url;
	}
}