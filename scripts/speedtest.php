<?php
// URL of the file to download for testing
if(isset($_GET['n'])) {
  $num=$_GET['n'];
}else{
  $num = 5;
}


for($i = 0; $i < $num; $i++) {
    // code to execute for each loop iteration

$url = 'https://files.testfile.org/ZIPC/60MB-Corrupt-Testfile.Org.zip';

// Set the number of bytes to download
$download_size = 60000000; // 1 MB

// Get the start time of the download
$start_time = microtime(true);

// Open a connection to the URL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RANGE, "0-$download_size");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// Download the specified number of bytes from the URL
$data = curl_exec($ch);

// Get the end time of the download
$end_time = microtime(true);

// Close the connection to the URL
curl_close($ch);

// Calculate the total download time in seconds
$total_time = $end_time - $start_time;

// Calculate the download speed in megabits per second (Mbps)
$download_speed = ($download_size / $total_time) * 8 / 1000000;

// Print the download speed
echo 'Download Speed  : ' . round($download_speed, 3) . ' Mbps<br>';
}
if(isset($_GET['n'])){}else{
echo"( You can do custom amount of tests if you add the 'n' parameter to the url ( https://surgeme.xyz/newsurg/scripts/speedtest.php?n=[ AMOUNT OF TESTS ] ) )";
}?>