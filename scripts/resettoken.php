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
$n=200;
function getRandomString($n)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $randomString = '';

  for ($i = 0; $i < $n; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $randomString .= $characters[$index];
  }

  return $randomString;
}
file_put_contents('C:/xampp/htdocs/newsurg/data/tempaccess/'.$_GET['u'].'.pass',getRandomString($n));
echo"Your access token has been revoked! Please login to access your account. <a href='/' title='login' alt='login'>Login here.</a>";

?>