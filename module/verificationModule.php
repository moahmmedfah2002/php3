<?php
include('../PDO1/migrate.php');
class verif {

    private $log;
    private $conn;
    
    public function __construct($log){
        $this->log=$log;
        $this->conn=new PDO1("concours");
        
    }
    public function token(){
        $token=$this->conn->getData("token","".$_SESSION['niveau']."",'log LIKE "'.$this->log.'"');
        return $token;
    }
    public function valide(){
        $this->conn->Update($_SESSION['niveau'],"verif","1",'email LIKE "'.$this->log.'"');
    }
}



?>