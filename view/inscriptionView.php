<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <title>Document</title>
</head>
<body>
<?php

include('../class/form.php');
include('../class/style.php');

?>

<style>
    
<?php
include('inscriptionViewStyle.php');

?>
</style>

<?php

echo'<form class="container-sm" action="" method="post">';
echo '<h1>INSCRIPTION</h1>';
$f=new form();
$s->margin();
$nom=$f->input('text','nom','',"input1");
$prenom=$f->input('text','prenom','',"input1");
$email=$f->input('text','email','',"input1");
$naissance=$f->input('text','naissance','',"input1");
$Bac2=$f->option('Bac+2','',"input1");
$Bac3=$f->option('Bac+3','',"input1");
$niveau=$f->input('text','niveau','',"input1");
$etbalissement=$f->input('text','etbalissement','',"input1");
$photo=$f->input('file','photo','',"input1");
$cv=$f->input('file','cv','',"input1");
$log=$f->input('text','log','',"input1");
$mdp=$f->input('text','mdp','',"input1");

echo $nom;
echo $prenom;
echo $email;
echo $naissance;
echo '<select  class="form-select input1" aria-label="Default select example">';
echo $Bac2;
echo $Bac3;
echo '</select>';
echo $niveau;
echo $etbalissement;
echo $photo;
echo $cv;
echo $log;
echo $mdp;




$sub=$f->submit('sub','INSCRIPTION','','log');
echo $sub;

echo '</form>';




?>

</body>
</html>