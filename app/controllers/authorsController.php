<?php
namespace coding\app\controllers;

use coding\app\models\Author;

class AuthorsController extends Controller{

    function view_page($parameters=null){
        $authors=new Author();
        // $allauthors=array();
        $allauthors=$authors->getAll();
 

        // print_r($allcat);
        $this->view('main',$allauthors);

    }



    function listAll($parameters=null){

        // $parameters['status'];
        $authors=new Author();
        $allauthors=$authors->getAll();
        //print_r($allauthors);

        $this->view('list_authors',$allauthors);

    }

    function create(){
        $this->view('add_author');      
    }      

    
    function store(){         
        print_r($_POST);         
        // print_r($_FILES);         
        $authors=new Author();                  
        $authors->name=$_POST['name'];              
        $authors->email=$_POST['email'];         
        $authors->phone=$_POST['phone'];         
        $authors->bio=$_POST['bio'];          
        $authors->created_by=1;         
        $authors->is_active=$_POST['is_active'];          
        $authors->save();
        if($authors->save())
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);
      
    }

        function edit($params=[]){          
            $cat=new Author();         
            $result=$cat->getSingleRow($params['id']);         
            $this->view('edit_author',$result);         
            print_r($result) ;               
        }   

        function update(){          
            $authors=new Author();          
            $authors->name=$_POST['name'];              
            $authors->email=$_POST['email'];         
            $authors->phone=$_POST['phone'];         
            $authors->bio=$_POST['bio'];          
            $authors->created_by=1;         
            $authors->is_active=isset($_POST['is_active'])?1:0;          
            $authors->update();     
        }   

        public function remove($params=[]){         
            echo "remove function";         
            $authors=new Author();         
            $authors->changeStatus($params['id']);      
        }
}
?>