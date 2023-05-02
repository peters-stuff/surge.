<?php
if(file_get_contents('C:/xampp/htdocs/newsurg/data/misc/surge.active')=='0'){
    http_response_code(500);
    echo "Surge is not available!";
    die();
}
?><?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><?php
if(file_exists('C:/xampp/htdocs/newsurg/data/bans/'.$_GET['u'].'.ban')) {
    die();
  }
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
$bio=$_GET['bio'];
$bio=str_replace('<','&#60;',$bio);
$bio=str_replace(',,!!,,','&#9888;',$bio);
$posttextedited=$bio;
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
$bio=$posttextedited;
file_put_contents('C:/xampp/htdocs/newsurg/data/user/bio/'.$_GET['u'].'.bio',$bio);

?>