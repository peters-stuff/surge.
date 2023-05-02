<?php
if(file_get_contents('C:/xampp/htdocs/newsurg/data/misc/surge.active')=='0'){
    http_response_code(500);
    echo "Surge is not available!";
    die();
}
?><?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><?php
$v='';
$u=strtolower($_GET['u']);
if($u=='peter' ||$u=='tharmsy' ||$u=='surge'){
    $v=1;
}
if($v==1) {
echo"yes";
}
?>