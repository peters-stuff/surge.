<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
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