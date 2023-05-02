<?php
if(file_get_contents('C:/xampp/htdocs/newsurg/data/misc/surge.active')=='0'){
    //http_response_code\(500\);
    echo "Surge is not available!";
    die();
}
?><?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><?php
if(file_exists('C:/xampp/htdocs/newsurg/data/user/follows/'.$_GET['p'].'.pass')){
    $a=file_get_contents('C:/xampp/htdocs/newsurg/data/user/follows/'.$_GET['p'].'.pass');
    $b=explode(',,!!,,',$a);
    if(in_array($_GET['u'],$b)){
        echo"true";
    }
    else{
        echo"false";
    }
    echo",,!!,,";
    echo count($b)-1;
} else{
    echo"false,,!!,,0";
}

?>