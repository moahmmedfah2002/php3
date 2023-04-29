<?php
class form{

    function __construct(){

    }

    function input($type,$name,$id){
        return '<label id="'.$id.'" for="input" class="form-label">'.$name.'</label>
                <input type="'.$type.'" name='.$name.'  id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock">';
    }
    function submit($name,$value){
        return '    <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="'.$name.'">'.$value.'</button>
                    </div>
    ';


    }


}

?>