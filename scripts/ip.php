<?php
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
  $ip_address = $_SERVER["HTTP_CF_CONNECTING_IP"];
  echo "The visitor's IP address is: " . $ip_address;
} else {
  echo "The Cloudflare header containing the visitor's IP address is not set.";
}
?>
