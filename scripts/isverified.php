<?php
if(file_exists('C:/xampp/htdocs/newsurg/data/bans/'.$_GET['u'].'.ban')) {
    echo"no".',,!!,,'.$_GET['pass'];
    die();
  }
$v='';
$u=strtolower($_GET['u']);
if($u=='peter' ||$u=='surge'||$u=='tharmsy'||$u=='dexter'){
    $v=1;
}
if($v==1) {
echo"yes".',,!!,,'.$_GET['pass'];
}else{
    echo"no".',,!!,,'.$_GET['pass'];
}
?>