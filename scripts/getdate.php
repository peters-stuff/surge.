<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><?php
$u=$_GET['u'];
if(file_exists('C:/xampp/htdocs/newsurg/data/user/date/'.$u.'.date')) {
echo file_get_contents('C:/xampp/htdocs/newsurg/data/user/date/'.$u.'.date');

} else {
    echo " -- Error Requesting Date  -- ";
}
    ?>