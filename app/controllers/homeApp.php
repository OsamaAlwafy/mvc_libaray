<?php
namespace coding\app\controllers;
class homeApp extends Controller{

    public function show(){
        $this->views('home');

    }

public function showCategory(){
    $this->views('category');

}

public function showCheckout(){
    $this->views('checkout');

}

public function showDetails(){
    $this->views('details');

}


}
?>