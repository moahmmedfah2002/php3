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
<script>
    function pdf() {
    


        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("pdf").innerHTML = "header('Location:pdf.php');";
    }
    }
    xmlhttp.open("GET","pdf.php",false);
    xmlhttp.send();
            

            }
        
    
</script>
<?php

session_start();

include('../class/basic.php');

include('../class/style.php');
include('../class/pdf.php');

$infos = $_SESSION['infos'];


for($i=0;$i< count($infos);$i++){

    $id = $infos[$i]['id'];


$f=new form();

$b=new basic();


$img1=$b->img('../src/2.png','','img1','20%','5%');
$img2=$b->img('../src/1.png','','img2','20%','10%');
$photo = $b->img('../src/img/Bac+2/'.$id.'.jpg','','im1','30%','20%');

$nom=$infos[$i]['nom'];
$prenom=$infos[$i]['prenom'];
$email=$infos[$i]['email'];
$naissance=$infos[$i]['naissance'];



$diplome=$infos[$i]['diplome'];
$etbalissement=$infos[$i]['etbalissement'];
$_SESSION["nom"]=$nom;
$_SESSION["prenom"]=$prenom;
$_SESSION["email"]=$email;
$_SESSION["naissance"]=$naissance;
$_SESSION["diplome"]=$diplome;
$_SESSION["et"]=$etbalissement;
$_SESSION["id"]=$id;

$tr1 = $b->element("td",$id="",$class="t","Nom");
$tr2 = $b->element("td",$id="",$class="r",$nom);
$td1= $b->element("tr",$id="",$class="",$tr1.$tr2);

$tr3 = $b->element("td",$id="",$class="t","Prenom");
$tr4 = $b->element("td",$id="",$class="r",$prenom);
$td2= $b->element("tr",$id="",$class="",$tr3.$tr4);

$tr5 = $b->element("td",$id="",$class="t","Email");
$tr6 = $b->element("td",$id="",$class="r",$email);
$td3= $b->element("tr",$id="",$class="",$tr5.$tr6);

$tr7 = $b->element("td",$id="",$class="t","Naissance");
$tr8 = $b->element("td",$id="",$class="r",$naissance);
$td4= $b->element("tr",$id="",$class="",$tr7.$tr8);

$tr9 = $b->element("td",$id="",$class="t","Diplome");
$tr10 = $b->element("td",$id="",$class="r",$diplome);
$td5= $b->element("tr",$id="",$class="",$tr9.$tr10);

$tr11 = $b->element("td",$id="",$class="t","Etablissement");
$tr12 = $b->element("td",$id="",$class="r",$etbalissement);
$td6= $b->element("tr",$id="",$class="",$tr11.$tr12);

$div = $b->element("table",$id="","container-sm",$td1.$td2.$td3.$td4.$td5.$td6);
echo $img1;
echo $img2;
echo $photo;

echo $div;


echo $Deconnexion = $b->submit($nam="Deconnexion",$value="Deconnexion",$id="",$class="btn btn-primary");



    
}




?>

<form action="pdf.php">
<button type="submit" class="btn btn-primary" style="width:100%">PDF</button>
</form>
<style>
<?php
include('compteViewStyle.php');
?>
</style>
</body>
</html>