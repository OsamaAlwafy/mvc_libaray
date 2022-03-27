<?php
namespace coding\app\system;

class AppSystem{
    public $request;
    Public $router;
    public $response;
    public static $appSystem;
    function __construct()
    {

        $this->request=new Request();
        // $this->response=new Response();
        $this->router=new Router($this->request);
        self::$appSystem=$this;



    } 
    
    public function start(){
        $this->router->executeRoute();
        

    }
    
}

?>