<?php
class form{

   

    function input($type,$name,$id,$class,$b=" ",$val=" "){
        return '
                <div id="'.$id.'" class="'.$class.'">
                <label  for="input" class="form-label">'.$name.'</label>
                <input accept="'. $b .'"  type="'.$type.'" name="'.$name.'"   class="form-control" value="'.$val.'" >
                </div>';
    }
    function submit($name,$value,$id,$class,$on=''){
        return '    <div id="'.$id.'" class="col-12 '.$class.'">
                            <input action="'.$on.'"  id="'.$id.'" class="btn btn-primary " type="submit" name="'.$name.'" value="'.$value.'"/>
                    </div>
    ';


    }
    function option($value,$id,$class){
        return '
                    <option nom="op" value="'.$value.'">'.$value.'</option>
                
                
                    ';
    }


}

?>