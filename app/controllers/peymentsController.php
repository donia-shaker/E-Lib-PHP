<?php

namespace coding\app\controllers;

use coding\app\models\Peyment;

class peymentsController extends Controller{

    function view_page($parameters=null){
        $peyments=new Peyment();
        $allpeyments=$peyments->getAll();
        $this->view('main',$allpeyments);

    }

        function view_details_page($parameters=null){
        $peyments=new Peyment();
        $allpeyments=$peyments->getAll();

        $this->view('details',$allpeyments);

    }

    function listAll($parameters=null){

        // $parameters['status'];
        $peyments=new Peyment();
        $allpeyments=$peyments->getAll();
        //print_r($allpeyments);

        $this->view('peyments',$allpeyments);

    }
    function create(){
        $this->view('add_peyment');

    }

    function store(){
        print_r($_POST);
        // print_r($_FILES);
        $peyments=new Peyment();
        
        $peyments->name=$_POST['name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $peyments->image=$imageName!=null?$imageName:"default.png";
        $peyments->created_by=1;
        $peyments->is_active=$_POST['is_active'];

        $peyments->save();
        if($peyments->save())
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']); 


    }
    function edit($params=[]){

        $cat=new Peyment();
        $result=$cat->getSingleRow($params['id']);
        $this->view('edit_peyment',$result);
        print_r($result) ;
        

    }
    function update(){

         $peyments=new Peyment();

         $peyments->name=$_POST['name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $peyments->image=$imageName!=null?$imageName:"default.png";

        $peyments->created_by=1;
        $peyments->is_active=1;

        $peyments->update();
    }

    public function remove($params=[]){
        echo "remove function";
        $peyments=new Peyment();
        $peyments->changeStatus($params['id']);

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