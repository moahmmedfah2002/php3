<?php
include("../class/basic.php");
include("../class/style.php");
?>
<style>
<?php
include("verificationViewStyle.php");
?>
</style>
<?php
$body=new basic();
echo '<form action="verificationControleur.php" method="post">';
echo $body->element("h1","text","","verifier l'email");
echo $body->input("text","token","token","token");
echo $body->submit("sub","valider","vtoken","token");


echo'</form>';



?>