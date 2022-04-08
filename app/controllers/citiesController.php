<?php
namespace coding\app\controllers;

use coding\app\models\City;

class citiesController extends Controller{

    function listAll($parameters=null){

        // $parameters['status'];
        $cities=new City();
        $allcities=$cities->getAll();
        //print_r($allcities);

        $this->view('list_cities',$allcities);

    }

    function create(){
        $this->view('add_city');      
    }      

    
    function store(){         
        print_r($_POST);         
        // print_r($_FILES);         
        $cities=new City();                  
        $cities->name=$_POST['name'];                       
        $cities->created_by=1;         
        $cities->is_active=$_POST['is_active'];          
        $cities->save();
        if($cities->save())
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);
      
    }

        function edit($params=[]){          
            $cat=new City();         
            $result=$cat->getSingleRow($params['id']);         
            $this->view('edit_city',$result);         
            print_r($result) ;               
        }   

        function update(){          
            $cities=new City();          
            $cities->name=$_POST['name'];                        
            $cities->created_by=1;         
            $cities->is_active=1;          
            $cities->update();     
        }   

        public function remove($params=[]){         
            echo "remove function";         
            $cities=new City();         
            $cities->changeStatus($params['id']);      
        }
}
?>