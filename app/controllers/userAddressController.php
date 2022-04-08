<?php
namespace coding\app\controllers;

use coding\app\models\userAddress;

class userAddressController extends Controller{
    function listAll($parameters=null){

        // $parameters['status'];
        $usersAdress=new userAddress();
        $allAdress=$usersAdress->getAll();
        //print_r($allauthors);

        $this->view('users_address',$allAdress);

    }

    

}
?>