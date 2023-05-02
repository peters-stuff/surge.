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
if(file_exists('C:/xampp/htdocs/newsurg/data/user/bio/'.$u.'.bio')) {
echo file_get_contents('C:/xampp/htdocs/newsurg/data/user/bio/'.$u.'.bio');

} else {
    echo "";
}
    ?>