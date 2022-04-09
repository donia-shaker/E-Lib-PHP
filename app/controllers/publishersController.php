<?php
namespace coding\app\controllers;

use coding\app\models\Publisher;

class publishersController extends Controller{

    // public function createPublisher(){
    //     $Publisher=new Publisher();
    //     $Publisher->name="ali";
    //     $Publisher->phone="77878788";
    //     $Publisher->bio="fafdasdfasdfas";
    //     $Publisher->email="auth@gmail.com";
    //     $Publisher->created_by=1;
    //     $Publisher->is_active=1;
    //     $Publisher->save();
    // }

    function view_page($parameters=null){
        $publishers=new Publisher();
        // $allpublishers=array();
        $allpublishers=$publishers->getAll();
 

        // print_r($allcat);
        $this->view('list_publishers',$allpublishers);

    }


    function listAll($parameters=null){

        // $parameters['status'];
        $publishers=new Publisher();
        $allpublishers=$publishers->getAll();
        //print_r($allpublishers);

        $this->view('list_publishers',$allpublishers);

    }

    function create(){
        $this->view('add_publisher');      
    }      

    
    function store(){         
        print_r($_POST);         
        // print_r($_FILES);         
        $publishers=new Publisher();                  

            $publishers->name=$_POST['name'];              
            $imageName=$this->uploadFile($_FILES['image']);

            $publishers->image=$imageName!=null?$imageName:"default.png";         
            $publishers->phone=$_POST['phone'];         
            $publishers->alt_phone=$_POST['alt_phone'];          
            $publishers->email=$_POST['email'];          
            $publishers->fax=$_POST['fax'];          
            $publishers->address=$_POST['address'];          
            $publishers->country=$_POST['country'];          
            $publishers->created_by=1;         
            $publishers->is_active=1; 

        $publishers->save();
        if($publishers->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);      
    }

        function edit($params=[]){          
            $cat=new Publisher();         
            $result=$cat->getSingleRow($params['id']);         
            $this->view('edit_publisher',$result);         
            // print_r($result) ;               
        }   

        function update(){          
            $publishers=new Publisher(); 

            $publishers->name=$_POST['name'];              
            $imageName=$this->uploadFile($_FILES['image']);

            $publishers->image=$imageName!=null?$imageName:"default.png";

            $publishers->phone=$_POST['phone'];         
            $publishers->alt_phone=$_POST['alt_phone'];          
            $publishers->email=$_POST['email'];          
            $publishers->fax=$_POST['fax'];          
            $publishers->address=$_POST['address'];          
            $publishers->country=$_POST['country'];          
            $publishers->created_by=1;         
            $publishers->is_active=1; 

            $publishers->update();
            if($publishers->update())
        $this->view('feedback',['success'=>'data update successful']);
        else 
        $this->view('feedback',['danger'=>'can not update data']);     
        }   

        public function remove($params=[]){         
            echo "remove function";         
            $publishers=new Publisher();         
            $publishers->changeStatus($params['id']);
            if($publishers->changeStatus($params['id']))
        $this->view('feedback',['success'=>'data removed successful']);
        else 
        $this->view('feedback',['danger'=>'can not remove data']);      
        }


            public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }
}
?>