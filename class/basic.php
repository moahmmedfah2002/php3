<?php
include("form.php");
class basic extends form{

/**
 * element
 *
 * @param  string $element element choisit
 * @param  string $id on cas par de non entre est egale a ""
 * @param  string $class on cas par de non entre est egale a ""
 * @param  mixed $value la valeur qui existe a l'interieur du div
 * @return string
 */
public function element($element,$id="",$class="",$value){
    $div="<".$element." id=".$id." class=".$class." >".$value."</div>";
    return $div;

}
public function img($source){
    $img="<img src=".$source." id= ".$id." class=".$class."/>";
    return $img

}

}




?>