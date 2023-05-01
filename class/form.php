<?php
class form{

    function __construct(){

    }

    function input($type,$name,$id,$class){
        return '
                <div id="'.$id.'" class="'.$class.'">
                <label  for="input" class="form-label">'.$name.'</label>
                <input  type="'.$type.'" name="'.$name.'"   class="form-control" >
                </div>';
    }
    function submit($name,$value,$id,$class){
        return '    <div id="'.$id.'" class="col-12 '.$class.'">
                            <button onclick="getServerTime()"  id="'.$id.'" class="btn btn-primary " name="'.$name.'">'.$value.'</button>
                    </div>
    ';


    }
    function option($value,$id,$class){
        return '
                    <option value="'.$value.'">'.$value.'</option>
                
                
                    ';
    }


}

?>