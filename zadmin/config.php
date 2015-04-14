<?php
define('DIR_ROOT_NAME','zotamall');
define('DIR_APP_NAME', 'zadmin');
define('ROOT_PATH', 'D:\xampp\htdocs/');
define('PROJECT_PATH', ROOT_PATH. DIR_ROOT_NAME);

// HTTP
define('HTTP_SERVER', 'http://localhost/'. DIR_ROOT_NAME .'/'. DIR_APP_NAME .'/');
define('HTTP_CATALOG', 'http://localhost/'. DIR_ROOT_NAME .'/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/'. DIR_ROOT_NAME .'/'. DIR_APP_NAME .'/');
define('HTTPS_CATALOG', 'http://localhost/'. DIR_ROOT_NAME .'/');

// DIR
define('DIR_APPLICATION', PROJECT_PATH. '/'. DIR_APP_NAME .'/');
define('DIR_SYSTEM', PROJECT_PATH . '/system/');
define('DIR_LANGUAGE', PROJECT_PATH . '/'. DIR_APP_NAME .'/language/');
define('DIR_TEMPLATE', PROJECT_PATH. '/'. DIR_APP_NAME .'/view/template/');
define('DIR_CONFIG', PROJECT_PATH. '/system/config/');
define('DIR_IMAGE', PROJECT_PATH. '/image/');
define('DIR_CACHE', PROJECT_PATH. '/system/cache/');
define('DIR_DOWNLOAD', PROJECT_PATH . '/system/download/');
define('DIR_UPLOAD', PROJECT_PATH. '/system/upload/');
define('DIR_LOGS', PROJECT_PATH. '/system/logs/');
define('DIR_MODIFICATION', PROJECT_PATH. '/system/modification/');
define('DIR_CATALOG', PROJECT_PATH.'/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'zotamall');
define('DB_PREFIX', '');
