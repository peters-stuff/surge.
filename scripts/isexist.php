<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><?php
if(file_exists('C:/xampp/htdocs/newsurg/data/login/'.$_GET['u'].'.pass')){
    echo"true";
}else{
    echo'false'.',,!!,,'.$_GET['p'];;
}

?>