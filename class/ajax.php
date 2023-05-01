<?php 

class ajax{
    
   function __construct(){
    echo $this->connect();

   }
    
    /**
     * connect
     *
     * @return string
     */
    function connect(){
        $a='
        <script type="text/javascript">
        var ajax=null;
        try{
            ajax=new XMLHttpRequest();

        }catch(err){
           try{ ajax=new ActiveXObject("Msxml2.XMLHTTP");
           }catch(err1){
            alert("votre navigateur ne suport pas ajax");
           }
    ';
    return $a;

    }
    
    
    /**
     * getServerTime
     *
     * @param  string $page
     * @return string
     */
    function  getServerTime($page){
        return '
        
        <script type="text/javascript">
        function getServerTime() {
            var thePage = "'.$page.'.php";
            myRand = parseInt(Math.random()*999999999999999);
            var theURL = thePage +"?rand="+myRand;
            myReq.open("GET", theURL, true);
            myReq.onreadystatechange = theHTTPResponse;
            myReq.send(null);
            }
            

        </script>';
    }
}