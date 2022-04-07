<?php
namespace coding\app\models;



class User extends Model{
   

    function __construct()
    {
        parent::$tblName="users";
        parent::$tbTwoName="roles";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}