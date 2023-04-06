<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><?php
date_default_timezone_set("Europe/London");

if(!@isset($_GET['u'])) {
    echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
    die();   
}
if(!@isset($_GET['ta'])) {
    echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
    die();   
}
if(@$_GET['u']=='') {
echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
    die();   
}
if(@$_GET['ta']=='') {
    echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
    die();   
}
@$a=@file_get_contents('C:/xampp/htdocs/newsurg/data/tempaccess/'.$_GET['u'].'.pass');
if($_GET['ta']==$a) {}else{
    echo "<html><head><script>window.location.replace('/newsurg/?e=el')</script></head></html>";
    die();
}

?><?php
if(file_exists('C:/xampp/htdocs/newsurg/data/bans/'.$_GET['u'].'.ban')) {
  die();
}
function extractHashtags($string) {
  $regex = '/#(\w+)/';
  preg_match_all($regex, $string, $matches);
  foreach ($matches[1] as $value) {
 file_put_contents('C:/xampp/htdocs/newsurg/data/misc/hash.hash',file_get_contents('C:/xampp/htdocs/newsurg/data/misc/hash.hash').$value.',,!!,,');
  }
  
}

$target_dir = "C:/xampp/htdocs/newsurg/data/posts/postmedia/";

// Function to generate random string
function getRandomString($n)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $randomString = '';

  for ($i = 0; $i < $n; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $randomString .= $characters[$index];
  }

  return $randomString;
}

$ismedia=0;
$istext=0;

if ($_FILES["media"]["size"] > 1) {
    $ismedia=1;
    $target_file = $target_dir . getRandomString(150) . basename($_FILES["media"]["name"]);
    if (file_exists($target_file)) {
        $target_file = $target_dir . getRandomString(150) . basename($_FILES["media"]["name"]);
    }
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if ($_FILES["media"]["size"] > 500000000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Sorry, your file already exists.";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "mp4" && $imageFileType != "webp" && $imageFileType != "webm" ) {
        echo "Sorry, only JPG, JPEG, PNG, MP4, WEBP,WEBM & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        die();
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["media"]["tmp_name"], $target_file)) {
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "webp") {}else{

// Check if $istext is 1 and $_POST['text'] does not contain "-nowatermark"
//if ($istext == 1 && strpos($_POST['text'], '-nowatermark') === false) {
  // Add watermark to uploaded image
  $image = imagecreatefromstring(file_get_contents($target_file));
  $watermark = imagecreatefrompng('C:/xampp/htdocs/newsurg/media/img/min/watermark.png');

  // Preserve alpha channel of watermark
  imagealphablending($watermark, false);
  imagesavealpha($watermark, true);

  $textcolor = imagecolorallocate($image, 255, 255, 255); // Set alpha value to 80 for 20% transparency
  $outlinecolor = imagecolorallocate($image, 0, 0, 0); // Set alpha value to 80 for 20% transparency
  $text = '@'.$_GET['u'];
  $textsize = 10;
  $font = 'C:/xampp/htdocs/newsurg/media/other/public-sans/PublicSans-VariableFont_wght.ttf';
  $angle = 0;
  $watermark_width = imagesx($watermark);
  $watermark_height = imagesy($watermark);
  $watermark_x = 0;
  $watermark_y = imagesy($image) - $watermark_height - 20;

  // Copy watermark onto image, preserving alpha channel
  imagecopymerge($image, $watermark, $watermark_x, $watermark_y, 0, 0, $watermark_width, $watermark_height, 100);

  $text_width = imagettfbbox($textsize, $angle, $font, $text);
  $text_x = ($watermark_width - $text_width[2]) / 2;
  $text_y = $watermark_y + $watermark_height + $textsize + 5;

  // If text width exceeds image width, adjust text position to the right
  if ($text_width[2] > $watermark_width) {
      $text_x = 0;
  }

  // draw text outline
  imagettftext($image, $textsize, $angle, $text_x-1, $text_y-1, $outlinecolor, $font, $text);
  imagettftext($image, $textsize, $angle, $text_x+1, $text_y+1, $outlinecolor, $font, $text);
  imagettftext($image, $textsize, $angle, $text_x-1, $text_y+1, $outlinecolor, $font, $text);
  imagettftext($image, $textsize, $angle, $text_x+1, $text_y-1, $outlinecolor, $font, $text);

  // draw text
  imagettftext($image, $textsize, $angle, $text_x, $text_y, $textcolor, $font, $text);

  // Set output to preserve alpha channel
  imagesavealpha($image, true);

  imagepng($image, $target_file);
  imagedestroy($image);
  imagedestroy($watermark);
} //else {
//
//}
          //}
        } else {
            echo "Sorry, there was an error uploading your file.";
            die();
        }
    }}
