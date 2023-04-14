<?php
if(file_exists('C:/xampp/htdocs/newsurg/data/bans/'.$_GET['u'].'.ban')){
    echo file_get_contents('C:/xampp/htdocs/newsurg/data/bans/'.$_GET['u'].'.ban');
} else {
    echo "no,,!!,,";
}
?>