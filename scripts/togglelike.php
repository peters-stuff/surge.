<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><?php
if(file_exists('C:/xampp/htdocs/newsurg/data/bans/'.$_GET['u'].'.ban')) {
    die();
  }
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
if(!file_exists('C:/xampp/htdocs/newsurg/data/likes/'.$_GET['p'].'.likes')){
    $l='';
}else{
    $l=file_get_contents('C:/xampp/htdocs/newsurg/data/likes/'.$_GET['p'].'.likes');
}
if(strpos( $l, $_GET['u'] ) !== false) {
$l=str_replace(',,!!,,'.$_GET['u'].'','',$l);
} else {
$l=$l.',,!!,,'.$_GET['u'].'';
}
file_put_contents('C:/xampp/htdocs/newsurg/data/likes/'.$_GET['p'].'.likes',$l);
if(strpos( $l, $_GET['u'] ) !== false) {
echo (count(explode(',,!!,,',$l))-1) . ',,!!,,true'. ',,!!,,'.$_GET['p'];} else {
    echo (count(explode(',,!!,,',$l))-1) . ',,!!,,false,,!!,,'.$_GET['p'];   
}
?>
