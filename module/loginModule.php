<?php
include('../PDO1/migrate.php');

class loginModule{
    
    public $conn;
     /**
  * __construct
  * @return void
    */
    function __construct(){

        $this->conn=new PDO1("concours");

    }
    function infos($table,$id="3==3"){
        $data = $this->conn->getData("id",$table,$id);
        return $data;
    }
}

?>