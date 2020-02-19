<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://localhost/sniper/");
    $config['dbname'] = 'membros';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else {
    define("BASE_URL", "https://www.membros.sniper.com/");
    $config['dbname'] = 'membros';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;
try {
    $db = new PDO("mysql:dbname".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
}catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}