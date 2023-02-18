<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><?php
$u=$_GET['u'];
if(file_exists('C:/xampp/htdocs/newsurg/data/pfp/data/'.$u.'.pfp')) {
    $fname = 'C:/xampp/htdocs/newsurg/media/img/min/default-user.webp';
    header('Content-Type: image/jpeg');
    list($width, $height) = getimagesize($fname);
    if(@$_GET['l']=='1') {
        $new_w = 250;
        $new_h = 250;
    } else {
        $new_w = 70;
        $new_h = 70;
    }
    $output = imagecreatetruecolor($new_w, $new_h);
    $source = @imagecreatefromjpeg($fname);
    if($source==null) {
        $source = @imagecreatefrompng($fname);
    }
    imagecopyresized($output, $source, 0, 0, 0, 0, $new_w, $new_h, $width, $height);
    imagejpeg($output,null,20);
} else {
    if($_GET['l']=='1') {
    $fname = 'C:/xampp/htdocs/newsurg/media/img/min/default-user.webp';}else{
        $fname = 'C:/xampp/htdocs/newsurg/media/img/min/default-user-small.webp';
    }
header('Content-Type: image/jpeg');
readfile($fname);
}
?>