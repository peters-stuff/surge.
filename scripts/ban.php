<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
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
if(strtolower($_GET['u'])=='peter'||strtolower($_GET['u'])=='surge'||strtolower($_GET['u'])=='tharmsy') {
    unlink('C:/xampp/htdocs/newsurg/data/user/bio/'.$_GET['p'].'.bio');
    unlink('C:/xampp/htdocs/newsurg/data/user/pfp/data/'.$_GET['p'].'.pfp');
    file_put_contents('C:/xampp/htdocs/newsurg/data/bans/'.$_GET['p'].'.ban',$_GET['r']);
}
?>