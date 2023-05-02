<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><!DOCTYPE html>
<html lang="en">
    <head>
<title>Surge | Discover - Welcome To Surge! Here you can view stats about Surge</title>
<meta name="surge:pid" content="983aUIDnajd903294279csyh8">
<link rel="manifest" href="/newsurg/manifest.json">
<link rel="canonical" href="https://surgeme.xyz/newsurg/discover/" />
<meta name="yandex-verification" content="5a7d135739a0acfb" />

<meta name="theme-color" content="#80BFFF">
<meta name="description" content="Surge: the social media platform for friend-filled fun, chatting, and creativity. Join now to connect, collaborate and enjoy!">
<meta name="keywords" content="Surge, Social, Media, Social Media, SocialMedia, Chat, Freinds, Message, Messages">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="subject" content="Social Media">
<meta name="copyright"content="Surge Media">
<meta name="language" content="EN">
<meta name="robots" content="index,follow" />
<meta name="topic" content="Social Media">
<meta http-equiv="Content-Security-Policy" content="default-src google.co.uk 'unsafe-eval' 'self' 'unsafe-inline' *.google-analytics.com doubleclick.net https://www.googletagmanager.com https://static.cloudflareinsights.com *.google.com">
<meta name="summary" content="Surge. The New Social Media.">
<meta name="Classification" content="Business">
<meta name="author" content="Surge, surge@surgeme.tk">
<meta name="designer" content="Peter">
<meta name="reply-to" content="surge@surgeme.tk">
<meta name="owner" content="Surge">
<meta name="url" content="https://surgeme.tk/newsurg">
<meta name="abstract" content="a fun and new social media.">
<meta name="identifier-URL" content="https://surgeme.tk/newsurg">
<meta name="category" content="Social">
<meta name="coverage" content="Worldwide">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="revisit-after" content="7 days">
<meta name="og:title" content="Surge | Discover - Welcome To Surge! Here you can view stats about Surge"/>
<meta name="og:type" content="Social"/>
<meta name="og:url" content="https://surgeme.tk/newsurg"/>
<meta name="og:image" content="https://surgeme.tk/newsurg/media/img/min/logo-only.webp"/>
<meta name="og:site_name" content="Surge"/>
<meta name="og:description" content="Surge: the social media platform for friend-filled fun, chatting, and creativity. Join now to connect, collaborate and enjoy!"/>
<meta name="fb:page_id" content="100088784273503" />
<meta name="og:email" content="surge@surgeme.tk"/>
<meta name="og:country-name" content="UK"/>
<meta property="og:type" content="social media"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="blue">
<meta http-equiv="Page-Enter" content="RevealTrans(Duration=2.0,Transition=2)" />
<meta http-equiv="Page-Exit" content="RevealTrans(Duration=3.0,Transition=12)" />
<meta name="mssmarttagspreventparsing" content="true">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="msapplication-starturl" content="https://surgeme.tk/newsurg"/>
<meta name="msapplication-window" content="width=800;height=600"/>
<meta name="msapplication-navbutton-color" content="white"/>
<meta name="application-name" content="Surge. The New Social Media."/>
<meta name="msapplication-tooltip" content="Surge. The New Social Media."/>
<link rel="shortcut icon" href="/favicon.ico" />
<meta name="tweetmeme-title" content="Surge. The New Social Media." />
<meta name= "viewport" content = "width = device-width">
<meta name = "viewport" content = "initial-scale = 1.0">
<link rel="apple-touch-startup-image" href="/newsurg/media/img/min/logo-only.png">
<link rel="apple-touch-icon" type="image/png" href="/newsurg/media/img/min/logo-only.png" />
<link rel="fluid-icon" type="image/png" href="/newsurg/media/img/min/logo-only.png" />
<link rel='shortlink' href='https://surgeme.tk/newsurg' />
<meta charset="UTF-8" />
<meta name="googlebot" content="index, follow">
<meta name="referrer" content="no-referrer">
    </head>
    <body>
    <h1 style='opacity:0; visibility:hidden;color:transparent;'>Welcome To Surge. Here are some stats. Here you can discover what has been going on in Surge.</h1>
    <h2 style='opacity:0; visibility:hidden;color:transparent;'>Here you can see stats like the total amount of posts on Surge and more.</h2>
    <h3 style='opacity:0; visibility:hidden;color:transparent;'>These stats are all calculated in realtime.</h3>
