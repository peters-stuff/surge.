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
$a=@explode(',,!!,,',@file_get_contents('C:/xampp/htdocs/newsurg/data/posts/posts/'.$_GET['p'].'.post'));
if($a[0]==$_GET['u']) {
    echo $_GET['p'];
 @   unlink('C:/xampp/htdocs/newsurg/data/posts/posts/'.$_GET['p'].'.post');
    die();
}
if(@$a[1]==$_GET['u']) {
    echo $_GET['p'];
 @   unlink('C:/xampp/htdocs/newsurg/data/posts/posts/'.$_GET['p'].'.post');
    die();
}

?>