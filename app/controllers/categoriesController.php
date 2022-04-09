<?php

namespace coding\app\controllers;

use coding\app\models\Category;

class CategoriesController extends Controller{

        function view_page($parameters=null){

        $categories=new Category();
        $allCategories=$categories->getAll();
        //print_r($allCategories);

        $this->view('category',$allCategories);

    }

    function listAll($parameters=null){

        // $parameters['status'];
        $categories=new Category();
        $allCategories=$categories->getAll();
        //print_r($allCategories);

        $this->view('list_categories',$allCategories);

    }
    function create(){
        $this->view('add_category');

    }

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $category=new Category();
        
        $category->name=$_POST['category_name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $category->image=$imageName!=null?$imageName:"default.png";
        $category->created_by=1;
        $category->is_active=$_POST['is_active'];

        $category->save();
        if($category->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']); 

    }
    function edit($params=[]){

        $cat=new Category();
        $result=$cat->getSingleRow($params['id']);
        $this->view('edit_category',$result);
    
        
     print_r($result) ;
        

    }
    function update($params=[]){
        $category=new Category();

        $category->name=$_POST['category_name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $category->image=$imageName!=null?$imageName:"default.png";
        $category->created_by=1;
        $category->is_active=1;

        $category->update();
        if($category->update())
        $this->view('feedback',['success'=>'data update successful']);
        else 
        $this->view('feedback',['danger'=>'can not update data']);
    }


    public function remove($params=[]){
        echo "remove function";
        $cat=new Category();
        $cat->changeStatus($params['id']);
        if($cat->changeStatus($params['id']))
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