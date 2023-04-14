<?php
header("Expires: Wed, 11 Jan 1984 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Your code goes here
?>

<?php
$fileList = array();
$files = glob('C:/xampp/htdocs/newsurg/data/posts/posts/*');
foreach ($files as $file) {
    $fileList[filemtime($file)] = $file;
}
ksort($fileList);
$fileList = array_reverse($fileList, TRUE);
echo(str_replace('C:/xampp/htdocs/newsurg/data/posts/posts/','',implode('!!',$fileList)));
?>