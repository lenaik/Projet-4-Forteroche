<?php
session_start();
require('controller/frontend.php');
require('controller/backend.php');
require('config/router.php');

$router = new Router;
$router->init();
