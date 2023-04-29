<?php
class style{
    function __construct(){

    }
    function margin($type,$name,$dir,$val){
        if($type=='id'){
            return '#'.$name.'{
                margin-'.$dir.':'.$val.'%;
            }';

        }elseif($type=='class'){
            return '.'.$name.'{
                margin-'.$dir.':'.$val.'%;
            }';
        }else{
            return $name.'{
                margin-'.$dir.':'.$val.'%;
            }';;
        }
    }
}


?>