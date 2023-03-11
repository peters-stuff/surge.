<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><?php

if(!@isset($_GET['u'])) {
    echo "FAIL";
    die();   
}
if(!@isset($_GET['ta'])) {
    echo "FAIL";
    die();   
}
if(@$_GET['u']=='') {
echo "FAIL";
    die();   
}
if(@$_GET['ta']=='') {
    echo "FAIL";
    die();   
}
@$a=@file_get_contents('C:/xampp/htdocs/newsurg/data/tempaccess/'.$_GET['u'].'.pass');
if($_GET['ta']==$a) {}else{
    echo "FAIL";
    die();
}
if(!file_exists('C:/xampp/htdocs/newsurg/data/tempaccess/'.$_GET['u'].'.pass')) {echo "FAIL";die();}
echo "pass"
?>