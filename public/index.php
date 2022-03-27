<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\HomeApp;
use coding\app\controllers\Category;
use coding\app\controllers\Checkout;
use coding\app\controllers\Details;

$system=new AppSystem;

Router::get('/',[HomeApp::class,'show']);
Router::get('/category',[Category::class,'showCategory']);

Router::get('/checkout',[Checkout::class,'showCheckout']);
Router::get('/details',[Details::class,'showDetails']);


Router::get('/books',function(){
  echo "books route path";
});

Router::post('/users',[UsersController::class,'show']);
$system->start();

