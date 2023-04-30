<?php
class form{

    function __construct(){

    }

    function input($type,$name,$id,$class){
        return '
                <div id="'.$id.'" class="'.$class.'">
                <label  for="input" class="form-label">'.$name.'</label>
                <input  type="'.$type.'" name="'.$name.'"  id="inputPassword5" class="form-control " aria-labelledby="passwordHelpBlock">
                </div>';
    }
    function submit($name,$value,$id,$class){
        return '    <div id="'.$id.'" class="col-12 '.$class.'">
                            <button id="'.$id.'" class="btn btn-primary " type="submit" name="'.$name.'">'.$value.'</button>
                    </div>
    ';


    }
    function option($value,$id,$class){
        return '<div id="'.$id.'" class="'.$class.'">
                    <option value="'.$value.'">'.$value.'</option>
                </div>
                
                    ';
    }


}

?>