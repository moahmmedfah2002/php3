<?php
include('../PDO1/migrate.php');
class verif {

    private $email;
    private $conn;
    
    public function __construct($email){
        $this->email=$email;
        $this->conn=new PDO1("concours");
        
    }
    public function token(){
        $token=$this->conn->getData("token","".$_SESSION['niveau']."",'email LIKE "'.$this->email.'"');
        return $token;
    }
    public function valide(){
        $this->conn->Update($_SESSION['niveau'],"verif","1",'email LIKE "'.$this->email.'"');
    }
}



?>