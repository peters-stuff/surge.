<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><?php
$v='';
$u=strtolower($_GET['u']);
if($u=='peter' ||$u=='surge'){
    $v=1;
}
if($v==1) {
echo"yes".',,!!,,'.$_GET['pass'];
}else{
    echo"no".',,!!,,'.$_GET['pass'];
}
?>