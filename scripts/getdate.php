<?php
if(file_get_contents('C:/xampp/htdocs/newsurg/data/misc/surge.active')=='0'){
    //http_response_code\(500\);
    echo "Surge is not available!";
    die();
}
?><?php
$u=$_GET['u'];
if(file_exists('C:/xampp/htdocs/newsurg/data/user/date/'.$u.'.date')) {
echo file_get_contents('C:/xampp/htdocs/newsurg/data/user/date/'.$u.'.date');

} else {
    echo " -- Error Requesting Date  -- ";
}
    ?>