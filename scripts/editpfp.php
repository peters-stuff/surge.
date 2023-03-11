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
$target_dir = "C:/xampp/htdocs/newsurg/data/user/pfp/img/";
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
$ismedia=0;
$istext=0;
if ($_FILES["media"]["size"] > 1) {
    $ismedia=1;
$target_file = $target_dir . getRandomString(150) . basename($_FILES["media"]["name"]);
if (file_exists($target_file)) {
  $target_file = $target_dir . getRandomString(150) . basename($_FILES["media"]["name"]);
}
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if ($_FILES["media"]["size"] > 500000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  if (file_exists($target_file)) {
    echo "Sorry, your file is already exists.";
    $uploadOk = 0;
  }
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif") {
  echo "Sorry, only JPG, JPEG, PNG, MP4, WEBP,WEBM & GIF files are allowed.";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    die();
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["media"]["tmp_name"], $target_file)) {
    } else {
      echo "Sorry, there was an error uploading your file.";
      die();
    }
  }

}
       file_put_contents('C:/xampp/htdocs/newsurg/data/user/pfp/data/'.$_GET['u'].'.pfp',$target_file);
       echo "<html><head><script>window.location.replace('/newsurg/home/?u=".$_GET['u']."&ta=".$_GET['ta']."')</script></head></html>";
       die();
?>