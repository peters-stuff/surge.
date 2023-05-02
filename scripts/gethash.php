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

$a = explode(',,!!,,', file_get_contents('C:/xampp/htdocs/newsurg/data/misc/hash.hash'));
$counted_array = array_count_values($a);
$counted_array=array_reverse($counted_array);
arsort($counted_array);
$keys = array_keys($counted_array);

for ($i = 0; $i < 6; $i++) {
    if(isset($keys[$i])){
        if(!$keys[$i]==''){
    echo $keys[$i] . '-' . $counted_array[$keys[$i]] . ',,!!,,';
    }
}
}
?>
