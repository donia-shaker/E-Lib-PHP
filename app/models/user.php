<?php
namespace coding\app\models;



class User extends Model{
   

    function __construct()
    {
        parent::$tblName=["users","roles"];
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}