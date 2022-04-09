<?php 
namespace coding\app\models;
use coding\app\system\AppSystem;
class Model{
    public static $tblName=[];
    // private $tblName;
    private $column = "*";
     private $where=NULL;
     private $join=NULL;

    function save():bool{
        
      
        $values=array();
        $columns=array();
        //get_object_
        foreach(get_object_vars($this) as $key=> $property){
            // echo $property;
            // print_r(get_object_vars($this));
            if($property!=self::$tblName && $key != 'join' && $key != "where" && $key != "column")
            {
                $values[]=is_string($property)?"'".$property."'":$property;
                $columns[]=$key;}

        }
        $values=implode(",",$values);
        $columns=implode(",",$columns);
       $sql_query="insert into ".self::$tblName[0]." (".$columns." ) values (".$values.")";
    //  $sql_query = "INSERT INTO ".self::$tblName[0]  ." (" .$this->columns. ") VALUES (" .$this->values. ")";
                
//    echo $sql_query;
//    echo $columns;
   
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        if($stmt->execute())
        return true;
        return false;
       // return true;
     //echo $sql_query;
    }

    public function getAll(){
        $sql_query="select ".$this->column." from ".self::$tblName[0];
        if ($this->join !== null) {
			$sql_query .= $this->join;
		}
        if ($this->where !== null) {

        $sql_query .=$this->where;}
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        // echo $sql_query;

        return $stmt->fetchAll();


    }

    public function value(...$arg){
        $this->value=array();
        foreach($arg as $value){

        $this->value[] = is_string($value)?"'".$value."'":$value;
    }
        $this->value = implode(',' , $this->value);
        // echo ($this->column);
        // print_r($arg);
        return $this;
    }


     public function column(...$arg){
        $this->column = implode(',' ,$arg);
        // echo ($this->column);
        // print_r($arg);
        return $this;
    }



    public function table( $table){
        $this->table = $table;
        return $this;
    }
    
        public function where($column_name  ,$op, $value){
        $value = is_string($value)?"'".$value."'":$value;
        echo $value;

        $this->where = " WHERE ". $column_name ." ".$op." ". $value ;
        return $this;
    }

    public function join($joinType=NULL, $FK , $PK){

        $this->join= " ". $joinType ." JOIN " .self::$tblName[1]. " ON " . $FK ." = ". $PK;
        return $this;
    }

    public function getSingleRow($id){
        $sql_query="select * from ".self::$tblName[0]." where id=".$id."";
       
       //echo $sql_query;
         $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchObject();
        

    }

    public function changeStatus($id){
        $sql_query ="UPDATE ".self::$tblName[0]."  SET is_active=0 WHERE id=".$id."";
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

 print_r(get_object_vars($this));
       $one="UPDATE ".self::$tblName[0]." SET ";
       $two=[];
       foreach(get_object_vars($this) as $key=> $property){
           if($key != 'join' && $key != "where" && $key != "column"){
           if(is_string($property)){
        $two [] =  " ". $key." = '".$property."'" ." "; 
        // echo $key;
       }else
        $two []=  " ". $key." = ".$property." "; 

    }
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
