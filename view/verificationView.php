<?php
include("../class/basic.php");
$body=new basic();
echo '<form action="verificationControleur.php" method="post">';
echo $body->element("h1","text","","verifier l'email");
echo $body->input("text","tocken","tocken","tocken");
echo $body->submit("sub","valider","vtocken","vtocken");

echo'</form>';



?>