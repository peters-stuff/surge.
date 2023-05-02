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
?>
<?php
$inputpassword=$_POST['password'];
$inputusername=$_POST['username'];
if (strpos($inputusername, ',,!!,,') !== false) {
  echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
  die();
}
if(strlen($inputusername)>20) {    echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
  die();}
  if(3>strlen($inputusername)) {    echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
    die();}
if(file_exists('C:/xampp/htdocs/newsurg/data/login/'.$inputusername.".pass")) {
    echo "<html><head><script>window.location.replace('/newsurg/?e=ae')</script></head></html>";
    die();
}
$hashed=password_hash($inputpassword,PASSWORD_DEFAULT);
$n = 200;
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

file_put_contents('C:/xampp/htdocs/newsurg/data/user/date/'.$inputusername.'.date',date('d/m/Y'));
file_put_contents('C:/xampp/htdocs/newsurg/data/login/'.$inputusername.'.pass',$hashed);
file_put_contents('C:/xampp/htdocs/newsurg/data/tempaccess/'.$inputusername.'.pass',getRandomString($n));
echo "<html><head><script>window.location.replace('/newsurg/home/?u=".$inputusername."&ta=".file_get_contents('C:/xampp/htdocs/newsurg/data/tempaccess/'.$inputusername.'.pass')."')</script></head></html>";
?>