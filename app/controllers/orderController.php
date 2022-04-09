<?php

namespace coding\app\controllers;
use coding\app\models\Order;

class OrderController extends Controller{

    public function order (){
        $this->view('steps');

    }

        function listAll($parameters=null){

        // $parameters['status'];
        $orders=new Order();
        $allorders=$orders->getAll();
        //print_r($allCategories);

        $this->view('order',$allorders);

    }

}
?>