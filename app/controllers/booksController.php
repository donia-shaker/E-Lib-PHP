<?php

namespace coding\app\controllers;

use coding\app\models\Book;
use coding\app\models\Category;

class BooksController extends Controller{

    function view_page($parameters=null){
        $books=new Book();
        // $allbooks=array();
        $category=new Category();
        $allbooks=$books->getAll();
        $allCategoires=$category->getAll();
        $data=["books"=>$allbooks,"categories"=>$allCategoires];

        // print_r($allcat);
        $this->view('main',$data);

    }

        function view_details_page($parameters=null){
        $books=new Book();
        $allbooks=$books->getAll();

        $this->view('details',$allbooks);

    }

    function listAll($parameters=null){

        // $parameters['status'];
        $books=new Book();
        $allbooks=$books->getAll();
        //print_r($allbooks);

        $this->view('list_books',$allbooks);

    }
    function create(){
        $this->view('add_books');

    }

    function store(){
        print_r($_POST);
        // print_r($_FILES);
        $books=new Book();
        
        $books->title=$_POST['title'];
        $imageName=$this->uploadFile($_FILES['image']);

        $books->image=$imageName!=null?$imageName:"default.png";
        $books->description=$_POST['description'];
        $books->price=$_POST['price'];
        $books->pages_number=$_POST['pages_number'];
        $books->format=$_POST['format'];

        $books->created_by=1;
        $books->is_active=$_POST['is_active'];

        $books->save();
        if($books->save())
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']); 


    }
    function edit($params=[]){

        $cat=new Book();
        $result=$cat->getSingleRow($params['id']);
        $this->view('edit_books',$result);
        print_r($result) ;
        

    }
    function update(){

         $books=new Book();

         $books->title=$_POST['title'];
        $imageName=$this->uploadFile($_FILES['image']);

        $books->image=$imageName!=null?$imageName:"default.png";
        $books->description=$_POST['description'];
        $books->price=$_POST['price'];
        $books->pages_number=$_POST['pages_number'];
        $books->format=$_POST['format'];

        $books->created_by=1;
        $books->is_active=1;

        $books->update();
        if($books->update())
        $this->view('feedback',['success'=>'data update successful']);
        else 
        $this->view('feedback',['danger'=>'can not update data']);
    }

    public function remove($params=[]){
        echo "remove function";
        $books=new Book();
        $books->changeStatus($params['id']);
        if($books->changeStatus($params['id']))
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