<?php
include("config_pdo.php");
class PDO1 extends PDO{

    
    function __construct($dbname=dbn,$port=portNum,$user=username,$pass=password,$host="127.0.0.1"){
        $this->dbname=$dbname;
        $this->user=$user;
        $this->pass=$pass;
        $this->host=$host;
        $this->port=$port;
        
        try{
            $this->conn = new PDO("mysql:host=$this->host:$this->port.;dbname=$this->dbname", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();

        }
    }


    function close(){
        try{
            $this->conn = null; 
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
        
    }
    function creatDB($name){

        try{
            
            $this->conn = new PDO("mysql:host=$this->host:$this->port.;dbname=$this->dbname", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE IF NOT EXISTS $name";
            $this->conn->exec($sql);
            $this->close();
            $this->conn = new PDO("mysql:host=$this->host:$this->port.;dbname=$name", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }catch(PDOException $e){
            echo "<br>" . $e->getMessage();

        }

    }


    function CreatTable($nameTable,$infoTable){
        try{

            $sql ="CREATE TABLE IF NOT EXISTS  $nameTable ($infoTable)";
            
            $this->conn->exec($sql);
            
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();

        }

    }



    function Insert($nameTable,$nameColon,$data,$pass=""){
        if($pass!=""){
            try{
                $pass=sha1($pass);
                $sql = "INSERT INTO $nameTable ($nameColon,pass) VALUES ($data,'$pass')";
                $this->conn->exec($sql);
                echo "New record created successfully";
            }catch(PDOException $e){
                echo $sql.  "<br>"  .$e->getMessage();
            }

        }
        else if($pass==""){

            try{
                $sql = "INSERT INTO $nameTable ($nameColon) VALUES ($data)";
                $this->conn->exec($sql);
                echo "New record created successfully";
            }catch(PDOException $e){
                echo $sql.  "<br>"  .$e->getMessage();
            }

        }

    }




    function delet($nameTable,$condition){
        try{
            $sql="DELETE FROM $nameTable WHERE $condition";
            $this->conn->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }




    function getData($colon,$table,$condition="1=1"){
        try{
            $sql="SELECT $colon FROM $table WHERE $condition";
            $info=$this->conn->prepare($sql);
            $info->execute();
            $result = $info->setFetchMode(PDO::FETCH_ASSOC);
            $out=$info->fetchAll();
            
            return $out;

        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();

        }

    }


    function Update($table,$colon,$value,$condition="1=1"){
        try{
            $sql = "UPDATE $table SET $colon=$value WHERE $condition";
            $info=$this->conn->prepare($sql);
            $info->execute();


        }
        catch(PDOException $e){
            echo $sql . '<br>' . $e->getMessage();

        }
    }

}
?>