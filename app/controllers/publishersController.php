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