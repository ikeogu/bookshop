<?php

    defined('DNS')? null :define ('DNS','mysql:host=localhost;dbname=heldy_products;charset=utf8');
	defined('DB_USER')? null: define('DB_USER','root');
	defined('DB_PASS')? null: define('DB_PASS', '');

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$config = array(
    'host' => $server ,
    'user' => $username ,
    'pw' => $password,
    'db' => $db 
);


?>
      
