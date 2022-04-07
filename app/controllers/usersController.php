<?php
namespace coding\app\controllers;

use coding\app\models\User;

class UsersController extends Controller{

        function listAll($parameters=null){

        // $parameters['status'];
        $users=new User();
        $allusers=$users->join("Inner","users.role_id","roles.id")->getAll();
        // print_r($allusers);

        $this->view('users',$allusers);

    }



    function create(){
        $this->view('signup');

    } 
     function login_page(){
        $this->view('login');

    }

    //     function store(){         
    //     print_r($_POST);         
    //     // print_r($_FILES);         
    //     $users=new User();                  

    //     $users->name=$_POST['name'];
    //     $users->email=$_POST['email'];
    //     $users->password=md5($_POST['pass']);
    //     $users->is_active=isset($_POST['is_active'])?1:0;
    //     $users->role_id=1;
    //     $users->save();
    //     if($users->save())
        
    //     $this->view('feedback',['success'=>'data inserted successful']);
    //     else 
    //     $this->view('feedback',['danger'=>'can not add data']);      
    // }

        // function edit($params=[]){          
        //     $cat=new User();         
        //     $result=$cat->getSingleRow($params['id']);         
        //     $this->view('edit_user',$result);         
        //     print_r($result) ;               
        // }

        //    function update(){          
        //     $users=new User(); 

        //     $users->name=$_POST['name'];              
          
        //     $users->email=$_POST['email'];          
        //     $users->role_id=$_POST['role_id'];                   
        //     $users->is_active=1; 

        //     $users->update();     
        // }  

        // public function remove($params=[]){         
        //     echo "remove function";         
        //     $users=new User();         
        //     $users->changeStatus($params['id']);      
        // }
    // function newUser(){
    //     $this->view('new_user');
    // }


    // public function saveUser(){

    //     //print_r($_POST);
    //     $user=new User();
    //     $user->name=$_POST['name'];
    //     $user->email=$_POST['email'];
    //     $user->password=md5($_POST['password']);
    //     $user->is_active=isset($_POST['is_active'])?1:0;
    //     $user->role_id=1;
    //     $user->save();
    //     if($user->save())
        
    //     $this->view('feedback',['success'=>'data inserted successful']);
    //     else 
    //     $this->view('feedback',['danger'=>'can not add data']);

    // }

    public function register(){
        $this->view("new_user");
    }

    public function delete(){
        
    }




}
?>