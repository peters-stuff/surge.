<?php
if(file_get_contents('C:/xampp/htdocs/newsurg/data/misc/surge.active')=='0'){
    //http_response_code\(500\);
    echo "Surge is not available!";
    die();
}
?><?php
if (isset($_SERVER["HTTP_CF_IPCOUNTRY"])) {
  $country_code = $_SERVER["HTTP_CF_IPCOUNTRY"];
  echo "The visitor's country code is: " . $country_code;
} else {
  echo "The Cloudflare geolocation header is not set.";
}
?>
