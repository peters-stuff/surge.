<?php
if(file_get_contents('C:/xampp/htdocs/newsurg/data/misc/surge.active')=='0'){
    //http_response_code(500);
    echo "Surge,,!!,,Surge is unavailable!,,!!,,,,!!,,,,!!,,,,!!,,";
    die();
}
?><?php

if(!@isset($_GET['u'])) {
    echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
    die();   
}
if(!@isset($_GET['ta'])) {
    echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
    die();   
}
if(@$_GET['u']=='') {
echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
    die();   
}
if(@$_GET['ta']=='') {
    echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
    die();   
}
@$a=@file_get_contents('C:/xampp/htdocs/newsurg/data/tempaccess/'.$_GET['u'].'.pass');
if($_GET['ta']==$a) {}else{
    echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
    die();
}

?><?php
if(isset($_GET['p'])){
    $p=file_get_contents('C:/xampp/htdocs/newsurg/data/posts/posts/'.$_GET['p']);

    if(!file_exists('C:/xampp/htdocs/newsurg/data/likes/'.$_GET['p'].'.likes')){
        $l='';
    }else{
        $l=file_get_contents('C:/xampp/htdocs/newsurg/data/likes/'.$_GET['p'].'.likes');
    }

    echo $p.',,!!,,'.$l.',,!!,,'.$_GET['p'].',,!!,,';
    if(strpos( $l, $_GET['u'] ) !== false) {
        echo (count(explode(',,!!,,',$l))) . ',,!!,,true'. ',,!!,,'.$_GET['p'];} else {
            echo (count(explode(',,!!,,',$l))) . ',,!!,,false,,!!,,'.$_GET['p'];   
        }
        echo',,!!,,'.$_GET['pp'];
}

?>