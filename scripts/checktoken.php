<?php

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