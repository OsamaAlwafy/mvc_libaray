<?php
namespace coding\app\system;
class Request{


    public function getRoute(){
        return $_SERVER['REQUEST_URI'];//return after localhost:8000/users so in this Ex return users 
    }
    public function getRequestMethod(){
       return $_SERVER['REQUEST_METHOD'];//POST OR GET
    }
 

    
//     public function checkRequest(){

//         $url=$_SERVER['REQUEST_URI'];
//         $method=$_SERVER['REQUEST_METHOD'];
       

// //        Router::executeRoute($method,$url);

        
//         }


        
    

}
?>