<div id='header' class='shadow'><img alt='surge logo without text' title='surge logo without text' onclick='window.location.href="/newsurg/"' src='/newsurg/media/img/min/logo-only.webp' id='logo-in-header' width='82px' height='72.72727273px'>
<div id='header-elements'><a title='discover' class='header-element link' hreflang='en' referrerpolicy="no-referrer" href='/newsurg/discover'>discover</a><a title='safety' class='header-element link' hreflang='en' referrerpolicy="no-referrer" href='/newsurg/safety'>safety</a><a class='header-element link' title='support' hreflang='en' referrerpolicy="no-referrer" href='/newsurg/support'>support</a></div>

</div>
<div id='contain' class='no-scroll-back'>
<div id='posts' onclick='window.location.replace("/newsurg/discover/?a=0")'  class='ripple'>
    <span class='titlefor'>Amount of posts</span>
    <span class='titlef'><?php
$directory = 'C:/xampp/htdocs/newsurg/data/posts/posts/';
$files = scandir($directory);
$num_files = count($files) - 2;

$target = 5;

while ($num_files > $target) {
  $target = $target * 2; // Set new target
}

echo "$num_files/$target";
?>
</span>
<div class="progress-bar">
  <div class="progress"></div>
</div>

</div>

<div id='users' onclick='window.location.replace("/newsurg/discover/?a=0")' class='ripple'>
    <span class='titlefor'>Amount of users</span>
    <span class='titlef'><?php
$directory = 'C:/xampp/htdocs/newsurg/data/login/';
$files = scandir($directory);
$num_files = count($files) - 2;

$target = 5;

while ($num_files > $target) {
  $target = $target * 2; // Set new target
}

echo "$num_files/$target";
?>
</span>
<div class="progress-bar">
  <div class="progress"></div>
</div>

</div>


<div id='hashs' onclick='window.location.replace("/newsurg/discover/?a=0")'  class='ripple'>
    <span class='titlefor'>Amount of hashtags</span>
    <span class='titlef'><?php
$file = file_get_contents('C:/xampp/htdocs/newsurg/data/misc/hash.hash'); // replace file.txt with the name of your file
$data = explode(",,!!,,", $file);
$num_items = count($data);

$target = 5;

while ($num_items > $target) {
  $target = $target * 2; // Set new target
}

echo "$num_items/$target";
?>

</span>
<div class="progress-bar">
  <div class="progress"></div>
</div>

</div>



<div id='likes' onclick='window.location.replace("/newsurg/discover/?a=0")'  class='ripple'>
    <span class='titlefor'>Amount of likes</span>
    <span class='titlef'><?php
$directory = 'C:/xampp/htdocs/newsurg/data/likes/';
$files = scandir($directory);
$num_likes = 0;

foreach ($files as $file) {
  if ($file !== '.' && $file !== '..') {
    $content = file_get_contents($directory . $file);
    $likes = explode(',,!!,,', $content);
    $num_likes += count($likes) - 1; // subtract 1 because the last item is empty
  }
}

$target = 5;

while ($num_likes > $target) {
  $target = $target * 2; // Set new target
}

echo "$num_likes/$target";
?>


</span>
<div class="progress-bar">
  <div class="progress"></div>
</div>

</div>

<div id='bans' onclick='window.location.replace("/newsurg/discover/?a=0")'  class='ripple'>
    <span class='titlefor'>Amount of bans</span>
    <span class='titlef'><?php
