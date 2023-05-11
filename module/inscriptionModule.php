<?php
include('../PDO1/migrate.php');
class inscriptionmodule{    
           
     
       private $nom;
       private $prenom;
       private $email;
       private $naissance;
       private $dip;
       private $niveau;
       private $etab;
       private $photo;
       private $cv;
       private $log;
       private $mdp;
       public $conn;
       private $token;
        /**
     * __construct
     *
     * @param  string $nom
     * @param  string $prenom
     * @param  string $email
     * @param  string $naissance
     * @param  string $dip
     * @param  string $niveau
     * @param  string $etab
     * @param  string $photo
     * @param  string $cv
     * @param  string $log
     * @param  string $mdp
     * @param  int    $token
     * @return void
     * 
     */

    function __construct($nom,$prenom,$email,$naissance,$diplome,$etablissement,$photo,$cv,$log,$mdp,$token){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->naissance=$naissance;
        $this->dip=$diplome;
        $this->etab=$etablissement;
        $this->photo=$photo;
        $this->cv=$cv;
        $this->log=$log;
        $this->mdp=$mdp;
        $this->conn=new PDO1("concours");
        $this->token=$token;
    }
    function insert($table){
        $this->conn->Insert($table,'nom,prenom,email,naissance,diplome,etbalissement,photo,cv,log,mdp,verif,token','"'.$this->nom.'","'.$this->prenom.'","'.$this->email.'","'.$this->naissance.'","'.$this->dip.'","'.$this->etab.'","'.$this->photo.'","'.$this->cv.'","'.$this->log.'","'.$this->mdp.'","0","'.$this->token.'"');
    }
}


?>