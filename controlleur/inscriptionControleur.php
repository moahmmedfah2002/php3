<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <title>inscription</title>
</head>
<body>  
<?php

session_start();
include("../class/email.php");
include('../module/inscriptionModule.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
    $naissance=$_POST["naissance"];
    $op=$_POST["op"];

    $etablissement=$_POST["etablissement"];
    $diplome=$_POST["diplome"];
    $photo=$_FILES["photo"];
    $cv=$_FILES["cv"];
    $log=$_POST["log"];
    $mdp=$_POST["mdp"];
    $token=rand(0,1000000);
    $_SESSION['token']= $token;
    $insc=new inscriptionmodule($nom,$prenom,$email,$naissance,$diplome,$etablissement,$log,$mdp,$token);
    $e=new email();
    $e->sende($email,$nom,"EMAIL VERIFICATION","votre token est ".$token);

    if($op=="Bac+2"){

        
        $id=$insc->conn->getData("MAX(id)","etud3a","email=".'"'.$email.'"')[0]["MAX(id)"];
        
        $id++;
        $insc->insert("etud3a",$id.'.jpg',$id.'pdf.');
        

        $_SESSION['niveau']="etud3a";
        
        
        $_SESSION['log']=$log;

        move_uploaded_file($photo["tmp_name"],'../src/img/Bac+2/'.$id.'.jpg');

        move_uploaded_file($cv["tmp_name"],'../src/cv/Bac+2/'.$id.'.pdf');
   
        header('Location:verificationControleur.php');
        
    }elseif($op=="Bac+3"){


        $_SESSION['niveau']="etud4a";
        

        $id=$insc->conn->getData("MAX(id)","etud3a","email=".'"'.$email.'"')[0]["MAX(id)"];
        $id++;
        $insc->insert("etud4a",$id.'.jpg',$id.'pdf.');
        
        

        move_uploaded_file($photo["tmp_name"], '../src/img/Bac+3/'.$id.'.jpg');

        move_uploaded_file($cv["tmp_name"], '../src/cv/Bac+3/'.$id.'.pdf');
        
        header('Location:verificationControleur.php');
        
    }
    
    

    }
    include('../view/inscriptionView.php');
?>

</body>
</html>
<?php ob_end_flush(); ?>