$directory = 'C:/xampp/htdocs/newsurg/data/bans/';
$files = scandir($directory);
$num_files = count($files) - 2;

$target = 5;

while ($num_files > $target) {
  $target = $target * 2; // Set new target
}

echo "$num_files/$target";
?>


</span>
<div class="progress-bar">
  <div class="progress"></div>
</div>

</div>



</div>
  </body>

<style>
    #logo-in-header {
        cursor: pointer;
    }
    .titlef{
        font-size:15px;
        font-weight:100;
        position:absolute;
        top:30px;
        right:calc(2.5% + 10px);
    }
    .titlefor {
        font-size:25px;
        font-weight:300;
        position: absolute;
        top:5px;
        padding-left:16px;
        left:5px;
    }
    #posts {
  background-color: #eee;
  border-radius: 20px;
  position: relative;
  top: 50px;
  width: calc(100% - 100px);
  left: 50px;
  height:100px;
  margin-bottom:10px;
  cursor: pointer;
}
#bans {
  background-color: #eee;
  border-radius: 20px;
  position: relative;
  top: 50px;
  width: calc(100% - 100px);
  left: 50px;
  height:100px;
  margin-bottom:10px;
  cursor: pointer;
}
#likes {
  background-color: #eee;
  border-radius: 20px;
  position: relative;
  top: 50px;
  width: calc(100% - 100px);
  left: 50px;
  height:100px;
  margin-bottom:10px;
  cursor: pointer;
}

#users {
  background-color: #eee;
  border-radius: 20px;
  position: relative;
  top: 50px;
  width: calc(100% - 100px);
  left: 50px;
  height:100px;
  margin-bottom:10px;
  cursor: pointer;
}
#hashs {
  background-color: #eee;
  border-radius: 20px;
  position: relative;
  top: 50px;
  width: calc(100% - 100px);
  left: 50px;
  height:100px;
  margin-bottom:10px;
  cursor: pointer;
}
    .progress-bar {
  width: 95%;
  left:2.5%;
  position:absolute;
  margin-top:50px;
  background-color: #aaa;
  border-radius: 5px;
  margin-bottom: 20px;
}

.progress {
  height: 20px;
  border-radius: 5px;
  background-color: #3366ff;
  width: 0%;
  transition: width 0.5s ease-in-out;
}

#contain {
    background-color:#ddd;
    position:absolute;
    top:120px;
    width:95%;
    height:calc(100% - 120px - 50px);
    overflow-y:scroll;
    left:2.5%;
    border-radius:20px;
}

</style>
    <script async>
        const params = new Proxy(new URLSearchParams(window.location.search), {
  get: (searchParams, prop) => searchParams.get(prop),
});
        if(params.a=='0') {
            ani=50
        } else {
            ani=500
        }
const progressBar = Array.from(document.querySelectorAll('.progress-bar'));
const progress = Array.from(document.querySelectorAll('.progress'));

function setProgress(currentValue, targetValue, duration, index) {
  const percent = Math.min((currentValue / targetValue) * 100, 100);
  const increment = percent / (duration / 10);

  let progressWidth = 0;
  const intervalId = setInterval(() => {
    progressWidth += increment;
    progress[index].style.width = `${progressWidth}%`;

    if (progressWidth >= percent) {
      clearInterval(intervalId);
    }
  }, 10);
}

