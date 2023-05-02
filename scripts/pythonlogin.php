<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><?php
$u=$_GET['u'];
$p=$_GET['p'];

    if(@file_get_contents('C:/xampp/htdocs/newsurg/data/python/login/'.$u.'.pass')==$p){
        echo "pass";
    } else {
        echo "fail";
    }

?>