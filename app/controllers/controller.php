<?php 
namespace coding\app\controllers;
use coding\app\system\AppSystem;
class Controller{


public function views($v ){
    AppSystem::$appSystem->router->view($v);
    

}    
}


?>