setProgress(<?php $directory = 'C:/xampp/htdocs/newsurg/data/posts/posts/';$files = scandir($directory);$num_files = count($files) - 2; echo "$num_files"; ?>,'<?php
$directory = 'C:/xampp/htdocs/newsurg/data/posts/posts/';
$files = scandir($directory);
$num_files = count($files) - 2;

$target = 5;

while ($num_files > $target) {
  $target = $target * 2; // Set new target
}

echo "$target";
?>',ani,0);
setTimeout(() => {
    setProgress(<?php $directory = 'C:/xampp/htdocs/newsurg/data/login/';$files = scandir($directory);$num_files = count($files) - 2; echo "$num_files"; ?>,'<?php
$directory = 'C:/xampp/htdocs/newsurg/data/login/';
$files = scandir($directory);
$num_files = count($files) - 2;

$target = 5;

while ($num_files > $target) {
  $target = $target * 2; // Set new target
}

echo "$target";
?>',ani,1);
}, 250);
setTimeout(() => {
    setProgress(<?php
$file = file_get_contents('C:/xampp/htdocs/newsurg/data/misc/hash.hash'); // replace file.txt with the name of your file
$data = explode(",,!!,,", $file);
$num_items = count($data);

$target = 5;

while ($num_items > $target) {
  $target = $target * 2; // Set new target
}

echo "$num_items";
?>,'<?php
$file = file_get_contents('C:/xampp/htdocs/newsurg/data/misc/hash.hash'); // replace file.txt with the name of your file
$data = explode(",,!!,,", $file);
$num_items = count($data);

$target = 5;

while ($num_items > $target) {
  $target = $target * 2; // Set new target
}

echo "$target";
?>',ani,2);
}, 500);




setTimeout(() => {
    setProgress(<?php

$directory = 'C:/xampp/htdocs/newsurg/data/likes/';
$files = scandir($directory);
$num_likes = 0;

foreach ($files as $file) {
  if ($file !== '.' && $file !== '..') {
    $content = file_get_contents($directory . $file);
    $likes = explode(',,!!,,', $content);
    $num_likes += count($likes) - 1; // subtract 1 because the last item is empty
  }
}

$target = 5;

while ($num_likes > $target) {
  $target = $target * 2; // Set new target
}

echo "$num_likes";
?>,'<?php
$directory = 'C:/xampp/htdocs/newsurg/data/likes/';
$files = scandir($directory);
$num_likes = 0;

foreach ($files as $file) {
  if ($file !== '.' && $file !== '..') {
    $content = file_get_contents($directory . $file);
    $likes = explode(',,!!,,', $content);
    $num_likes += count($likes) - 1; // subtract 1 because the last item is empty
  }
}

$target = 5;

while ($num_likes > $target) {
  $target = $target * 2; // Set new target
}

echo "$target";
?>',ani,3);
}, 750);






setTimeout(() => {
    setProgress(<?php


$directory = 'C:/xampp/htdocs/newsurg/data/bans/';
$files = scandir($directory);
$num_files = count($files) - 2;

$target = 5;

while ($num_files > $target) {
  $target = $target * 2; // Set new target
}

echo "$num_files";
?>,'<?php
$directory = 'C:/xampp/htdocs/newsurg/data/bans/';
$files = scandir($directory);
$num_files = count($files) - 2;

$target = 5;

while ($num_files > $target) {
  $target = $target * 2; // Set new target
}

echo "$target";
?>',ani,4);
}, 1000);

        </script>
         

    <script type="application/ld+json" async>
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Surge",
  "url": "https://surgeme.tk/newsurg",
  "description": "Surge: the social media platform for friend-filled fun, chatting, and creativity. Join now to connect, collaborate and enjoy!",
  "accessMode": "",
  "accessibilityAPI": "",
  "author": {
    "@type": "Organization",
    "logo": "https://surgeme.tk/newsurg/media/img/min/logo-only.webp",
    "name": "Surge Media"
  }
}
</script>
<link rel="preload" href="/newsurg/media/other/public-sans/PublicSans-VariableFont_wght.ttf" as="font" type="font/woff2" crossorigin async> 
<link rel="stylesheet" type="text/css" href="/newsurg/media/code/css.css" async/>

<!-- Google tag (gtag.js) -->
<script defer src="https://www.googletagmanager.com/gtag/js?id=G-SGDNVNBNJS"></script>
<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SGDNVNBNJS');
</script>
<link rel="stylesheet" type="text/css" href="/newsurg/media/code/logincss.css" async/>
</html>