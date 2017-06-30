<?php
session_start();
require_once 'vendor/autoload.php';

$appID = '266562370391449';
$secret = '1e27576f8086908f8b49a6b6bb120af4';
$fb = new Facebook\Facebook([
    'app_id'=>$appID,
    'app_secret'=>$secret,
    'default_graph_version'=>'v2.7',
]);

