<?php 
namespace coding\app\models;
use coding\app\system\AppSystem;
class Model{
    public static  $tblName;
   

   
   
    function save():bool{
        
      
        $values=array();
        $columns=array();
        //get_object_
        foreach(get_object_vars($this) as $key=> $property){
            //echo $property;
            if($property!=self::$tblName)
            {
                $values[]=is_string($property)?"'".$property."'":$property;
                $columns[]=$key;}

        }
        $values=implode(",",$values);
        $columns=implode(",",$columns);
       $sql_query="insert into ".self::$tblName." (".$columns." ) values (".$values.")";
   //echo $sql_query;
   
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        if($stmt->execute())
        return true;
        return false;
       // return true;
     //echo $sql_query;
    }

    public function getAll(){
        $sql_query="select * from ".self::$tblName."";
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function getSingleRow($id){
        $sql_query="select * from ".self::$tblName." where id=".$id."";
       
       //echo $sql_query;
         $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchObject();
        

    }

    public function changeStatus($id){
        $sql_query ="UPDATE ".self::$tblName."  SET is_active=0 WHERE id=".$id."";
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        // $stmt->execute();
        // return $stmt->fetchObject();
               if($stmt->execute())
        return true;
        return false;
    }

    function update():bool{
        echo $_POST["id"];
        print_r($_POST);
        $two=array();

 
       $one="UPDATE ".self::$tblName." SET ";
       $two=[];
       foreach(get_object_vars($this) as $key=> $property){
           if(is_string($property)){
        $two [] =  " ". $key." = '".$property."'" ." "; 
        // echo $key;
       }else
        $two []=  " ". $key." = ".$property." "; 

    }
$two=implode("," , $two);
    // print_r($id) ;
        $three = " WHERE id=".$_POST['id']."";
        $sql_query=$one.$two.$three;

        
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        // $stmt->execute();
        // return $stmt->fetchObject();

         if($stmt->execute())
        return true;
        return false;

     echo $sql_query;
    }
}
?>        
