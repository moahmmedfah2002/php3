<?php
session_start();
$nom=$_SESSION["nom"];
$prenom=$_SESSION["prenom"];
$email=$_SESSION["email"];
$naissance=$_SESSION["naissance"];
$diplome=$_SESSION["diplome"];
$et=$_SESSION["et"];
$id=$_SESSION["id"];
include('../class/pdf.php');
ob_start();
$pdf = new pdf();
$pdf->Header("../src/img/Bac+2/".$id.".jpg","../src/2.png","../src/1.png");

$pdf->setTab(6,array("Nom","Prenom","Email","Naissance","Diplome","Etablissement"),array($nom,$prenom,$email,$naissance,$diplome,$et),16);
$pdf->fin();
?>