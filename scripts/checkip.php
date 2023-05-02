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
if($_GET['ip']==file_get_contents('C:/xampp/htdocs/newsurg/data/user/ip/'.$_GET['u'].'.pass')){
    echo"pass";
} else{
    
    
echo "Fail,,!!,,".file_get_contents('C:/xampp/htdocs/newsurg/data/user/ip/'.$_GET['u'].'.pass');
}

?>