if(strlen($_POST['text'])>0) {
    $istext=1;
  }
  if(strlen($_POST['text'])>0) {
   $istext=1; 
  }
  if($istext==1) {
  if($_POST['text']==' ') {
    $istext=0; 
   }
  }
  if(!$ismedia==1) {
if(!$istext==1) {
    echo "incorrect stuff?";
}
  }
  if($istext==1) {
    $posttextedited=$_POST['text'];
    $posttexteditedbefore=$posttextedited;
    $posttextedited=str_replace('-nowatermark','',$posttextedited);
    $posttextedited=str_replace('<','&#60;',$posttextedited);
    $posttextedited=str_replace(',,!!,,','&#9888;',$posttextedited);
    $posttextedited=str_replace(':)','&#128522;',$posttextedited);
    $posttextedited=str_replace(':(','&#128546;',$posttextedited);
    $posttextedited=str_replace(':heart:','&#10084;',$posttextedited);
    $posttextedited=str_replace(':smile:','&#128522;',$posttextedited);
    $posttextedited=str_replace(':sad:','&#128546;',$posttextedited);
    $posttextedited=str_replace(':cry:','&#128546;',$posttextedited);
    $posttextedited=str_replace(':frown:','&#128577;',$posttextedited);
    $posttextedited=str_replace(':blueheart:','&#128153;',$posttextedited);
    $posttextedited=str_replace(':greenheart:','&#128154;',$posttextedited);
    $posttextedited=str_replace(':yellowheart:','&#128155;',$posttextedited);
    $posttextedited=str_replace(':blackheart:','&#128420;',$posttextedited);
    $posttextedited=str_replace(':brokenheart:','&#128148;',$posttextedited);
    $posttextedited=str_replace(':kiss:','&#128536;',$posttextedited);
    $posttextedited=str_replace(':flame:','&#128293;',$posttextedited);
    $posttextedited=str_replace(':fire:','&#128293;',$posttextedited);
    $posttextedited=str_replace(':star:','&#11088;',$posttextedited);
    $posttextedited=str_replace(':power:','&#9889;',$posttextedited);
    $posttextedited=str_replace(':warning:','&#9888;',$posttextedited);
    $posttextedited=str_replace(':flag:','&#9873;',$posttextedited);
    $posttextedited=str_replace(':dead:','&#9760;',$posttextedited);
    $posttextedited=str_replace(':oldphone:','&#9742;',$posttextedited);
    $posttextedited=str_replace(':phone:','&#128241;',$posttextedited);
    $posttextedited=str_replace(':pencil:','&#9999;',$posttextedited);
    $posttextedited=str_replace(':checkmark:','&#9989;',$posttextedited);
    $posttextedited=str_replace(':snow:','&#10052;',$posttextedited);
    $posttextedited=str_replace(':flower:','&#127800;',$posttextedited);
    $posttextedited=str_replace(':cross:','&#10060;',$posttextedited);
    $posttextedited=str_replace(':sun:','&#9728;',$posttextedited);
    $posttextedited=str_replace(':peach:','&#127825;',$posttextedited);
    $posttextedited=str_replace(':burger:','&#127828;',$posttextedited);
    $posttextedited=str_replace(':ball:','&#127934;',$posttextedited);
    $posttextedited=str_replace(':music:','&#9835;',$posttextedited);
    $posttextedited=str_replace(':noentry:','&#128683;',$posttextedited);
    $posttextedited=str_replace(':pray:','&#128591;',$posttextedited);
    $posttextedited=str_replace(':cool:','&#128526;',$posttextedited);
    $posttextedited=str_replace(':shock:','&#128561;',$posttextedited);
    $posttextedited=str_replace(':scream:','&#128561;',$posttextedited);
    $posttextedited=str_replace(':tasty:','&#128523;',$posttextedited);
    $posttextedited=str_replace(':sick:','&#129314;',$posttextedited);
    $posttextedited=str_replace(':vomit:','&#129326;',$posttextedited);
    $posttextedited=str_replace(':drop:','&#128166;',$posttextedited);
    $posttextedited=str_replace(':wink:','&#128521;',$posttextedited);
    $posttextedited=str_replace(':halo:','&#128519;',$posttextedited);
    $posttextedited=str_replace(':crazy:','&#129322;',$posttextedited);
    $posttextedited=str_replace(':money:','&#129297;',$posttextedited);
    $posttextedited=str_replace(':neutral:','&#128528;',$posttextedited);
    $posttextedited=str_replace(':smirk:','&#128527;',$posttextedited);
    $posttextedited=str_replace(':sleep:','&#128564;',$posttextedited);
    $posttextedited=str_replace(':cold:','&#129398;',$posttextedited);
    $posttextedited=str_replace(':hot:','&#129397;',$posttextedited);
    $posttextedited=str_replace(':cowboy:','&#129312;',$posttextedited);
    $posttextedited=str_replace(':nerd:','&#129299;',$posttextedited);
    $posttextedited=str_replace(':plead:','&#129402;',$posttextedited);
    $posttextedited=str_replace(':angry:','&#128545;',$posttextedited);
    $posttextedited=str_replace(':curse:','&#129324;',$posttextedited);
    $posttextedited=str_replace(':devil:','&#128520;',$posttextedited);
    $posttextedited=str_replace(':devilsad:','&#128127;',$posttextedited);
    $posttextedited=str_replace(':poop:','&#128169;',$posttextedited);
    $posttextedited=str_replace(':clown:','&#129313;',$posttextedited);
    $posttextedited=str_replace(':robot:','&#129302;',$posttextedited);
    $posttextedited=str_replace(':alien:','&#128125;',$posttextedited);
    $posttextedited=str_replace(':ghost:','&#128123;',$posttextedited);
    $posttextedited=str_replace(':monkey:','&#128585;',$posttextedited);
    $posttextedited=str_replace(':bomb:','&#128163;',$posttextedited);
    $posttextedited=str_replace(':wave:','&#128075;',$posttextedited);
    $posttextedited=str_replace(':okay:','&#128076;',$posttextedited);
    $posttextedited=str_replace(':middlefinger:','&#128405;',$posttextedited);
    $posttextedited=str_replace(':fist:','&#128074;',$posttextedited);
    $posttextedited=str_replace(':clap:','&#128079;',$posttextedited);
    $posttextedited=str_replace(':nailpaint:','&#128133;',$posttextedited);
    $posttextedited=str_replace(':slay:','&#128133;',$posttextedited);
    $posttextedited=str_replace(':butterfly:','&#129419;',$posttextedited);
    $posttextedited=str_replace(':plane:','&#9992;',$posttextedited);
    $posttextedited=str_replace(':clock:','&#128338;',$posttextedited);
    $posttextedited=str_replace(':rainbow:','&#127752;',$posttextedited);
    $posttextedited=str_replace(':rain:','&#127783;',$posttextedited);
    $posttextedited=str_replace(':graduation:','&#127891;',$posttextedited);
    $posttextedited=str_replace(':speaker:','&#128264;',$posttextedited);
    $posttextedited=str_replace(':headphones:','&#127911;',$posttextedited);
    $posttextedited=str_replace(':circle:','&#128309;',$posttextedited);
    $posttextedited=str_replace('"','&#65282;',$posttextedited);
    $posttextedited=str_replace("'",'&#65282;',$posttextedited);
    $posttextedited=str_replace(':laugh:','&#129315;',$posttextedited);
    $posttextedited=str_replace(':skull:','&#x1F480;',$posttextedited);
    $posttextedited=str_replace(':confetti:','&#127881;',$posttextedited);
    $posttextedited=str_replace(':hash:','#',$posttextedited);
extractHashtags($posttextedited);

 }

  if(!$ismedia==1) {
      if($istext==1){
        $old=file_get_contents('C:/xampp/htdocs/newsurg/data/misc/postnumber.number');
        $new=$old + 1;
          $fnametp = $new.'.post';
        file_put_contents('C:/xampp/htdocs/newsurg/data/misc/postnumber.number',$new);
        $fdatatp = $_GET['u'].',,!!,,'.$posttextedited.',,!!,,'.date("Y/m/d").',,!!,,'.date("H:i:s").',,!!,,nijt';
      file_put_contents('C:/xampp/htdocs/newsurg/data/posts/posts/'.$fnametp,$fdatatp);
      }
  }
  if($ismedia==1) {
    if(!$istext==1) {
      $old=file_get_contents('C:/xampp/htdocs/newsurg/data/misc/postnumber.number');
      $new=(int)$old + 1;
      file_put_contents('C:/xampp/htdocs/newsurg/data/misc/postnumber.number',$new);
        $fnametp = $new.'.post';
      $fdatatp = $_GET['u'].',,!!,,'.$target_file.',,!!,,'.date("Y/m/d").',,!!,,'.date("H:i:s").',,!!,,ntji';
    file_put_contents('C:/xampp/htdocs/newsurg/data/posts/posts/'.$fnametp,$fdatatp);
    }
        }
        if($ismedia==1) {
          if($istext==1) {
            $old=file_get_contents('C:/xampp/htdocs/newsurg/data/misc/postnumber.number');
            $new=(int)$old + 1;
            file_put_contents('C:/xampp/htdocs/newsurg/data/misc/postnumber.number',$new);
              $fnametp = $new.'.post';
            $fdatatp = 'BOTH,,!!,,'.$_GET['u'].',,!!,,'.$target_file.',,!!,,'.$posttextedited.',,!!,,'.date("Y/m/d").',,!!,,'.date("H:i:s").',,!!,,BOTH';
          file_put_contents('C:/xampp/htdocs/newsurg/data/posts/posts/'.$fnametp,$fdatatp);
          }
              }
              if($istext==1){
                if(!$ismedia==1) {
                  $url = "https://ptb.discord.com/api/webhooks/1084269727507021905/CPhMUJiSi2ZjgcrYemJK2w8zpBRXMupg6amxSnKXxL9tX6jnyhE68GQYmhDr6XMCDUvm";
$data = array("content" => $_GET['u']." - ".$posttexteditedbefore);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ),
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

                }
              }
              if($istext==1){
                if($ismedia==1) {
                  $url = "https://ptb.discord.com/api/webhooks/1084269727507021905/CPhMUJiSi2ZjgcrYemJK2w8zpBRXMupg6amxSnKXxL9tX6jnyhE68GQYmhDr6XMCDUvm";
$data = array("content" => $_GET['u']." - ".$posttexteditedbefore . ' - https://surgeme.xyz'.str_replace(' ','%20',str_replace('C:/xampp/htdocs','',$target_file)));

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ),
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

                }
              }
              if($ismedia==1){
                if(!$istext==1) {
                  $url = "https://ptb.discord.com/api/webhooks/1084269727507021905/CPhMUJiSi2ZjgcrYemJK2w8zpBRXMupg6amxSnKXxL9tX6jnyhE68GQYmhDr6XMCDUvm";
                  $data = array("content" => $_GET['u']." - " .'https://surgeme.xyz'.str_replace(' ','%20',str_replace('C:/xampp/htdocs','',$target_file)));

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ),
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

                }
              }
        
  echo "<html><head><script>window.location.replace('/newsurg/home/?u=".$_GET['u']."&ta=".$_GET['ta']."')</script></head></html>";
  die();
?>