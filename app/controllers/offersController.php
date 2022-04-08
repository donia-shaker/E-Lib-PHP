<?php 

namespace coding\app\controllers;

use coding\app\models\Book;
use coding\app\models\Category;
use coding\app\models\Offer;

class OffersController extends Controller{
       function listAll($parameters=null){

        // $parameters['status'];
        $offers=new Offer();
        $alloffers=$offers->getAll();
        // print_r($allusers);

        $this->view('Offers',$alloffers);

    }
 
 
    // public function create(){
    //     $books=new Book();
    //     $categories=new Category();
    //     $viewConent=array();
    //     $allCategoires=$categories->getAll();
    //     $allbooks=$books->getAll();
    //     $viewConent=array('books'=>$allbooks,'categories'=>$allCategoires);
    //             // $viewConent=[$allbooks,$allCategoires];

    //     $this->view('add_offer',$viewConent);
    // }

    // public function store(){
    //     $offers=new offer();

    //     print_r($_POST);


    //         print_r($_POST);
    //         // $stmt = '';
    //         //  $offers->column("categories.id", "books.*")
    //         //         ->join("", "categories.id", "books.category_id")
    //         //         ->where('id',"=", $_POST['category_ids'][0])
    //         //         ->getAll();
    //         //  print_r($rows);
    //         // foreach($rows as $row){
    //             // echo $row['bookid'];
    //            $offers->title = $_POST['title'];
    //            $offers->discount = $_POST['discount'];
    //            $offers->all_books = $_POST['all_books']?1:0;
    //            $offers->start_date = $_POST['start_date'];
    //            $offers->end_date = $_POST['end_date'];
    //         //    $offers->category_ids = $_POST['category_ids'];
    //         //    $offers->books_ids = $_POST['books_ids'];
    //            $offers->is_active = 1;
    //            $offers->save();
    //     if($offers->save())
    //     $this->view('feedback',['success'=>'data inserted successful']);
    //     else 
    //     $this->view('feedback',['danger'=>'can not add data']); 

    //     // if(isset($_POST['category_ids'] != Null)){
    //     //     $books=implode(",",$_POST['selected_boos']);

    //     // }
    //     print_r($_POST);
    //     }

    //     function edit($params=[]){          
    //         $offers=new Offer();         
    //         $result=$offers->getSingleRow($params['id']);         
    //         $this->view('edit_offer',$result);         
    //         print_r($result) ;               
    //     } 
        
    //     function update(){  
    //     $offers=new offer();
                    
    //          $offers->title = $_POST['title'];
    //            $offers->discount = $_POST['discount'];
    //            $offers->all_books = $_POST['all_books']?1:0;
    //            $offers->start_date = $_POST['start_date'];
    //            $offers->end_date = $_POST['end_date'];
    //         //    $offers->category_ids = $_POST['category_ids'];
    //         //    $offers->books_ids = $_POST['books_ids'];
    //            $offers->is_active = 1;

    //         $offers->update();     
    //     } 

    //     public function remove($params=[]){         
    //         echo "remove function";         
    //         $offers=new Offer();         
    //         $offers->changeStatus($params['id']);      
    //     }
    }
    
// }
?>