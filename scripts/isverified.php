<?php
if(file_get_contents('C:/xampp/htdocs/newsurg/data/misc/surge.active')=='0'){
    //http_response_code\(500\);
    echo "Surge is not available!";
    die();
}
?><?php
if(file_exists('C:/xampp/htdocs/newsurg/data/bans/'.$_GET['u'].'.ban')) {
    echo"no".',,!!,,'.$_GET['pass'];
    die();
  }
$v='';
$u=strtolower($_GET['u']);
if($u=='peter' ||$u=='surge'||$u=='tharmsy'||$u=='dexter'||$u=='kai'){
    $v=1;
}
if($v==1) {
echo"yes".',,!!,,'.$_GET['pass'];
}else{
    echo"no".',,!!,,'.$_GET['pass'];
}
?>