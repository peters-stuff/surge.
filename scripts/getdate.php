<?php
$u=$_GET['u'];
if(file_exists('C:/xampp/htdocs/newsurg/data/user/date/'.$u.'.date')) {
echo file_get_contents('C:/xampp/htdocs/newsurg/data/user/date/'.$u.'.date');

} else {
    echo " -- Error Requesting Date  -- ";
}
    ?>