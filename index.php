<?php
@$src=$_GET['src'];
if($src=="login"){
    header("Location:controlleur/loginControleur.php");
}else{
    header("Location:controlleur/inscriptionControleur.php");
}


?>