<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $start_time = microtime(true);
  $file = file_get_contents("http://ipv4.download.thinkbroadband.com/50MB.zip"); // replace with a large file from a reliable source
  $end_time = microtime(true);
  $download_time = $end_time - $start_time;
  $download_speed = (filesize($file) / 1024 / 1024) / $download_time; // calculate download speed in Mbps
  echo "Download speed: " . round($download_speed, 2) . " Mbps (Usualy limited to 40Mbps)";
}
?>

<form method="post">
  <button type="submit">Test Internet Speed</button>
</form>
