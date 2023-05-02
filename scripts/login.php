<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php
$inputpassword=$_POST['password'];
$inputusername=$_POST['username'];
if(!file_exists('C:/xampp/htdocs/newsurg/data/login/'.$inputusername.".pass")) {
    echo "<html><head><script>window.location.replace('/newsurg/?e=eu')</script></head></html>";
    die();
}
if(password_verify($inputpassword,file_get_contents('C:/xampp/htdocs/newsurg/data/login/'.$inputusername.'.pass'))) {
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
file_put_contents('C:/xampp/htdocs/newsurg/data/tempaccess/'.$inputusername.'.pass',getRandomString($n));
    echo "<html><head><script>window.location.replace('/newsurg/home/?u=".$inputusername."&ta=".file_get_contents('C:/xampp/htdocs/newsurg/data/tempaccess/'.$inputusername.'.pass')."')</script></head></html>";
} else {
    echo "<html><head><script>window.location.replace('/newsurg/?e=ep')</script></head></html>";
    die();
}

?>