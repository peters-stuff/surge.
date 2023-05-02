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
$u=$_GET['u'];
if(!file_exists('C:/xampp/htdocs/newsurg/data/login/'.$u.'.pass')) {
    $fname = 'C:/xampp/htdocs/newsurg/media/img/min/unknown.jpg';
    header('Content-Type: image/jpeg');
    if(true) {
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
    if($source==null) {
        try {
       // $source = @imagecreatefromwebp($fname);
        }catch (Exception $e) {
            // Handle the exception here
        }
    }
    if($source==null) {
        $source = @imagecreatefromgif($fname);
    }

    imagecopyresized($output, $source, 0, 0, 0, 0, $new_w, $new_h, $width, $height);
    imagejpeg($output,null,1);} else {header('Content-Type: image/jpeg');
       }
}
if($_GET['l']=='2') {
    if(file_exists('C:/xampp/htdocs/newsurg/data/user/pfp/data/'.$u.'.pfp')) {
        $fname = file_get_contents('C:/xampp/htdocs/newsurg/data/user/pfp/data/'.$u.'.pfp');
        header('Content-Type: image/jpeg');
        readfile($fname);
    }
}
if(file_exists('C:/xampp/htdocs/newsurg/data/user/pfp/data/'.$u.'.pfp')) {
    $fname = file_get_contents('C:/xampp/htdocs/newsurg/data/user/pfp/data/'.$u.'.pfp');
    if(str_ends_with($fname,'.gif')) {
        header('Content-Type: image/jpeg');
        readfile($fname);
        die();
    }
    header('Content-Type: image/jpeg');
    if(true) {
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
    if($source==null) {
        try {
       // $source = @imagecreatefromwebp($fname);
        }catch (Exception $e) {
            // Handle the exception here
        }
    }
    if($source==null) {
        $source = @imagecreatefromgif($fname);
    }
    if($source==null) {
        header('Content-Type: image/jpeg');
    readfile($fname);
    }
    imagecopyresized($output, $source, 0, 0, 0, 0, $new_w, $new_h, $width, $height);
    imagejpeg($output,null,70);} else {header('Content-Type: image/jpeg');
        readfile($fname);}
} else {
    if($_GET['l']=='1') {
    $fname = 'C:/xampp/htdocs/newsurg/media/img/min/default-user.webp';}else{
        $fname = 'C:/xampp/htdocs/newsurg/media/img/min/default-user-small.webp';
    }

    if($_GET['l']=='2') {
        $fname = 'C:/xampp/htdocs/newsurg/media/img/min/default-user.webp';}
    header('Content-Type: image/jpeg');
    readfile($fname);
}
?>