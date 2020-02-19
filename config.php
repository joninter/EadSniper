<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE", "http://localhost/sniper/");
	$config['dbname'] = 'membros';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE", "http://meusite.com.br/");
	$config['dbname'] = 'membros';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}