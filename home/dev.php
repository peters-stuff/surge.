<?php

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
$n = 200;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
    <meta http-equiv="Content-Security-Policy" content="default-src *.google.com 'self' *.google-analytics.com https://www.googletagmanager.com 'unsafe-inline' 'unsafe-eval'; img-src 'self' https://www.google.co.uk https://www.googletagmanager.com googletagmanager.com data:;media-src data: 'self'; script-src *.google.com *.google-analytics.com https://www.googletagmanager.com 'self' 'unsafe-inline' https: 'unsafe-eval'; frame-src https:">
<title>Surge | Home - Welcome To Surge! Have Fun</title>
<meta name="surge:pid" content="983aUIDnajd903294279csyh8">
<meta name="theme-color" content="#80BFFF">
<link rel="canonical" href="https://surgeme.xyz/newsurg/home" />
<meta name="description" content="Surge is a social media where you can have fun with your friends, chat and create.">
<meta name="keywords" content="Surge, Social, Media, Social Media, SocialMedia, Chat, Freinds, Message, Messages">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="subject" content="Social Media">
<meta name="copyright"content="Surge Media">
<meta name="language" content="EN">
<meta name="robots" content="noindex,nofollow" />
<meta name="topic" content="Social Media">
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
<meta name="og:title" content="Surge | Home - Welcome To Surge! Have Fun"/>
<meta name="og:type" content="Social"/>
<meta name="og:url" content="https://surgeme.tk/newsurg"/>
<meta name="og:image" content="https://surgeme.tk/newsurg/media/img/min/logo-only.webp"/>
<meta name="og:site_name" content="Surge"/>
<meta name="og:description" content="Surge is a social media where you can have fun with your friends, chat and create."/>
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
<meta name="googlebot" content="noindex, nofollow">
<meta name="referrer" content="no-referrer">
    </head>
    
    <style>
/*
* [title]:before {
  content: attr(title);
  background-color: black;
  color: white;
  font-size: 14px;
  padding: 4px;
  position: absolute;
  z-index: 9999;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: none;
  opacity: 0;
  transition: visibility 0s linear 0.3s, opacity 0.3s linear;
}

* [title]:hover:before {
  visibility: visible;
  opacity: 0.5;
  transition-delay: 0s;
  display: block;
}
*/

        #manage-menu {
            background: rgb(153,153,153);
    background: -moz-radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
    background: -webkit-radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
    background: radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#999999",endColorstr="#c7c7c7",GradientType=1);
position:absolute;
width:592px;
border-radius:12px;
border-width:1px;
z-index:999999999;
overflow:hidden;
border-color:black;
box-shadow: 0px 0px 15px 0px rgba(55,55,55,1);
-webkit-box-shadow: 0px 0px 15px 0px rgba(55,55,55,1);
-moz-box-shadow: 0px 0px 15px 0px rgba(55,55,55,1);
border-style:solid;
height:90%;
top:5%;
left:calc(50% - (592px / 2));
        }
        #ccm_b1 {
            font-size:18px;
            position: absolute;
            top:95px;
            border-radius:12px;
            background-color:#ccc;
            width:280px;
            height:50px;
            overflow:hidden;
            left:10px;
        }
        #ccm_b1:hover{
            background-color:#ddd;
        }
        #ccm_b2 {
            font-size:18px;
            position: absolute;
            top:155px;
            border-radius:12px;
            background-color:#ccc;
            width:280px;
            height:50px;
            overflow:hidden;
            left:10px;
        }
        #ccm_b2:hover{
            background-color:#ddd;
        }
        #ccm_b3 {
            font-size:18px;
            position: absolute;
            top:255px;
            border-radius:12px;
            background-color:#ccc;
            width:280px;
            height:50px;
            overflow:hidden;
            left:10px;
        }
        #ccm_b3:hover{
            background-color:#977;
            color:white;
        }
        #ccm_b3:active{
            background-color:#911;
            color:white;
        }
        #ccm_sub {
            font-size:18px;
            position: absolute;
            top:65px;
            left:10px;
        }
        #ccm hr {
            position: absolute;
            border-width:0px;
            left:0px;
            right:0px;
            top:50px;
            width:100%;
            background-color:#111;
            height:2px;
        }
        #ccm_title {
            font-weight:600;
            font-size:20px;
            position: absolute;
            top:20px;
            left:10px;
        }
        #ccm {
            background-color :#ababab;
            position: absolute;
            z-index: 345545;
            box-shadow:1px 1px 10px;
            border-radius:12px;
            top:-12px;
            left:calc(50% - (300px / 2));
            width:300px;
            height:600px;
        }
                        .post-date {
                    position: absolute;
                bottom:5px;
                right:8.5px;
                font-size: 13px;
                color:#555;
            text-align: right;
        width:50%;}
                .dm-name-lastmsg-dots {
font-size: 15px;
color:#777;
padding-left: 10px;

                    background: rgba(212, 207, 207,0.7);
background: -moz-linear-gradient(90deg, rgb(0 0 0 / 12%) 0%, rgba(212, 207, 207,1) 20%);
background: -webkit-linear-gradient(90deg, rgb(0 0 0 / 12%) 0%, rgba(212, 207, 207,1) 20%);
background: linear-gradient(90deg, rgb(0 0 0 / 12%) 0%, rgba(212, 207, 207) 20%);
position: absolute;
height:17px;
bottom:10px;
width:36px;
right:0px;
background-color: rgba(212,207,207,0.7);
                }
                .post-like-count {
                    position: absolute;
                top:63px;
                right:8.5px;
                font-size: 14px;
            text-align: center;
        width:65px;}
                .post-like {
                    position: absolute;
                top:5px;
                right:10px;
                overflow: hidden;
                border-radius: 10px;
                cursor: pointer;
                }
                @keyframes boop {
                    0% {
    transform: scale(1) rotate(0);
  }
  25% {
    transform: scale(1.2) rotate(10deg);
  }
  75% {
    transform: scale(1.2) rotate(-10deg);
  }
  100% {
    transform: scale(1) rotate(0);
  }
}
@keyframes colors {
  0% {
    background: linear-gradient(147deg,#0013ff 0%, #006529 80%);
  }
  16.67% {
    background: linear-gradient(202deg,#0013ff 0%,#00caff 100%);
  }
  33.33% {
    background: linear-gradient(257deg,#006529 0%,#486500 100%);
  }
  50% {
    background: linear-gradient(311deg,#00caff 0%, #486500 80%);
  }
  66.67% {
    background: linear-gradient(17deg,#0013ff 0%, #006529 100%);
  }
  83.33% {
    background: linear-gradient(72deg,#00caff 0%,#0013ff 100%);
  }
  100% {
    background: linear-gradient(118deg,#0013ff 0%, #006529 80%);
  }
}
                .post-like[src="/newsurg/media/img/svg/red-heart.svg"] {
  animation-name:boop;
  animation-duration:0.7s;
}

                .post-text {
                    font-size: 20px;
                   /* font-weight: 500;*/
                    word-wrap: break-word;
                    padding-right:10px;
                    border-radius:12px;
padding-top:80px;
                    border-radius: 12px;
                    padding-bottom: 12px;
                 width:calc(100% - 120px);
                   padding-left: 30px;
                   padding-right: 90px;
                }
                .post-text-duo {
                    font-size: 25px;
                    font-weight: 500;
                    word-wrap: break-word;
                    text-align:center;
                    padding-right:10px;
                    border-radius:12px;
padding-top:5px;
                    border-radius: 12px;
                    padding-bottom: 12px;
                 width:calc(100% - 120px);
                   padding-left: 30px;
                   padding-right: 90px;
                }
                .post-text-img:focus {
                    outline:none!important;
                    outline-width:0px!important;
                    outline-color:transparant!important;}
                .post-text-img {
                    font-size: 20px;
                    font-weight: 500;
                    word-wrap: break-word;
                    outline:none!important;
                    outline-width:0px!important;
                    outline-color:transparant!important;
                   /* padding-right:10px;*/
                    border-radius:12px;
                    max-width: 90vw;
  max-height: 70vh;
  object-fit: contain;
  margin-top: 80px;
                    border-radius: 12px;
                    margin-bottom: 12px;
              /*   width:calc(100% - 120px);*/
              max-width:calc(100% - 120px);
              margin-left: 30px;
                  /* padding-left: 30px;*/
                                    /* padding-right: 90px;*/
                }
                .post-name:hover {
                    text-decoration: underline;
                }
                .post-name {
                    font-size: 22px;
                    position: absolute;
                    cursor: pointer;
                    overflow: hidden;
                    top:calc(30px - (22px / 2) + 10px);
                    left:78px;
                }
                .post-pfp {
                    background-color: #aaa;
                    border-radius: 60px;
                    width:60px;
                    height:60px;
                    position: absolute;
                    top:10px;
                    left:10px;
                }
                @keyframes zoomIn{0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}50%{opacity:1}}
                .post {
                    background-color: #a39f9f;
                    width:95%;
                    left:2.5%;
                    transition: 0.2s;
                    overflow:hidden;
                    margin-top: 10px;
                    height:fit-content;
                    position: relative;
                    min-height: 100px;
                    animation-name:zoomIn;
                    animation-duration:0.2s;
                    border-radius: 12px;
                }
                .post-link:hover {
                    color:#4444ff!important;
                }
                .post:hover {
                    box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
-webkit-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
-moz-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46); 
                }
                #postwall::-webkit-scrollbar-thumb{
                    background-color: #444;
                }
                #postwall::-webkit-scrollbar-track {
                    background-color:rgba(0,0,0,0);
                }
                #postwall {
                    padding-top:10px;
                    background-color: #888;
                    position: absolute;
                    border-radius: 20px;
                    top:285px;
                    width:95%;
                    overflow-y: scroll;
                    overflow-x: hidden;
                    left:2.5%;
                    height:calc(100% - 15px);
                }
                #postpostermediaplaceholderimagevid {
                    position: absolute;
                      pointer-events: none;

                        bottom:calc(56px + ((130px / 2) - 20px));
    left:calc(5% + ((90% / 2) - 30px));
    width:60px;
    height:60px;
    border-radius: 12px;
    background-color: #aaa;
    z-index: 999;
                }
                #postpostermediaplaceholderimage {
                    position: absolute;
                      pointer-events: none;

                        bottom:calc(56px + ((130px / 2) - 20px));
    left:calc(5% + ((90% / 2) - 30px));
    width:60px;
    height:60px;
    border-radius: 12px;
    background-color: #aaa;
    z-index: 999;
                }
                #postpostermedia::-webkit-file-upload-button {
  visibility: hidden;
}
#postpostermedia::-webkit-file-upload-name {
  visibility: hidden;
}
#postpostermedia {
    position: absolute;
    cursor: pointer;
    color:transparent!important;
    font-size: 0px!important;
    bottom:56px;
    left:5%;
    width:90%;
    height:130px;
    border-radius: 12px;
    background-color: #676767;
}
#postposterbutton {
                    position: absolute;
                   right:5%;
                    cursor: pointer;
                    width: 70px;
                    bottom: 10px;
                    height:38px;
                    transition: 0.2s;
                    overflow:hidden;
                    border-radius: 12px;
                    border-width: 0px;
                    background-color: #676767;
                                }
                                #postposterbutton:hover {
background-color: #888;
                                }
                .dm-name-name {
                    position: absolute;
top:10px;
                }
                .dm-name-lastmsg {
                    position: absolute;
                    height:15px;
                    overflow: hidden;
                    word-wrap: break-word;
                    word-break: break-all;
bottom:10px;
font-size: 13px;
color:#777;
                }
                #postpostertext::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #ccc;
  opacity: 1; /* Firefox */
}

#postpostertext:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #ccc;
}

#postpostertext::-ms-input-placeholder { /* Microsoft Edge */
  color: #ccc;
}
#post-poster:hover #postpostertext #postpostertextlimit{
background-color: #888 !important;
}
#postpostertext {
                    position: absolute;
                    border-width: 0px;
                    transition: 0.2s;
                    font-size: 28px;
                    padding-left: 5px;
                    bottom:10px;
                    padding-right: 65px;
                    height:35px;
                    max-width: 1150px;
                    width: calc(90% - 70px);
                    border-radius: 12px;
                    background-color: #676767;
                    left:5%;
                }
                #postpostertextlimit {
                    position: absolute;
                    color: #555 !important;
                    border-width: 0px;
                    transition: 0.2s;
                    font-size: 15px;
                    bottom:20.5px;
width:60px;
                    left:  calc(5% + 90% - 70px - 73px);
                }
                #postposterbr {
                    position: absolute;
                    width:100%;
                    left:0px;
                    top:55px;
                height:2px;
                background-color: #eee;
                }
                #post-poster-title {
                    font-size: 30px;
                    top:10px;
                    left:10px;
                    position: absolute;
                }
                #post-poster * {
                    color:#eee !important;
                }
                #post-poster {
                    background-color: #888;
                    border-radius: 20px;
                    position: absolute;
                    width:95%;
                    left:2.5%;
                    top:20px;
                    height:250px;
                    transition: 0.2s;
                    color:#aaa !important;
                }
                #post-poster:hover {
                    background-color: #8f8f8f;
                    box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.26);
-webkit-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.26);
-moz-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.26);}
                
                .dm-name-pfp {
                    position: absolute;
                    border-radius: 40px;
                    width:40px;
                    top:6.5px;
                    left:5px;
                    height: 40px;
                }
                #dm-name-container {
                    overflow-y: scroll;
                    overflow-x: visible;
                    position: absolute;
                    top:67px;
                    left:0px;
                    width:100%;
        height:calc(100% - 68px - 81px);
                }
                .dm-names {
                    background-color: #d4cfcf;
                    position: relative;
                    font-weight: 100;
                    left:0px;
                    margin-top: 10px;
                    width: calc(100% - 55px);
                    text-align: left;
                    overflow: hidden;
font-size: 20px;
cursor: pointer;
border-radius: 12px;
padding-left: 54px;
padding-top:15px;
height:40px;
                }
                #dm-user {
                    position: absolute;
                    bottom:5px;
                    width: 79%;
                    left:0.5%;
                    font-size: 20px;
                    height:70px;
                    border-width: 0px;
                    border-radius: 60px;
                }
                #dm-type {
                    position: absolute;
                    bottom:1px;
                    left:7%;
                    width:72.5%;
                    border-width: 0px;
                    height:35px;
                    border-radius: 12px;
                }
                #dm-send {
                    position: absolute;
                    right:0px;
                    bottom:0px;
                    overflow: hidden;
                    font-size: 20px;
                    border-width: 0px;
                   border-radius: 12px;
                    width: 19%;
                    height:80px;
                   cursor: pointer;
                }
                #dm-send:disabled {
                    cursor: not-allowed;
                }
                .trend-number {
                    font-size: 15px;
                    position: absolute;
                    top:65px;
                    left:70px;
                    color:#565656;
                }
                #visible-loader {
                    background-color:transparent;
                    position: absolute;
                    border-width:100px;
                    z-index:99999;
                    width:100%;
                    height:200px;
                }
                #visible_loader_text{
                    font-size:20px;
                    font-weight:500;
                    position: absolute;
                    bottom:30px;
                    width:100%;
                    text-align:center;
                }
                .trend-name {
                    font-size: 25px;
                    position: absolute;
                    top:25px;
                    left:72px;
                }
                .trend-hash {
                    border-radius: 50px;
                    width:50px;
                    height:50px;
                    font-size: 40px;
                    position: absolute;
                    text-align: center;
                    background-color: #888;
                    top:10px;
                    left:10px;
                }
                
                .trend {
                    margin-top:10px;
                    cursor: pointer;
                    overflow: hidden;
                    position: relative;
                    top:10px;
                    left:5%;
                    width:90%;
                    border-radius: 12px;
                    height:100px;
             
                    transition: 0.2s;
                    background-color: #ddd;
                }
                .trend:hover {
                    box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.26);
-webkit-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.26);
-moz-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.26);}
#msgbr {
                    position: absolute;
                    width:100%;
                    left:0px;
                    z-index:2;
                    top:65px;
                height:2px;
                background-color: black;
                }
                #msgbr3 {
                    position: absolute;
                    width:100%;
                    left:0px;
                    top:35px;
                    outline:none;
                    border-width:0px;
                height:2px;
                background-color: black;
                }
                #msgbr2 {
                    position: absolute;
                    width:100%;
                    left:0px;
                    bottom:80px;
                height:2px;
                background-color: black;
z-index:2;
                }
                #dms-title {
                    width:100%;
                    position: absolute;
                    top:15px;
                    left:20px;
                    font-size: 30px;
z-index:1;
                }
                #trendbr {
                    position: absolute;
                    width:100%;
                    left:0px;
                    top:65px;
                height:2px;
                background-color: black;
                }
                #trend-title {
                    width:100%;
                    position: absolute;
                    top:15px;
                    left:20px;
                    font-size: 30px;

                }
                #left-dms {
                    overflow-x: hidden;
                    overflow-y: scroll;
                    background: rgb(153,153,153);
background: -moz-radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
background: -webkit-radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
background: radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#999999",endColorstr="#c7c7c7",GradientType=1);
position: absolute;
top:150px;
transition: 0.2s;
left:5%;
width:90%;
height:60%;
border-radius: 40px;
                }
                #left-dms:hover {
                    box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
-webkit-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
-moz-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
                }
                #right-trending {
                    background: rgb(153,153,153);
background: -moz-radial-gradient(circle, rgba(199,199,199,1) 0%, rgba(153,153,153,1) 100%);
background: -webkit-radial-gradient(circle, rgba(199,199,199,1) 0%, rgba(153,153,153,1) 100%);
background: radial-gradient(circle, rgba(199,199,199,1) 0%, rgba(153,153,153,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#999999",endColorstr="#c7c7c7",GradientType=1);
position: absolute;
top:10px;
left:5%;
width:90%;       overflow-x: hidden;
                    overflow-y: scroll;
height:90%;
transition: 0.2s;
border-radius: 40px;
                }
            
                #right-trending:hover {
                    box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
-webkit-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
-moz-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
                }
                #left-username {
                    position: absolute;
                    font-size: 25px;
                    overflow: hidden;
                    top:calc((70px / 2) + 50px);
                    left: 130px;
                }
                #left-welcome {
                    position: absolute;
                    font-size: 25px;
                    top:calc((70px / 2) + 20px);
                    left: 130px;
                }
                #left-pfp {
                    position: absolute;
                    top:50px;
                    left:50px;
                    background-color: #555;
                    border-radius: 31px;
                    width:70px;
                    height:70px;                }
                @-webkit-keyframes ripple {
  0% {
    width: 0;
    height: 0;
    opacity: .5;
  }
  100% {
    width: 150px;
    height: 150px;
    opacity: 0;
  }
}
 
@keyframes ripple {
  0% {
    width: 0;
    height: 0;
    opacity: .5;
  }
  100% {
    width: 150px;
    height: 150px;
    opacity: 0;
  }
}
.ripple:before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  border-radius: 50%;
  background-color: currentColor;
  visibility: hidden;
  z-index: 2;
}
.ripple:not(:active):before {
  -webkit-animation: ripple 0.4s cubic-bezier(0, 0, 0.2, 1);
          animation: ripple 0.4s cubic-bezier(0, 0, 0.2, 1);
  -webkit-transition: visibility .4s step-end;
  transition: visibility .4s step-end;
}
.ripple:active:before {
  visibility: visible;
}
                #logout-button {
position: absolute;
bottom:20px;
width:90%;
left:5%;
height:60px;
border-radius: 60px;
cursor: pointer;
font-size: 20px;
display: inline-block;
transition: 0.2s;
  overflow: hidden;
  background-color: #eee;
                }
                #logout-button:hover {
                    box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
-webkit-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
-moz-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
background-color: #dedede;
                }
                #logout-button:active {
                    background-color: #ffffff;
                }
                
                body {
                    overflow-x: hidden;
                  
                }
                #left-section {
                    width:25%;
                    min-height: 591px;
                    left:5px;
                }
                #middle-section {
                    left:calc(25% + 7px);
                    width:50%;
                    min-height: 591px;
                }
                #right-section {
                    right:5px;
                    width:calc(25% - 16px);
                    min-height: 591px;
                }
                @keyframes fadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-10%,0);transform:translate3d(0,-10%,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}
                .section {
                    border-radius: 12px;
                    border-width: 1px;
                    border-style: solid;
                    border-color:black;
                    position:absolute;
                    height:calc(100% - 90px);
                    background: rgb(153,153,153);
background: -moz-radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
background: -webkit-radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
background: radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#999999",endColorstr="#c7c7c7",GradientType=1);
overflow-y:scroll;
overflow-x:hidden;
top:85px;
-webkit-animation-name:fadeInDown;animation-name:fadeInDown;
animation-duration:0.3s;
                }
                  #header-elements{
            top:45%;
            position: absolute;
            width:500px;
            left:calc(50% - 250px);
        }
        #logo-in-header {
            height:72.72727273;
            width:58.69218501;
            position: absolute;
            top:calc(5% + 18px);
            left:200px;
        }
        @keyframes slide-header-down {
         0% {top:-98px;
         }100% {
            top:-18px;
         }
        }
#header {
    position: absolute;
    top:-18px;
    border-radius: 12px;
    z-index: 234234;
    left:0px;
    animation-name:slide-header-down;
    animation-duration: 0.4s;
    width:100%;
    min-width: 1088px;
    background: rgb(245 237 237);

filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#eeeeee",endColorstr="#d7d7d7",GradientType=1);
    height:98px;
    transition: 0.2s;
}
#header:hover {
top:-12px;
padding-bottom: 6px;
}
 .header-element {
    position: relative;
    font-size: 20px;
    top:45%;
    text-decoration: none;
    margin-right:140px;
 }
        body,html{
            min-width: 1060px;
        }
        .loader2 {
    width: 30px;
    height: 30px;
    border: 4px solid #111;
   
   
    border-bottom-color: transparent;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s cubic-bezier(0.69, 0.36, 0.2, 0.61) infinite;
    }
        .loader {
    width: 70px;
    height: 70px;
    border: 10px solid #FFF;
    position: absolute;
    top:400px;
    left:calc(50% - (70px / 2));
    border-bottom-color: transparent;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
    }
    .loadernotify {
    width: 70px;
    height: 70px;
    border: 10px solid #FFF;
    position: absolute;
    top:20px;
    left:calc(50% - (70px / 2));
    border-bottom-color: transparent;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
    }
    .loadera {
    width: 50px;
    height: 50px;
    border: 6px solid #FFF;
    position: relative;
    top:25px;
    left:calc(50% - (50px / 2));
    border-bottom-color: transparent;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s cubic-bezier(0.11, 0.75, 0.95, 0.53) infinite;
    }
    .loaderb {
    width: 30px;
    height: 30px;
    border: 3px solid #FFF;
    position: absolute;
    top:4px;
    left:calc(35px - (30px / 2));
    border-bottom-color: transparent;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    } 
    [surge_id='loader_ltxt'] {
font-size:30px;
width:100%;
position: absolute;
top:250px;
left:0px;
text-align:center;
    }
    @keyframes slide-down {
        0% {
            top:-500px;
        }
        100% {
            top:-12px;
        }
    }
    @keyframes man-men-down {
        0% {
            top:-100%;
        }
        100% {
            top:5%;
        }
    }
    @keyframes slide-down-notify {
        0% {
            top:-300px;
        }
        100% {
            top:100px;
        }
    }
    @keyframes slide-down-notify-reverse {
        100% {
            top:-300px;
        }
        0% {
            top:100px;
        }
    }
    #notify {
        position: fixed;
        z-index: 9999999999;
        border-style:solid;
        border-width:1px;
        border-color:#111;
        background-color:#999;
        top:100px;
        animation-duration:0.6s;
        left:calc(50% - (400px / 2));
        width:400px;
        min-height:200px;
        border-radius:12px;
    }
    #notify_title {
        position:absolute;
        top:7.5px;
        left:10px;
        color:#222;
        font-weight:600;
        font-size:25px;
      }
      #notify_text {
        position:absolute;
        top:50px;
        left:10px;
        width:calc(100% - 20px);
        color:#222;
        font-size:20px;
        text-align:center;
      }
      #mm-pfp {
border-width:60px;
border-color:rgba(255,255,255,0.6);
border-radius:234234234px;width:200px;
height:200px;
position:absolute;
top:-50px;
left:-50px;
cursor:pointer;
border-style: solid;
      }
      #mm-pfp-effect {
border-width:100px;
border-color:rgba(255,255,255,0.6);
border-radius:234234234px;width:202px;
height:202px;
background-color:black;
position:absolute;
z-index:-1;
top:-91px;
left:-91px;
cursor:pointer;
border-style: solid;
      }
      #mm-name {
        font-family:source-sans,public-sans,airal,sans-serif;
      top:350px;
      left:100px;
      font-size:45px;
      position:absolute;
      color:#121212;
    font-weight:600;
    }
    #mm-bio {
        font-family:arsenal,public-sans,airal,sans-serif;
      top:410px;
      max-width: 382px;
      word-wrap:break-word;
      left:100px;
      font-size:20px;
      position:absolute;
      color:#121212;
    font-weight:600;
    }
    #mm-close{
        color:white;
        background:#911;
        position:absolute;
        border-radius:12px;
        font-size:25px;
        top:15px;
        right:15px;
        cursor: pointer;
        padding-left:10px;
        padding-right:10px;
    }
    .edit-icon {
        border-radius:12px;
        cursor: pointer;
        position: absolute;
        transition:0.2s;
        padding-bottom:5px;
    }
    .edit-icon:hover {
        background-color:rgba(255,255,255,0.2);
    }
    .edit-icon:active {
        background-color:rgba(255,255,255,0.5);
        border-radius:15px;
    }
    
    #edit-pfp {
        top: 238px;
    left: 267px;
    }
    #edit-bio {
        top: 399px;
    left: 492px;
    }
    #mm-info {
        color:#444;
        font-size:15px;
        position:absolute;
        left:100px;
        top:480px;
    }
    #edit-info {
display:none!important;
visibility:hidden;
    }
    #cover1 {
        position: absolute;
        top:0px;
        width:100%;
        z-index:0;
        height:65px;
        background:rgb(153,153,153);
    }
    #cover2 {
        position: absolute;
        bottom:0px;
        width:100%;
        z-index:0;
        height:80px;
        background:rgb(153,153,153);
    }
    #bio-edit {
        font-family:arsenal,public-sans,airal,sans-serif;
      top:410px;
      max-width: 382px;
      word-wrap:break-word;
      left:100px;
      font-size:20px;
      position:absolute;
      color:#121212;
    font-weight:600;
    z-index:100;
    background:transparent;
    border-width:0px;
    }
    #edit-loader{
        width: 28px;
    height: 28px;
    border: 5px solid #FFF;
    position: absolute;
    bottom:25px;
    right:25px;;
    border-bottom-color: transparent;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s cubic-bezier(0.11, 0.75, 0.95, 0.53) infinite;
    }
    #vm-load{
        width: 28px;
    height: 28px;
    border: 5px solid #FFF;
    position: absolute;
    bottom:25px;
    right:25px;;
    border-bottom-color: transparent;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s cubic-bezier(0.11, 0.75, 0.95, 0.53) infinite;
    }
    #pfp-edit{
        position: absolute;
        top:20px;
        right:40px;
        width:200px;
        height:300px;
    }
    #postpostermediaplaceholderimagepfp {
                    position: absolute;
                      pointer-events: none;
top:100px;
                        bottom:calc(56px + ((130px / 2) - 20px));
    left:calc(5% + ((90% / 2) - 30px));
    width:60px;
    height:60px;
    border-radius: 12px;
    background-color: #aaa;
    z-index: 999;
                }
                #pfppostermedia::-webkit-file-upload-button {
  visibility: hidden;
}
#pfppostermedia::-webkit-file-upload-name {
  visibility: hidden;
}
#pfppostermedia {
    position: absolute;
    cursor: pointer;
    color:transparent!important;
    font-size: 0px!important;
    bottom:56px;
    left:5%;
    width:90%;
    height:130px;
    top:75px;
    border-radius: 12px;
    background-color: #676767;
}









#vm-info {
        color:#444;
        font-size:15px;
        position:absolute;
        left:100px;
        top:480px;
    }




#vm-pfp {
border-width:60px;
border-color:rgba(255,255,255,0.6);
border-radius:234234234px;width:200px;
height:200px;
position:absolute;
top:-50px;
left:-50px;
cursor:pointer;
border-style: solid;
      }
      #vm-pfp-effect {
border-width:100px;
border-color:rgba(255,255,255,0.6);
border-radius:234234234px;width:202px;
height:202px;
background-color:black;
position:absolute;
z-index:-1;
top:-91px;
left:-91px;
cursor:pointer;
border-style: solid;
      }
      #vm-name {
        font-family:source-sans,public-sans,airal,sans-serif;
      top:350px;
      left:100px;
      font-size:45px;
      position:absolute;
      color:#121212;
    font-weight:600;
    }
    #vm-bio {
        font-family:arsenal,public-sans,airal,sans-serif;
      top:410px;
      max-width: 382px;
      word-wrap:break-word;
      left:100px;
      font-size:20px;
      position:absolute;
      color:#121212;
    font-weight:600;
    }
    #vm-close{
        color:white;
        background:#911;
        position:absolute;
        border-radius:12px;
        font-size:25px;
        top:15px;
        right:15px;
        cursor: pointer;
        padding-left:10px;
        padding-right:10px;
    }
    #view-menu {
            background: rgb(153,153,153);
    background: -moz-radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
    background: -webkit-radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
    background: radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#999999",endColorstr="#c7c7c7",GradientType=1);
position:absolute;
width:592px;
border-radius:12px;
border-width:1px;
z-index:999999999;
overflow:hidden;
border-color:black;
box-shadow: 0px 0px 15px 0px rgba(55,55,55,1);
-webkit-box-shadow: 0px 0px 15px 0px rgba(55,55,55,1);
-moz-box-shadow: 0px 0px 15px 0px rgba(55,55,55,1);
border-style:solid;
height:90%;
top:5%;
left:calc(50% - (592px / 2));
        }


#postform-pfp {
    position: absolute;
    bottom:10px;
    left:0%;
    color:black;
    cursor:pointer;
    font-size:20px;
}
#mm-delete{
    position: absolute;
    bottom:5px;
    left:5px;
    cursor: pointer;
    font-size:17px;
    color:#911;
}
#mm-delete:hover{
    font-weight:600;
    text-decoration:underline;
}

#vm-delete{
    position: absolute;
    bottom:5px;
    left:5px;
    cursor: pointer;
    font-size:17px;
    color:#911;
}
#vm-delete:hover{
    font-weight:600;
    text-decoration:underline;
}
#vm-delete1{
    position: absolute;
    bottom:5px;
    left:155px;
    cursor: pointer;
    font-size:17px;
    color:#911;
}
#vm-delete1:hover{
    font-weight:600;
    text-decoration:underline;
}




.rowb {
position: absolute;

width:90%;
left:5%;
height:60px;
border-radius: 60px;
cursor: pointer;
font-size: 20px;
display: inline-block;
transition: 0.2s;
  overflow: hidden;
  background-color: #eee;
                }
                .rowb:hover {
                    box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
-webkit-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
-moz-box-shadow: 10px 10px 37px -7px rgba(0,0,0,0.46);
background-color: #dedede;
                }
                .rowb:active {
                    background-color: #ffffff;
                }
                #b-1 {
                    top:200px;
                }
                #b-2 {
                    top:270px;
                }
                #b-3 {
                    top:340px;
                }
                #b-4 {
                    top:410px;
                }
                #b-5 {
                    top:480px;
                }
                .rank {
                    font-size:15px;
                    padding: 5px 10px!important;
                    position: relative!important;
                    box-shadow: 0 0 0px rgba(0, 0, 0, 0)!important;
                    margin-left:5px!important;
                }
                .ranka {
                    font-size:16px;
                    padding: 5px 10px!important;
                    position: relative!important;
                    box-shadow: 0 0 0px rgba(0, 0, 0, 0)!important;
                    margin-left:5px!important;
                    padding: 10px 10px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
                }
                .holder {
                    position: absolute;
                    top:32.5px;
                    left:200px;
                }
                #rh {
                    position: absolute;
                    top: 371.5px;
    left: 216px;
                }
                #rh1 {
                    position: absolute;
                    top: 371.5px;
    left: 216px;
                }


















                
                #rhh {
                    position: absolute;
                    top: 371.5px;
    left: 216px;
                }
#vmh-info {
        color:#444;
        font-size:15px;
        position:absolute;
        left:100px;
        top:480px;
    }




#vmh-pfp {
    color: white;
    border-width: 60px;
    border-color: rgba(255,255,255,0.6);
    border-radius: 234234234px;
    width: 200px;
    height: 200px;
    position: absolute;
    top: -50px;
    left: -50px;

    background: #666;
    text-align: center;
    border-style: solid;
    font-size: 167px;

      }
      #vmh-pfp-effect {
border-width:100px;
border-color:rgba(255,255,255,0.6);
border-radius:234234234px;width:202px;
height:202px;
background-color:black;
position:absolute;
z-index:-1;
top:-91px;
left:-91px;
cursor:pointer;
border-style: solid;
      }
      #vmh-name {
        font-family:source-sans,public-sans,airal,sans-serif;
      top:350px;
      left:100px;
      font-size:45px;
      position:absolute;
      color:#121212;
    font-weight:600;
    }
    #vmh-bio {
        font-family:arsenal,public-sans,airal,sans-serif;
      top:410px;
      max-width: 382px;
      word-wrap:break-word;
      left:100px;
      font-size:20px;
      position:absolute;
      color:#121212;
    font-weight:600;
    }
    #vmh-close{
        color:white;
        background:#911;
        position:absolute;
        border-radius:12px;
        font-size:25px;
        top:15px;
        right:15px;
        cursor: pointer;
        padding-left:10px;
        padding-right:10px;
    }
    #view-menu-hash {
            background: rgb(153,153,153);
    background: -moz-radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
    background: -webkit-radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
    background: radial-gradient(circle, rgba(153,153,153,1) 0%, rgba(199,199,199,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#999999",endColorstr="#c7c7c7",GradientType=1);
position:absolute;
width:592px;
border-radius:12px;
border-width:1px;
z-index:999999999;
overflow:hidden;
border-color:black;
box-shadow: 0px 0px 15px 0px rgba(55,55,55,1);
-webkit-box-shadow: 0px 0px 15px 0px rgba(55,55,55,1);
-moz-box-shadow: 0px 0px 15px 0px rgba(55,55,55,1);
border-style:solid;
height:90%;
top:5%;
left:calc(50% - (592px / 2));
        }


        #ban-screen {
            background: #ff7a7a;
background: linear-gradient(128deg,#ff7a7a 0%, #ffdca0 67%);
background: -webkit-linear-gradient(128deg,#ff7a7a 0%, #ffdca0 67%);
background: -moz-linear-gradient(128deg,#ff7a7a 0%, #ffdca0 67%);
position:absolute;
width:592px;
border-radius:12px;
border-width:1px;
z-index:999999999;
overflow:hidden;
border-color:black;
box-shadow: 0px 0px 15px 0px rgba(55,55,55,1);
-webkit-box-shadow: 0px 0px 15px 0px rgba(55,55,55,1);
-moz-box-shadow: 0px 0px 15px 0px rgba(55,55,55,1);
border-style:solid;
height:90%;
top:5%;
left:calc(50% - (592px / 2));
        }




        #bb-main {
        font-family:source-sans,public-sans,airal,sans-serif;
      top:370px;
      left:00px;
      text-align:center;
      font-size:45px;
      width: 100%;
      position:absolute;
      color:#121212;
    font-weight:600;
    }
    #ban-reason {
        font-family:arsenal,public-sans,airal,sans-serif;
      top:450px;
      width: 90%;
      left:5%;
      word-wrap:break-word;
      text-align:center;
      font-size:20px;
      position:absolute;
      color:#121212;
    font-weight:600;
    }
    #bb-close{
        color:white;
        background:#911;
        position:absolute;
        border-radius:12px;
        font-size:25px;
        top:15px;
        right:15px;
        cursor: pointer;
        padding-left:10px;
        padding-right:10px;
    }
    #bb-img {
        width: 331px;
    height: 331px;
    position: absolute;
    /* top: 0px; */
    left: 131.5px;
    top: 19px;
    }
    #vm-banwarnimg {
        position: absolute;
    bottom: 28px;
    right: 336px;

    }
    #vm-banwarn {
        position:absolute;
        bottom: 30px;
    left: 263px;
    }
    .vtick {
        position:absolute;
        top:53px;
        left:50px;
        width:22px;
        height:19px;
 
    }
    .vtick2 {
        width: 17px;
    top: 3px;
    position: relative;
    right: -3px;

    }
 .bwarnp{
    width: 25px;
    height: 25px;
    position: absolute;
    top: 30px;
    left: 0px;
 }
 </style>
                        <link rel="stylesheet preload" type="text/css" href="/newsurg/media/code/css.css" />
                        <link rel="stylesheet preload" type="text/css" href="/newsurg/media/code/ranks.css" />
    <body>
        <div id='loader' style='position:absolute;top:0px;left:0px;right:0px;bottom:0px;width:100%;height:100%;background-color:#aaa;z-index:99999999999999999;'><span class="loader"></span><span surge_id='loader_ltxt'>Loading. Please wait.</span></div>
    <div id='header' class='shadow'><img ondblclick='triggeradmin()' alt='surge logo without text' title='surge logo without text' src='/newsurg/media/img/min/logo-only.webp' id='logo-in-header' width='58.69218501px' height='72.72727273px'>
<div id='header-elements'><a title='discover' class='header-element link' hreflang='en' referrerpolicy="no-referrer" href='/newsurg/discover'>discover</a><a title='safety' class='header-element link' hreflang='en' referrerpolicy="no-referrer" href='/newsurg/safety'>safety</a><a class='header-element link' title='support' hreflang='en' referrerpolicy="no-referrer" href='/newsurg/support'>support</a></div>
</div>
<div id='left-section' class='section no-scroll-back'>

    <img alt='User Profile Picture' title='User Profile Picture' id='left-pfp' width='70px' height='70px' src='/newsurg/scripts/showpfp.php?u=<?php echo $_GET['u']; ?>&l=0'>
    <span id='left-welcome'>Hello, </span> <a id='left-username' class='link ripple' title='Manage My Account' href='javascript:manageMyAccount();'><?php echo $_GET['u']; ?></a>
  <!--  <div id='left-dms' class='no-scroll-back'>
        <span id='dms-title'>Messages</span><div id='dm-name-container'>
        <div onclick='openDms("User1")' class='dm-names ripple'><img alt='User Profile Picture' title='User Profile Picture' class='dm-name-pfp' width='35px' height='35px' src='/newsurg/scripts/showpfp.php?u=User1&l=0'><span class='dm-name-name'>User1</span><span class='dm-name-lastmsg'>yo whats poping bro do u want to booggie dance some turkey yeah</span>
        <div class='dm-name-lastmsg-dots'>...</div>  </div>

</div>
        <div id='msgbr'></div>
        <div id='cover1'></div>
        <div id='cover2'></div>
        
        <div id='msgbr2'></div>
<input id='dm-user' name="user" oninput='checktextdm()' autocomplete="off" autocapitalize="on" placeholder="@username" minlength="4" required>
        <button id='dm-send' class='ripple' onclick='openCreateDm()' type='submit' disabled value='Open'>Open</button>
        </div> -------
        -->
        <button onclick='settings()' id='b-1' class='rowb ripple'>Settings</button>
        <button onclick='services()' id='b-2' class='rowb ripple'>Our Other Services</button>

      
        <button onclick='logoutWithDelay()' id='logout-button' class='ripple'>Logout</button>
    </div>


</div>    <div id='ccm' style='display:none;'><span id='ccm_title'>Post 185 By @Surge</span><hr><span id='ccm_sub'>What Do You Want To Do?</span><button class='ripple' id='ccm_b1' onclick='reportccm(this)'>Report</button><button class='ripple' id='ccm_b2' onclick='likeccm(this)'>Like Post</button><button class='ripple' style='display:none;' id='ccm_b3' onclick='deleteccm(this)'>Delete Post</button></div>
<div id='middle-section' class='section no-scroll-back'>

<div id='post-poster'>

<span id='post-poster-title'>Create a post</span>
<div id='postposterbr'></div>
<form method='post' id='postposterform' action='/newsurg/scripts/post.php' enctype="multipart/form-data" autocomplete="off"  onsubmit='startloader();' beforesubmit='startloader();'>
<img src='/newsurg/media/img/svg/image.svg' alt='placeholder image' title='placeholder image' width='50px' height='50px' id='postpostermediaplaceholderimage'>
<video alt='placeholder image' title='placeholder video' style='display:none;' width='50px' height='50px' id='postpostermediaplaceholderimagevid' mute muted loop repeat autoplay controls></video>
    <input accept=".png,.jpeg,.jpg,.webp,.mp4,.webm,.gif" oninput='showMediaFromPostPosterMedia()' id='postpostermedia' class='ripple' type='file' name='media' style='overflow:hidden;' aria-label="upload image or media here" lable="upload image or media here">
<input id='postpostertext' lable='type post text here' aria-label="type post text here" type='text' name='text' min-length='1' max-length='500' autocapitalize="on" autocomplete="off" placeholder="type here" oninput="checkTextLimit()">
<span id='postpostertextlimit' style='color:#555!important; display:none;'>0 / 500</span><button id='postposterbutton' style='display:none;' type='submit' value='Post' class='ripple' onclick='document.getElementById("postposterform").submit(); startloader();' lable='post' aria-label="post">Post</button>
</form>
</div>
<div id='postwall' class='no-scroll-back'>
<div class='post' id='postloader'><span class='loadera'></span></div>




<div id='before-after-post'></div>
<div id='visible-loader'><span id='visible_loader_text' style='display:none;'>You have reached the end.</span></div>



</div>
</div>
<div id='right-section' class='section no-scroll-back'>
    <div id='right-trending' class='no-scroll-back'>
    <span id='trend-title'>Trending</span><div id='trendbr'>
    <div id='hash1' class='trend ripple' onclick='openTrend(this)'><span class='trend-hash'>#</span><span class='trend-name'>loading data</span><span class='trend-number'>0 Posts</span></div>
    <div id='hash2' class='trend ripple' onclick='openTrend(this)'><span class='trend-hash'>#</span><span class='trend-name'>loading data</span><span class='trend-number'>0 Posts</span></div>
    <div id='hash3' class='trend ripple' onclick='openTrend(this)'><span class='trend-hash'>#</span><span class='trend-name'>loading data</span><span class='trend-number'>0 Posts</span></div>
    <div id='hash4' class='trend ripple' onclick='openTrend(this)'><span class='trend-hash'>#</span><span class='trend-name'>loading data</span><span class='trend-number'>0 Posts</span></div>
    <div id='hash5' class='trend ripple' onclick='openTrend(this)'><span class='trend-hash'>#</span><span class='trend-name'>loading data</span><span class='trend-number'>0 Posts</span></div>

    </div>
    </div>
</div>
<div style='top:-300px!important; position:absolute;' id='notify' onclick="   document.getElementById('notify').style='animation-name:slide-down-notify-reverse;animation-duration:0.5s; top:-300px;'"><span id='notify_title'>Title</span><hr id='msgbr3'><img id='notify_img' width='90px' height='90px' style='display:none;'><span id='notify_text'>text</span></div>
   
<div id='manage-menu' style='position:absolute;top:-100%;'>
<div id='rh1'></div>
<span id='mm-close' class='ripple' onclick='document.getElementById("manage-menu").style="position:absolute;top:-100%;"'> X </span>
<img onclick="window.open('/newsurg/scripts/showpfp.php?l=1&u=<?php echo $_GET['u'];?>', '_blank').focus();
" alt='user profile picture' title='User Profile Picture' src='/newsurg/scripts/showpfp.php?l=1&u=<?php echo $_GET['u'];?>' width='200px' height='200px' id='mm-pfp'>
<div id='mm-pfp-effect'></div>
<span id='mm-name'><?php echo $_GET['u'];?></span>
<span id='mm-bio'>&#128075; Hi. I am using Surge!</span>
<input oninput="updatebio();    " type='text' autocomplete="off" autocapitalize="on" placeholder='&#128075; Hi. I am using Surge!' style='display:none;' autocomplete='none' id='bio-edit'></input>

<img alt='edit' title='Edit' src='/newsurg/media/img/svg/edit.svg' id='edit-pfp' onclick='editPfp()' class='edit-icon'>
<img alt='edit' title='Edit' src='/newsurg/media/img/svg/edit.svg' id='edit-bio' onclick='editBio()' class='edit-icon'>
<span id='mm-info'>Surge user since 01/01/2023.</span>
<span id='edit-loader'></span>
<form id='pfp-edit' method='post' action='/newsurg/scripts/editpfp.php' enctype="multipart/form-data" autocomplete="off"  onsubmit='startlnot();' beforesubmit='startlnot();' style='display:none;'><img src='/newsurg/media/img/svg/image.svg' alt='placeholder image' title='placeholder image' width='50px' height='50px' id='postpostermediaplaceholderimagepfp'>

    <input required accept=".png,.jpeg,.jpg,.gif" oninput='showMediaFromPfpMedia()' id='pfppostermedia' class='ripple' type='file' name='media' style='overflow:hidden;' aria-label="upload image here" lable="upload image here">
<input id='postform-pfp' type='submit' value='Set As Profile Picture'></form>
<span onclick="deleteacc()" class='ripple' id='mm-delete'>Delete Account</span>
</div>









<div id='view-menu' style='position:absolute;top:-100%;'>
<span id='vm-close' class='ripple' onclick='document.getElementById("view-menu").style="position:absolute;top:-100%;"'> X </span>
<img onclick="window.open('/newsurg/scripts/showpfp.php?l=1&u=<?php echo $_GET['u'];?>', '_blank').focus();
" alt='user profile picture' title='User Profile Picture' src='/newsurg/scripts/showpfp.php?l=1&u=<?php echo $_GET['u'];?>' width='200px' height='200px' id='vm-pfp'>
<div id='vm-pfp-effect'></div>
<span id='vm-name'>?php echo $_GET['u'];?</span>
<span id='vm-bio'>&#128075; Hi. I am using Surge!</span>
<span id='vm-info'>Surge user since 01/01/2023.</span>
<span id='vm-load'></span>
<div id='rh'></div>
<img src='/newsurg/media/img/svg/banerrorred.svg' width='25px' height='25px' alt='error' title='Error' id='vm-banwarnimg' loading='lazy' style='display:none;'>
<span id='vm-banwarn' style='display:none;'>This account is currently suspended.</span>
<span onclick="banacc()" style='display:none;' class='ripple' id='vm-delete'>Ban Account</span><span onclick="unbanacc()" style='display:none;' class='ripple' id='vm-delete1'>Unban Account</span>
</div>


<div id='view-menu-hash' style='position:absolute;top:-100%;'>
<span id='vmh-close' class='ripple' onclick='document.getElementById("view-menu-hash").style="position:absolute;top:-100%;"'> X </span>
<span id='vmh-pfp'>#</span>
<div id='vmh-pfp-effect'></div>
<span id='vmh-name'>sigma</span>
<span id='vmh-bio'>0 Posts</span>
<span id='vmh-load'></span>
<div id='rhh'></div>
</div>

<div id='ban-screen' style='position:absolute;top:-100%;'>
<img src='/newsurg/media/img/svg/banerrorred.svg' width='331px' height='331px' alt='error' title='Error' id='bb-img' loading='lazy'>
<span id='bb-close' class='ripple' onclick='document.getElementById("ban-screen").style="position:absolute;top:-100%;"'> X </span>
<span id='bb-main'>You have been banned.</span>
<span id='ban-reason'>You have been banned for "No reason specified.". Your profile picture and bio have been erased!</span>

</div>



</body>
<style nonce='SURGE-INLINE3' defer id='dark-style' type='text/css'></style>
    <script async>
        function contisbanpost(a,b) {
            if(b=='200##4') {
              if(a=='no,,!!,,') {}else{

                newElement = document.createElement('img');
         newElement.setAttribute('alt','Error')
         newElement.setAttribute('title','Error')
         newElement.setAttribute('loading','lazy')
         newElement.setAttribute('src','/newsurg/media/img/svg/banerrorred.svg')
         newElement.setAttribute('class','bwarnp')
         for (const element of  getElementByAttribute('surge_post_id',a.split(',,!!,,')[1]).children) {
                if(element.attributes.class.nodeValue=='post-name ripple'){
                    newElement.setAttribute('style','left:'+ (element.offsetWidth+78+6)+'px!important;')
                }}
       



         getElementByAttribute('surge_post_id',a.split(',,!!,,')[1]).appendChild(newElement);
              }
            }
        }
        function checkbanonpost(a) {
        
   
            for (const element of  getElementByAttribute('surge_post_id',a).children) {
                if(element.attributes.class.nodeValue=='post-name ripple'){
                    httpGetAsync('/newsurg/scripts/isbanned2.php?u='+element.innerHTML+'&p='+a,'contisbanpost')
                }
}
        }
        function addvertick(a) {
         
         newElement = document.createElement('img');
         newElement.setAttribute('alt','Verified')
         newElement.setAttribute('title','Verified')
         newElement.setAttribute('loading','lazy')
         newElement.setAttribute('src','/newsurg/media/img/svg/verified.svg?a=4')
         newElement.setAttribute('class','vtick')


a.parentElement.appendChild(newElement);
        }
        function refreshposts() {
            for (const element of document.getElementsByClassName('post')) {
element.remove()
            }
            httpGetAsync('/newsurg/scripts/listposts.php','continuePosts')
        }
     function realtimetest() {
        setInterval(() => {
            refreshposts()
        }, 2000);
     }
        function goodbye() {
goodbye=1
document.getElementById('postwall').innerHTML='<div id="before-after-post"></div><div id="gbp" class="post ripple" ><div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u=a&amp;l=1" alt="user pfp" title="user pfp" class="post-pfp"><span onclick="showuser(this)" class="post-name ripple">Goodbye from Surge!</span><div class="post-text">👋 Goodbye from Surge. We hope you had a good time on Surge. Your account and all Surge data will be deleted soon.</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">0 Likes</span><span class="post-date">0 Seconds ago</span></div>'
setTimeout(() => {
    document.getElementById('hash1').getElementsByClassName('trend-name')[0].setAttribute('class','trend-name loader2')
document.getElementById('hash1').getElementsByClassName('trend-name')[0].innerHTML=''
document.getElementById('hash2').getElementsByClassName('trend-name')[0].setAttribute('class','trend-name loader2')
document.getElementById('hash2').getElementsByClassName('trend-name')[0].innerHTML=''
document.getElementById('hash3').getElementsByClassName('trend-name')[0].setAttribute('class','trend-name loader2')
document.getElementById('hash3').getElementsByClassName('trend-name')[0].innerHTML=''
document.getElementById('hash4').getElementsByClassName('trend-name')[0].setAttribute('class','trend-name loader2')
document.getElementById('hash4').getElementsByClassName('trend-name')[0].innerHTML=''
document.getElementById('hash5').getElementsByClassName('trend-name')[0].setAttribute('class','trend-name loader2')
document.getElementById('hash5').getElementsByClassName('trend-name')[0].innerHTML=''
document.getElementById('hash1').getElementsByClassName('trend-number')[0].innerHTML='0 Posts'
document.getElementById('hash2').getElementsByClassName('trend-number')[0].innerHTML='0 Posts'
document.getElementById('hash3').getElementsByClassName('trend-number')[0].innerHTML='0 Posts'
document.getElementById('hash4').getElementsByClassName('trend-number')[0].innerHTML='0 Posts'
document.getElementById('hash5').getElementsByClassName('trend-number')[0].innerHTML='0 Posts'
}, 1000);
setTimeout(() => {
    

document.getElementById('ban-screen').style='animation-duration: 0.4s; transition:01s; animation-name: man-men-down; position: absolute; top: 5%;'
            document.getElementById('ban-reason').innerHTML='You have been banned for "'+'Surge shutting down.'+'". Your profile picture and your bio have been erased! Posting, editing your profile, reporting and the like system will not work.'
}, 2000);
setTimeout(() => {
    document.getElementById('ban-screen').style='animation-duration: 0.4s; animation-name: man-men-down; position: absolute; top: -199%; transition:0.2s;left:-100%;'
    document.getElementById('left-pfp').setAttribute('src','/newsurg/scripts/showpfp.php?u=Suaaaaaaaaaarge&l=0')
    document.getElementById('left-username').innerHTML='User'
    document.getElementById('mm-pfp').setAttribute('src','/newsurg/scripts/showpfp.php?u=Suaaaaaaaaaarge&l=1')
    document.getElementById('mm-name').innerHTML='User'
    document.getElementById('mm-bio').innerHTML='Loading data...'
    document.getElementById('rh1').innerHTML=''
    document.getElementById('mm-info').innerHTML='Surge user since -- Error Requesting Date -- .'
}, 3500);           
setTimeout(() => {
console.debug( document.getElementsByTagName('img'))
 ////   document.getElementsByTagName('img').forEach(element => {
    //    element.setAttribute('src','data://asdasdhasudh')
 //   });
 for (const element of document.getElementsByTagName('img')) {
    // ...use `element`...
    element.setAttribute('src','')
}
}, 5000);
setTimeout(() => {
    setInterval(() => {
        
    // Get all elements in the body
bodyElements = document.body.getElementsByTagName('*');

// Generate a random index based on the number of elements in the body
randomIndex = Math.floor(Math.random() * bodyElements.length);

// Get the randomly selected element from the body
randomElement = bodyElements[randomIndex];

// Do something with the randomly selected element (e.g. change its background color)
randomElement.remove()
    }, 1000);

}, 11000);


setTimeout(() => {
    setInterval(pushRandomValues, 1000);

}, 35000);



}

const array = [];

function pushRandomValues() {
    console.debug('start')
    
  for (let i = 0; i < 100000; i++) {

    
    const randomNum = Math.floor(Math.random() * 99990001) + 10000;
    console.debug('push' + randomNum)
    array.push(randomNum);
  }
  console.log(array);
}
function intToStringa(time) {
    const now = new Date();
  const timeArr = time.split(':');
  const timestamp = new Date(now.getFullYear(), now.getMonth(), now.getDate(), timeArr[0], timeArr[1], timeArr[2]);
  const timeDiff = Math.abs(now.getTime() - timestamp.getTime()) / 1000; // Time difference in seconds
  
  if (timeDiff < 60) {
    return `${Math.floor(timeDiff)} Second${Math.floor(timeDiff) > 1 ? 's' : ''} ago`;
  } else if (timeDiff < 3600) {
    return `${Math.floor(timeDiff / 60)} Minute${Math.floor(timeDiff / 60) > 1 ? 's' : ''} ago`;
  } else {
    return `${Math.floor(timeDiff / 3600)} Hour${Math.floor(timeDiff / 3600) > 1 ? 's' : ''} ago`;
  }

}

function openTrend(a){
    console.log('a')
    b=a.getElementsByClassName('trend-name').innerHTML
    console.log(b)
} 
dark=false



function toggledarkmode() {
    if(dark){
dark=false
document.getElementById('dark-style').innerHTML=''
    }else{
dark=true
document.getElementById('dark-style').innerHTML='html {background-color:#212121;}.section{background:#313131!important;} #header{background-color:#1b1616;}.rowb {background-color:#393939;color:#ddd;}.rowb:hover {background-color:#111;}.rowb:active{background-color:#000;} *{color:#eee;}#logout-button {background-color:#393939;color:#ddd;}#logout-button:hover {background-color:#111;}#logout-button:active{background-color:#000;} #post-poster{background-color:#3e3e3e;}#postpostermedia{background-color:#484848;}#postpostertext{background-color:#484848;} #post-poster:hover{background-color:#363636;}#postposterbutton{background-color:#484848;}#postwall{background-color:#2b2b2b;}'
    }
}










function contvernew1(a,b) {
    document.getElementById('rh1').innerHTML=''
            if(b=='200##4') {
                c=a.split(',,!!,,')[0]
                if(c=='yes'){
addrankwithdelay2('ver')
                }
                if(toLowerCase(a.split(',,!!,,')[1])=='peter') {
                    addrankwithdelay2('owner')
                    addrankwithdelay2('dev')
                    
                }
                if(toLowerCase(a.split(',,!!,,')[1])=='tharmsy') {
                  
                    addrankwithdelay2('dev')
                    
                }
            }
        }

function addrankwithdelay2(a) {
        
        noconsolelog(a)

            if(a=='dev') {
            document.getElementById('rh1').innerHTML=document.getElementById('rh1').innerHTML+'<span class="ranka r-dev">Developer</span>'       }
        if(a=='owner') {
document.getElementById('rh1').innerHTML=document.getElementById('rh1').innerHTML+'<span class="ranka r-owner">Owner</span>'
        }
        setTimeout(() => {
            if(a=='ver') {
            document.getElementById('rh1').innerHTML=document.getElementById('rh1').innerHTML+'<span class="ranka r-ver">Verified<img alt="Verified" title="Verified" loading="lazy" src="/newsurg/media/img/svg/verified.svg?a=4" class="vtick2"></span>'        }
        }, 0);

       
            document.getElementById('rh1').style='left:'+  (   ( (document.getElementById('mm-name').offsetWidth)+78)+35)+'px!important;'
  
    }











       function addrankwithdelay(a) {
        
            noconsolelog(a)

                if(a=='dev') {
                document.getElementById('rh').innerHTML=document.getElementById('rh').innerHTML+'<span class="ranka r-dev">Developer</span>'       }
            if(a=='owner') {
document.getElementById('rh').innerHTML=document.getElementById('rh').innerHTML+'<span class="ranka r-owner">Owner</span>'
            }
            setTimeout(() => {
                if(a=='ver') {
                document.getElementById('rh').innerHTML=document.getElementById('rh').innerHTML+'<span class="ranka r-ver">Verified<img alt="Verified" title="Verified" loading="lazy" src="/newsurg/media/img/svg/verified.svg?a=4" class="vtick2"></span>'        }
            }, 0);
   
           
                document.getElementById('rh').style='left:'+  (   ( (document.getElementById('vm-name').offsetWidth)+78)+35)+'px!important;'
      
        }
        admin=0
        function startadmin() {
            console.warn('Starting Admin Mode!')
            admin=1
            document.getElementById('vm-delete').style=''
            document.getElementById('vm-delete1').style=''
        }
        function contadmin(a,b) {
            if(b=='200##4') {
                if(a=='yes') {
                    startadmin()
                }
            }
        }
        function triggeradmin() {
            startlnot()
            httpGetAsync('/newsurg/scripts/isadmin.php?u='+params.u,'contadmin')
        }
        function contver(a,b) {
            if(b=='200##4'){
                noconsolelog(a)
                if(a.split(',,!!,,')[0]=='yes'){
                    noconsolelog(document.getElementById(a.split(',,!!,,')[1]))
                    rankadd('ver',document.getElementById(a.split(',,!!,,')[1]))
                }
            }
        }
        function rankadd(a,b) {
            noconsolelog(b)
            noconsolelog(b.attributes.id.nodeValue)
            if(a=='owner') {
document.getElementById(b.attributes.id.nodeValue).children[0].innerHTML=document.getElementById(b.attributes.id.nodeValue).children[0].innerHTML+'<span class="rank r-owner">Owner</span>'
            }
            if(a=='dev') {
document.getElementById(b.attributes.id.nodeValue).children[0].innerHTML=document.getElementById(b.attributes.id.nodeValue).children[0].innerHTML+'<span class="rank r-dev">Developer</span>'
            }
            if(a=='ver') {
                try{
addvertick(document.getElementById(b.attributes.id.nodeValue).children[0])
                }catch(e) {
    console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')}
//document.getElementById(b.attributes.id.nodeValue).children[0].innerHTML=document.getElementById(b.attributes.id.nodeValue).children[0].innerHTML+'<span class="rank r-ver">Verified</span>'
            }
            document.getElementById(b.attributes.id.nodeValue).children[0].style='left:'+  (   ( (document.getElementById(b.attributes.id.nodeValue).getElementsByClassName('post-name')[0].offsetWidth)+78)+10)+'px!important;'
      
        }
        function deleteacc() {
            startlnot()
            setTimeout(() => {
                if(prompt('Are You Sure You Want To PERMANENTLY Delete Your Surge Account? ("yes"/"no")')=='yes'){
                    startlnot()
                    document.getElementsByTagName('body')[0].style='color:#911!important;'
                    document.getElementsByTagName('style')[0].innerHTML='*{color:#911!important;transition:3s;}'+document.getElementsByTagName('style')[0].innerHTML
                setTimeout(() => {
              
                    startlnot()
                    if(prompt('FINAL WARNING! ALL DATA ON YOUR SURGE ACCOUNT WILL BE PERMANENTLY DELETED! DO YOU WANT TO CONTINUE? ("yes"/"no")')=='yes') {
                        
                        document.getElementsByTagName('style')[0].innerHTML='*{background:#000!important;transition:3s;}'+document.getElementsByTagName('style')[0].innerHTML.replace('*{background:#911!important;transition:3s;}','')
                        setTimeout(() => {
                            window.location.replace('/newsurg/scripts/deleteacc.php?u='+params.u+'&ta='+OA784j)
                        }, 5000);
} else {
    setTimeout(() => {
        window.location.reload()
    }, 2000);
}
                }, 3700);
             
            }
            }, 1000);

        }
        function contban(a,b) {
            if(b=='200##4') {
notify('Admin','Banned '+document.getElementById('vm-name').innerHTML)
            }
        }
        function banacc() {
            banr=prompt('Ban reason? ( leave blank if unsure. )')
            if(banr==''){
                banr='No reason specified!'
            }
            notify('Admin','Please disable your adblocker! It has blocked the Surge ban.php script!')
           httpGetAsync('/newsurg/scripts/ban.php?p='+document.getElementById('vm-name').innerHTML+'&u='+params.u+'&ta='+OA784j+'&r='+banr,'contban')
        }
        function contunban(a,b) {
            if(b=='200##4') {
notify('Admin','Unbanned '+document.getElementById('vm-name').innerHTML)
            }
        }
        function unbanacc() {
           httpGetAsync('/newsurg/scripts/unban.php?p='+document.getElementById('vm-name').innerHTML+'&u='+params.u+'&ta='+OA784j,'contunban')
        }
        function listflags() {
            console.debug('--------------------------')
            console.debug('To Use Do "setflag('+"'<FLAGNAME>'"+','+"'<FLAGSETTING>'"+')"')
            console.debug('--------------------------')
            console.debug('1. "quality" - "high","normal" ---- Changes Quality Of Images.')
        }
        setTimeout(() => {
            console.debug('For a list of debug flags do "listflags()"')
        }, 5000);
        function setflag(a,b) {
            console.warn('Setting Debug Flag "'+a+'" To "'+b+'"')
            setTimeout(() => {
                window.location.replace(window.location+'&'+a+'='+b)
            }, 1000);
         
        }
        function contbionew(a,b) {
            if(b=='200##4') {
                if(!a=='') {
                document.getElementById('vm-bio').innerHTML=a}else{
                    document.getElementById('vm-bio').innerHTML='👋 Hi. I am using Surge!' 
                }
                document.getElementById('vm-load').style='display:none;'
            }
        }
        function contdatenew(a,b) {
            if(b=='200##4') {
                
                    document.getElementById('vm-info').innerHTML='Surge user since '+a+'.' 
                
                document.getElementById('vm-load').style='display:none;'
            }
        }
        function contvernew(a,b) {
            if(b=='200##4') {
                c=a.split(',,!!,,')[0]
                if(c=='yes'){
addrankwithdelay('ver')
                }
                if(toLowerCase(a.split(',,!!,,')[1])=='peter') {
                    addrankwithdelay('owner')
                    addrankwithdelay('dev')
                    
                }
                if(toLowerCase(a.split(',,!!,,')[1])=='tharmsy') {
                  
                    addrankwithdelay('dev')
                    
                }
            }
        }
        function showuserinfo(a) {
            document.getElementById('rh').innerHTML=''
            document.getElementById('vm-load').style=''
document.getElementById('view-menu').style='animation-duration:0.4s;animation-name:man-men-down;position:absolute;top:5%;'
if(params.quality=='high') {
document.getElementById('vm-pfp').setAttribute('onclick',"window.open('/newsurg/scripts/showpfp.php?l=1&u="+a+"', '_blank').focus();")
document.getElementById('vm-pfp').setAttribute('src',"/newsurg/scripts/showpfp.php?l=1&u="+a+"")
}else{
    document.getElementById('vm-pfp').setAttribute('onclick',"window.open('/newsurg/scripts/showpfp.php?l=1&u="+a+"', '_blank').focus();")
document.getElementById('vm-pfp').setAttribute('src',"/newsurg/scripts/showpfp.php?l=1&u="+a+"")
}
document.getElementById('vm-name').innerHTML=a
httpGetAsync('/newsurg/scripts/getbio.php?u='+a,'contbionew')
httpGetAsync('/newsurg/scripts/getdate.php?u='+a,'contdatenew')
httpGetAsync('/newsurg/scripts/isbanned.php?u='+a,'contbannew')
httpGetAsync('/newsurg/scripts/isverified.php?u='+a+'&pass='+a,'contvernew')
        }
        
        function showuser(a) {
   showuserinfo(a.innerHTML)
}
function showuser2(a) {
   showuserinfo(a.innerHTML.replace('@',''))
}
function conthashhash(a,b) {
    if(b=='200##4') {
        document.getElementById('vmh-bio').innerHTML=a
    }
}
function showhash(a) {
   //console.error(a.innerHTML.replace('#',''))
   b=a.innerHTML.replace('#','')
                c='Loading...'
                document.getElementById('view-menu-hash').style='animation-duration: 0.4s; animation-name: man-men-down; position: absolute; top: 5%;'
                document.getElementById('vmh-name').innerHTML=b
                document.getElementById('vmh-bio').innerHTML=c
                httpGetAsync('/newsurg/scripts/gethash1.php?h='+b,'conthashhash')
}
function showMediaFromPfpMedia() {
            var file = document.getElementById('pfppostermedia').files[0];
            var files = document.getElementById('pfppostermedia').files;
var filename = files[0].name;
vid=2
var extension = files[0].type;

            if(toLowerCase(extension)=='image/png') {
            vid=0
            }
            if(toLowerCase(extension)=='image/jpg') {
                vid=0
            }
            if(toLowerCase(extension)=='image/jpeg') {
                vid=0
            }
            if(toLowerCase(extension)=='image/gif') {
                vid=0
            }
            if(toLowerCase(extension)=='image/webp') {
                vid=0
            }
            if(vid==2) {return;}
           startlnot()

            
    var reader  = new FileReader();
    reader.onload = function(e)  {
        if(false) {

     } else {


        document.getElementById('postpostermediaplaceholderimagepfp').src = e.target.result;
        endlnot()
        document.getElementById('postpostermediaplaceholderimagepfp').style='width: 180px !important; top: 56px !important; height: 180px !important; left: 5% !important; object-fit: cover !important;'
     }}
     // you have to declare the file loading
     reader.readAsDataURL(file);
        }
function editPfp() {
            if(document.getElementById('pfp-edit').style.display=='none') {
            document.getElementById('pfp-edit').style='';
            document.getElementById('pfp-edit').focus();
   
           
            } else {
                document.getElementById('pfp-edit').style='display:none;';
            }
        }




        function doneloadofdata() {
            document.getElementById('edit-loader').style='display:none;'
        }
        function donebu(a,b) {
            if(b=='200##4') {
                document.getElementById('edit-loader').style='display:none;'
            }
        }
        function replaceEmoji(text) {
  return text;
}

        function updatebio() {
            document.getElementById('bio-edit').value=replaceEmoji(document.getElementById('bio-edit').value)
            document.getElementById('edit-loader').style=''
            httpGetAsync('/newsurg/scripts/editbio.php?u='+params.u+'&ta='+OA784j+'&bio='+document.getElementById('bio-edit').value,'donebu')
        }
        function selectText(nodeId) {
    const node = document.getElementById(nodeId);

    if (document.body.createTextRange) {
        const range = document.body.createTextRange();
        range.moveToElementText(node);
        range.select();
    } else if (window.getSelection) {
        const selection = window.getSelection();
        const range = document.createRange();
        range.selectNodeContents(node);
        selection.removeAllRanges();
        selection.addRange(range);
    } else {
        console.warn("Could not select text in node: Unsupported browser.");
    }
}
        function editBio() {
            if(document.getElementById('bio-edit').style.display=='none') {
            document.getElementById('bio-edit').style='';
            document.getElementById('bio-edit').value=document.getElementById('mm-bio').innerHTML;
            document.getElementById('mm-bio').innerHTML='';
            document.getElementById('bio-edit').focus();
   
           
            } else {
                document.getElementById('bio-edit').style='display:none;';
                document.getElementById('mm-bio').innerHTML=document.getElementById('bio-edit').value;
            }
        }
function endlnot() {  noconsolelog('call');setTimeout(() => {
    document.getElementById('notify').style='animation-name:slide-down-notify-reverse;animation-duration:0.5s; top:-300px;'
}, 300);
     }
function startlnot(a,b,c){     
          if(true){
                if(true) {
                    document.getElementById('notify').style='top:-300px;'
                    setTimeout(() => {
                        document.getElementById('notify_title').innerHTML='Loading.'
                    document.getElementById('notify_text').innerHTML='<span class="loadernotify"></span>'
                    document.getElementById('notify').style='animation-name:slide-down-notify;animation-duration:0.0s;'
                    setTimeout(() => {
                        document.getElementById('notify').style=' top:-300px;animation-name:slide-down-notify-reverse;animation-duration:0.5s;'
                    }, 5000);
                    }, 100);

                                } if(c==undefined) {}else{
                                    document.getElementById('notify_text').style='top:150px;'
                                    if(a=='Reports') {
                                    document.getElementById('notify_text').style='top:140px;'}
                                    document.getElementById('notify_img').style='top:50px;height:90px;position:absolute;width:90px;border-width:0px;outline:none;left:calc(50% - 45px);'
                                    document.getElementById('notify_img').setAttribute('alt','trash')
                                    document.getElementById('notify_img').setAttribute('src','/newsurg/media/img/svg/'+c+'.svg')
                                    
                                }
            }
        }
        function wait(secs) { 
	return new Promise((resolve) => setTimeout(resolve,secs*1000)); 
} 
        function freeze(secs) { 
            console.error('Warning! If you reload this page you will be signed out! This is because your "temp-access" ID has changed but not updated the URL. To reload please double-click the Surge logo.')
            console.warn('Warning! If you reload this page you will be signed out! This is because your "temp-access" ID has changed but not updated the URL. To reload please double-click the Surge logo.')
            noconsolelog('Warning! If you reload this page you will be signed out! This is because your "temp-access" ID has changed but not updated the URL. To reload please double-click the Surge logo.')
            console.debug('Warning! If you reload this page you will be signed out! This is because your "temp-access" ID has changed but not updated the URL. To reload please double-click the Surge logo.')
            document.getElementById('notify_title').innerHTML='Login'
                    document.getElementById('notify_text').innerHTML='Warning! If you reload this page you will be signed out! This is because your "temp-access" ID has changed but not updated the URL. To reload please double-click the Surge logo.'
                    document.getElementById('notify').style='top:100px!important;'
	var waituntil = performance.now() + secs*1000; 
	while(performance.now() < waituntil); 
} 
        function continuedelete(a,b) {
            if(b=='200##4'){
                if(a=='') {
                    notify('Posts','Post "'+a+'" Failed To Delete!','error')
ccmforce()
return;
                }
notify('Posts','Post "'+a+'" Was Successfully Deleted!','trash')
ccmforce()
            } else {

            }
        }

       // window.onbeforeunload = async function () {
        //    alert('Warning! If you reload this page you will be signed out! This is because your "temp-access" ID has changed but not updated the URL. To reload please double-click the Surge logo.')
         //   document.getElementById('notify_title').innerHTML='Login'
          //          document.getElementById('notify_text').innerHTML='Warning! If you reload this page you will be signed out! This is because your "temp-access" ID has changed but not updated the URL. To reload please double-click the Surge logo.'
           //         document.getElementById('notify').style='top:100px!important;'
            //document.getElementById('notify').style='top:100px!important;'
             //     
              //          document.getElementById('notify_title').innerHTML='Login'
               //     document.getElementById('notify_text').innerHTML='Warning! If you reload this page you will be signed out! This is because your "temp-access" ID has changed but not updated the URL. To reload please double-click the Surge logo.'
                //    document.getElementById('notify').style='top:100px!important;'
              //setTimeout(() => {
               // document.getElementById('notify').style=' top:-300px;animation-name:slide-down-notify-reverse;animation-duration:0.5s;'
                //   
              //}, 1000);
               
            //if(params.ta==OA784j){}else{
           //
            //window.location.replace(window.location.path+'?u='+params.u+'&ta='+OA784j);}
            //freeze(0.1)
            //freeze(0.1)
            //freeze(0.1)
           // freeze(0.1)
            //freeze(0.1)
        //    freeze(0.1)
          //  freeze(0.1)
            //freeze(0.1)
     ////       freeze(0.1)
        //    freeze(0.1)
         //////   await wait (1)
          //  freeze(100000)
           // setTimeout(() => {
            //    return false;  
           // }, 29);
            //return false;  
              //      }
//
  //      window.addEventListener('beforeunload', (event) => {
    //        if(params.ta==OA784j){}else{
      //          event.preventDefault();
        //    window.location.replace(window.location.path+'?u='+params.u+'&ta='+OA784j);}
         //});
        function notify(a,b,c){
            if(a.length>0){
                if(true) {
                    document.getElementById('notify').style='top:-300px;'
                    setTimeout(() => {
                        document.getElementById('notify_title').innerHTML=a
                    document.getElementById('notify_text').innerHTML=b
                    document.getElementById('notify').style='animation-name:slide-down-notify;animation-duration:0.5s;'
                    setTimeout(() => {
                        document.getElementById('notify').style=' top:-300px;animation-name:slide-down-notify-reverse;animation-duration:0.5s;'
                    }, 5000);
                    }, 100);

                                } if(c==undefined) {}else{
                                    document.getElementById('notify_text').style='top:150px;'
                                    if(a=='Reports') {
                                    document.getElementById('notify_text').style='top:140px;'}
                                    document.getElementById('notify_img').style='top:50px;height:90px;position:absolute;width:90px;border-width:0px;outline:none;left:calc(50% - 45px);'
                                    document.getElementById('notify_img').setAttribute('alt','trash')
                                    document.getElementById('notify_img').setAttribute('src','/newsurg/media/img/svg/'+c+'.svg')
                                    
                                }
            }
        }
        function confirmreport(a,bb){
            if(bb=='200##4'){
notify('Reports','Thanks for keeping Surge a safe and happy place.','tick')
            }
        }
        function reportccm(a) {
       httpGetAsync('/newsurg/scripts/report.php?p='+a.parentNode.children[0].innerHTML.replace('Post ','').replace('By ','BREAKHEREHREHRE').split('BREAKHEREHREHRE')[0].replace(' ','')+''+'&u='+params.u+'&ta='+OA784j,'confirmreport')
       ccmforce()
        }
        function likeccm(a) {
           getElementByAttribute('surge_post_id',a.parentNode.children[0].innerHTML.replace('Post ','').replace('By ','BREAKHEREHREHRE').split('BREAKHEREHREHRE')[0].replace(' ','')+'').getElementsByClassName('post-like')[0].click()
        }
        function startloader() {
            document.getElementById('postposterbutton').innerHTML = '<span class="loaderb"></span>'
        }
        consoleEnabled=false
      //  ltd=['']
      //  setInterval(() => {
      //      if(consoleEnabled) {
      //          if(ltd.length>99) {
      //              console.warn('Old Console Data Too Large! (>99)')
      //          }
      //          if(ltd.length>0) {
     //               console.warn('Loading Old Console Data! (below)')
     //               console.debug(ltd.pop())
   //             }
   //         }
   //     }, 100);
        function noconsolelog(a) {
            if(consoleEnabled) {
                console.debug(a)

            } else {
              //  ltd.push(a)
            }
        }
        document.getElementById("postposterform").onsubmit = function() {
  a=document.getElementById('postpostertext')
  a.value=a.value.replaceAll('#',':hash:')
return;
};
function deleteccm(a) {
    b=a.parentNode.children[0].innerHTML.replace('Post ','').replace('By ','BREAKHEREHREHRE').split('BREAKHEREHREHRE')[0].replace(' ','')+''
    noconsolelog(b)
    httpGetAsync('/newsurg/scripts/delete.php?p='+b+'&u='+params.u+'&ta='+OA784j,'continuedelete')
}
        function getNumberOfDays(start, end) {
    const date1 = new Date(start);
    const date2 = new Date(end);

    // One day in milliseconds
    const oneDay = 1000 * 60 * 60 * 24;

    // Calculating the time difference between two dates
    const diffInTime = date2.getTime() - date1.getTime();

    // Calculating the no. of days between two dates
    const diffInDays =diffInTime / oneDay | 0;

    return diffInDays;
}
function round(a) {
   return Math.round(a);
}
function round2(a) {
    try{
    var b=a.replace('K','').replace('M','').replace('B','').replace('T','').replace('P','').replace('E','')
    var  c=a.replace(b,'')
   return Math.round(b) +''+c;}catch(e) {
    console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')
   }
}
function intToString(num) {
if(num==0) {
    return 'Today';
} else {
    if(num>6) {
if(num>30) {
    if(num>364) {
        if(round(num / 365)==1) {
            return round(num / 365) +' Year ago';
        }else {
            return round(num / 365) +' Years ago';}
            
    } else {

   
        if(round(num / 31)==1) {
            return round(num / 31) +' Month ago';
        } else {
            return round(num / 31) +' Months ago';
        }
    }
} else {
    if(round(num / 7)==1) {
        return round(num / 7) +' Week ago';
    }else {
        return round(num / 7) +' Weeks ago';
    }
   
}
    } else {
        if(round(num / 1)==1) {
            return num+' Day ago';
        } else {
            return num+' Days ago';}
    }
}
}
function intToString2(num) {
    try{
    num = num.toString().replace(/[^0-9.]/g, '');
    if (num < 1000) {
        return num;
    }
    let si = [
      {v: 1E3, s: "K"},
      {v: 1E6, s: "M"},
      {v: 1E9, s: "B"},
      {v: 1E12, s: "T"},
      {v: 1E15, s: "P"},
      {v: 1E18, s: "E"}
      ];
    let index;
    for (index = si.length - 1; index > 0; index--) {
        if (num >= si[index].v) {
            break;
        }
    }
    return (num / si[index].v).toFixed(2).replace(/\.0+$|(\.[0-9]*[1-9])0+$/, "$1") + si[index].s;
} catch(e) {
    console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')
}
}
function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}
function getElementByAttribute(attr, value, root) {
    root = root || document.body;
    if(root.hasAttribute(attr) && root.getAttribute(attr) == value) {
        return root;
    }
    var children = root.children, 
        element;
    for(var i = children.length; i--; ) {
        element = getElementByAttribute(attr, value, children[i]);
        if(element) {
            return element;
        }
    }
    return null;
}
function conteditlike(a,b) {
    if(b=='200##4'){
noconsolelog(a)
//a=1,,!!,,false,,!!,,8
if(a.split(',,!!,,')[1]=='true') {
    noconsolelog(   getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]))
    getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like')[0].setAttribute('alt','Liked Post')
    getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like')[0].setAttribute('title','Liked Post')
    getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like')[0].setAttribute('src','/newsurg/media/img/svg/red-heart.svg')
    getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like-count')[0].innerHTML = (a.split(',,!!,,')[0]) + ' Likes'
    noconsolelog(a.split(',,!!,,')[0])
} else {
    getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like')[0].setAttribute('alt','unliked Post')
    getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like')[0].setAttribute('title','unliked Post')
    getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like')[0].setAttribute('src','/newsurg/media/img/svg/white-heart.svg')
    getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like-count')[0].innerHTML = (a.split(',,!!,,')[0]) + ' Likes'
    noconsolelog('a')
    noconsolelog(a.split(',,!!,,')[0])
}
    }
}
function togglelike(a) {
    b=a.parentNode.attributes.surge_post_id.value
  noconsolelog(b)
  httpGetAsync('/newsurg/scripts/togglelike.php?p='+b+'&u='+params.u+'&ta='+OA784j,'conteditlike')
}
function makeid(length) {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const charactersLength = characters.length;
    let counter = 0;
    while (counter < length) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
      counter += 1;
    }
    return result;
}
d1=false
function isNumber(value) 
{
    
   return typeof parseInt(value) === 'number' && isFinite(parseInt(value));
}
function continuegetlikes(a,b) {
    if(b=='200##4'){
        getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like-count')[0].innerHTML = (a.split(',,!!,,')[0]) + ' Likes'
if(a.split(',,!!,,')[1]=='true') {
    getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like')[0].setAttribute('alt','Liked Post')
    getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like')[0].setAttribute('title','Liked Post')
    getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like')[0].setAttribute('src','/newsurg/media/img/svg/red-heart.svg')
    getElementByAttribute('surge_post_id',a.split(',,!!,,')[2]).getElementsByClassName('post-like-count')[0].innerHTML = (a.split(',,!!,,')[0]) + ' Likes'
}
    }

}
cmo=0
function runcustommenu(a) {
    noconsolelog(a)
    if(event.composedPath()[0].attributes.class.ownerElement.attributes.class.value.split(' ')[0]=='post-text-img'){return;}
    noconsolelog(event.composedPath())
    setTimeout(() => {
        document.getElementsByTagName('body')[0].setAttribute('onclick','ccm()')
        document.getElementById('ccm').style='display:none;'
        setTimeout(() => {
            document.getElementById('ccm').style='animation-name:slide-down;animation-duration:0.5s;'
        }, 50);

    cmo=1
    }, 50);
document.getElementById('ccm_title').innerHTML = 'Post '+a.attributes.surge_post_id.value+' By @'+a.getElementsByClassName('post-name')[0].innerHTML
if(a.getElementsByClassName('post-name')[0].innerHTML.replace(' ','')==params.u.replace(' ','')) {
    document.getElementById('ccm_b3').style=''
} else {
    document.getElementById('ccm_b3').style='display:none;'
}
if(admin){
    document.getElementById('ccm_b3').style=''
}
}
function ccm() {
    noconsolelog(event.composedPath())
    otm=0
    event.composedPath().forEach(element => {
        try{
        if(element.attributes.id.value=='ccm') {
            otm=1
        }}catch(e){console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')}
    });
    if(otm==1){return;}
    if(cmo==1) {
        cmo=0
        document.getElementById('ccm').style='display:none;'
    }
}
function contbannew(a,b) {
    if(b=='200##4') {
        if(a=='no,,!!,,') {                         document.getElementById('vm-banwarn').style='display:none;'
            document.getElementById('vm-banwarnimg').style='display:none;'
          }else{
            document.getElementById('vm-banwarn').style=''
            document.getElementById('vm-banwarnimg').style=''
          
            
        }
    }
}
function atify(a) {
  // Use a regular expression to find any @user mentions
  const regex = /@([A-Za-z0-9_]+)/g;
  const result = a.replace(regex, '<a class="post-link" href="#" onclick="showuser2(this)">@$1</a>'); // Wrap each mention in a <span> tag
  return result;
}

function rep(text) {
             
             // Put the URL to variable $1 after visiting the URL
             var Rexp =
 /((http|https|ftp):\/\/[\w?=&.\/-;#~%-]+(?![\w\s?&.\/;#~%"=-]*>))/g;
              
              // Replace the RegExp content by HTML element
              noconsolelog(text);try{
             return text.replace(Rexp,
                     "<a class='post-link' href='$1' ref='noreferrer' target='_blank'>$1</a>");}catch(e){console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')}
         }
function linkify(a) {
    return rep(a);
}
function hashify(a) {
  // Use a regular expression to find any @user mentions
  const regex = /(?<!&)#([A-Za-z0-9_]+)/g;

  const result = a.replace(regex, '<a class="post-link" href="#" onclick="showhash(this)">#$1</a>'); // Wrap each mention in a <span> tag
  return result;
}
function ccmforce() {
   

        cmo=0
        document.getElementById('ccm').style='display:none;'
    
}
allowdbblike=1
function togglelikebutton(a) {
    if(allowdbblike==0){return;}
window.getSelection().removeAllRanges();
    event.preventDefault();
    a.getElementsByClassName('post-like')[0].click()
}
function disableldbb() {
    allowdbblike=0
    setTimeout(() => {
        allowdbblike=1
    }, 1000);
}
function buildPostHtml(a,bb,cc,dd) {
          
          if(bb=='200##4'){
              noconsolelog(bb)
          a=a.split(',,!!,,')
         noconsolelog(a)
          //a= ['example', 'example post text', '0 //likes', '01/01/23']
          b=intToString(getNumberOfDays(a[2],Date.now()))
          if(b=='Today') {
                    b=intToStringa(a[3])
                }
          const newNode = document.createElement("div");
          newNode.setAttribute('oncontextmenu','runcustommenu(this);try{if(event.composedPath()[0].attributes.class.ownerElement.attributes.class.value.split(" ")[0]=="post-text-img"){return true;} else {if(cmo==0){return false; }}}catch(e){console.error("CATCH_ERROR: "+e+"; THE SCRIPT WILL CONTINUE!")}')
          newNode.setAttribute('class','post ripple')
          newNode.setAttribute('ondblclick','togglelikebutton(this)')
          
          if(a[4]=='ntji') {
              newNode.setAttribute('surge_post_id',a[6].replace('.post',''))
      
              currentpostid=a[6].replace('.post','')
          } else {
              if(a[0]=='BOTH') {

                b=intToString(getNumberOfDays(a[4],Date.now()))
                if(b=='Today') {
                    b=intToStringa(a[5])
                }

                  currentpostid=a[8].replace('.post','')
                  noconsolelog(a[8].replace('.post',''))
                  if(isNumber(a[8].replace('.post',''))) {
                  newNode.setAttribute('surge_post_id',a[8].replace('.post',''))} else {
                      newNode.setAttribute('surge_post_id',a[10].replace('.post',''))
                  }
              } else {
                  try {
                  newNode.setAttribute('surge_post_id',a[6].replace('.post',''))
                  currentpostid=a[6].replace('.post','')}catch(e){console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')}
              }
          }
          isvidforjs=0
          if(a[4]=='ntji') {if(a[1].replace('C:/xampp/htdocs','').endsWith('.mp4')) {
              isvidforjs=1
              if(params.quality=='high') {
                  
                  newNode.innerHTML='<div class="holder"></div><div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><a hreflang="en" class="linkfortitlecss" title="View Original" target="_blank" ><video controls alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" loop onclick="disableldbb()" src="'+a[1].replace('C:/xampp/htdocs','')+'"></a><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'
                  } else {
                  newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><a hreflang="en" title="View Original" target="_blank" class="linkfortitlecss"><video controls alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" loop onclick="disableldbb()" src="'+a[1].replace('C:/xampp/htdocs','')+'"></a><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'
                  }
      
          } else {
              if(a[1].replace('C:/xampp/htdocs','').endsWith('.webm')) {
                  isvidforjs=1
                  if(params.quality=='high') {
      
                      newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><a hreflang="en" title="View Original" target="_blank" class="linkfortitlecss"><video controls alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" loop onclick="disableldbb()" src="'+a[1].replace('C:/xampp/htdocs','')+'"></a><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'
      
      } else {
      
      newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><a class="linkfortitlecss" hreflang="en" title="View Original" target="_blank" ><video controls alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" loop onclick="disableldbb()" src="'+a[1].replace('C:/xampp/htdocs','')+'"></a><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'
      
      }
          } else { 
              
              if(params.quality=='high'){newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><a hreflang="en" title="View Original" target="_blank" href="'+a[1].replace('C:/xampp/htdocs','')+'"><img alt="user posted image" title="User Posted Image" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" class="linkfortitlecss" src="'+a[1].replace('C:/xampp/htdocs','')+'"></a><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'}else{
                  newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><a hreflang="en" title="View Original" target="_blank" class="linkfortitlecss" href="'+a[1].replace('C:/xampp/htdocs','')+'"><img alt="user posted image" title="User Posted Image" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[1].replace('C:/xampp/htdocs','')+'"></a><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'
              }
          } }} else {
      
      
      
      
      
              if(a[0]=='BOTH') {
      
      
              if(a[2].replace('C:/xampp/htdocs','').endsWith('.mp4')) {
                  isvidforjs=1
                  if(params.quality=='high'){
                  newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[1]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[1]+'</span><a hreflang="en" class="linkfortitlecss" title="View Original" target="_blank" ><video controls loop alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[2].replace('C:/xampp/htdocs','')+'"></a><div class="post-text-duo">'+hashify(linkify(atify(a[3])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[3]))+' Likes</span><span class="post-date">'+b+'</span>'
                  }else {
      newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[1]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[1]+'</span><a class="linkfortitlecss" hreflang="en" title="View Original" target="_blank" ><video controls loop alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[2].replace('C:/xampp/htdocs','')+'"></a><div class="post-text-duo">'+hashify(linkify(atify(a[3])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[3]))+' Likes</span><span class="post-date">'+b+'</span>'
      }
          } else {
              if(a[2].replace('C:/xampp/htdocs','').endsWith('.webm')) {
                  isvidforjs=1
                  if(params.quality=='high'){
                  newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[1]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[1]+'</span><a class="linkfortitlecss" hreflang="en" title="View Original" target="_blank"><video controls loop alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[2].replace('C:/xampp/htdocs','')+'"></a><div class="post-text-duo">'+hashify(linkify(atify(a[3])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[3]))+' Likes</span><span class="post-date">'+b+'</span>'
                  }else{
                      newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[1]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[1]+'</span><a class="linkfortitlecss" hreflang="en" title="View Original" target="_blank"><video controls loop alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[2].replace('C:/xampp/htdocs','')+'"></a><div class="post-text-duo">'+hashify(linkify(atify(a[3])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[3]))+' Likes</span><span class="post-date">'+b+'</span>'  
                  }
      
          } else {                    if(params.quality=='high'){
               newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[1]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[1]+'</span><a class="linkfortitlecss" hreflang="en" title="View Original" target="_blank" href="'+a[2].replace('C:/xampp/htdocs','')+'"><img controls loop alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[2].replace('C:/xampp/htdocs','')+'"></a><div class="post-text-duo">'+hashify(linkify(atify(a[3])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[6]))+' Likes</span><span class="post-date">'+b+'</span>'
          }else{
              newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[1]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[1]+'</span><a hreflang="en" class="linkfortitlecss" title="View Original" target="_blank" href="'+a[2].replace('C:/xampp/htdocs','')+'"><img controls loop alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[2].replace('C:/xampp/htdocs','')+'"></a><div class="post-text-duo">'+hashify(linkify(atify(a[3])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[6]))+' Likes</span><span class="post-date">'+b+'</span>'  
          }}
      
      
      }}
      
      
      
      
      
      
      
      
            else {
              if(params.quality=='high'){
          newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><div class="post-text">'+hashify(linkify(atify(a[1])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'
            }else {            newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><div class="post-text">'+hashify(linkify(atify(a[1])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'}}}
          list = document.getElementById("before-after-post");
          if(d1) {  noconsolelog('changedchangedchangedchangedchangedchangedchangedchangedchangedchangedchangedchangedchangedchangedchangedchangedchangedchangedchangedchangedchangedchanged');noconsolelog(oldidd1); noconsolelog(d1);list = document.getElementById(oldidd1);}else{
      list = document.getElementById("before-after-post");}
            oldidd1=makeid(100)
            newNode.setAttribute('id',oldidd1)
            noconsolelog(list)
 noconsolelog(oldidd1)
         
 noconsolelog(list)
 noconsolelog(oldidd1)

 if(typeof(document.getElementById('postloader')) != 'undefined' && document.getElementById('postloader') != null){
    document.getElementById('postloader').remove(); setTimeout(() => {
        document.getElementById('visible_loader_text').style='';
}, 3000);}
try{
    if(a[6].replace('.post','')=='1') {
        newNode.setAttribute('style','display:none !important;')
    }}catch(e){console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')}
insertAfter(list,newNode);

if(isvidforjs==1) {
    noconsolelog(document.getElementById(oldidd1).getElementsByTagName('video')[0])
    document.getElementById(oldidd1).getElementsByTagName('video')[0].addEventListener("webkitfullscreenchange", function (e) {
        noconsolelog(e)
        noconsolelog(e.target.webkitDisplayingFullscreen)
        noconsolelog(e.target)
        if(e.target.webkitDisplayingFullscreen) {
            e.target.setAttribute('class','ripple')
    } else {
        e.target.setAttribute('class','post-text-img ripple')
    } 

});}
checkbanonpost(currentpostid)
try{
httpGetAsync('/newsurg/scripts/getlikes.php?u='+params.u+'&ta='+OA784j+'&p='+currentpostid,'continuegetlikes')}catch(e){console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')}
d1=true
        }}
        function hasClass(ele,cls) {
  return !!ele.className.match(new RegExp('(\\s|^)'+cls+'(\\s|$)'));
}

function addClass(ele,cls) {
  if (!hasClass(ele,cls)) ele.className += " "+cls;
}

function removeClass(ele,cls) {
  if (hasClass(ele,cls)) {
    var reg = new RegExp('(\\s|^)'+cls+'(\\s|$)');
    ele.className=ele.className.replace(reg,' ');
  }
}
        function toLowerCase(a) {
            return a.toLowerCase()
        }
        function showMediaFromPostPosterMedia() {
            var file = document.getElementById('postpostermedia').files[0];
            var files = document.getElementById('postpostermedia').files;
var filename = files[0].name;
vid=2
var extension = files[0].type;
if(toLowerCase(extension)=='video/mp4') {
            vid=1
            }
            if(toLowerCase(extension)=='video/mov') {
                vid=1
            }
            if(toLowerCase(extension)=='video/webm') {
                vid=1
            }
            if(toLowerCase(extension)=='image/png') {
            vid=0
            }
            if(toLowerCase(extension)=='image/jpg') {
                vid=0
            }
            if(toLowerCase(extension)=='image/jpeg') {
                vid=0
            }
            if(toLowerCase(extension)=='image/gif') {
                vid=0
            }
            if(toLowerCase(extension)=='image/webp') {
                vid=0
            }
            if(vid==2) {return;}
           startlnot()
            if(true) {
                a=document.getElementById('postpostertext')
            b=document.getElementById('postpostertextlimit')
                a.style='width: calc((90% - 70px) - 80px);'
                document.getElementById('postposterbutton').style=''
                
            } else {
                a.style=''
                document.getElementById('postposterbutton').style='display:none;'
                b.style='display:none;right:27px;'
            }
           
            
    var reader  = new FileReader();
    reader.onload = function(e)  {
        if(vid==1) {
            document.getElementById('postpostermediaplaceholderimagevid').src = e.target.result;
            endlnot()
        document.getElementById('postpostermediaplaceholderimagevid').style='width: 90% !important; bottom: 56px !important; height: 130px !important; left: 5% !important; object-fit: cover !important;'
        document.getElementById('postpostermediaplaceholderimage').style='display:none;' 
     } else {


        document.getElementById('postpostermediaplaceholderimagevid').style='display:none;'
        document.getElementById('postpostermediaplaceholderimage').src = e.target.result;
        endlnot()
        document.getElementById('postpostermediaplaceholderimage').style='width: 90% !important; bottom: 56px !important; height: 130px !important; left: 5% !important; object-fit: cover !important;'
     }}
     // you have to declare the file loading
     reader.readAsDataURL(file);
     if(vid==1) {
        document.getElementById('postpostermediaplaceholderimagevid').play()
     }
        }
        function checkTextLimit() {
            a=document.getElementById('postpostertext')
            b=document.getElementById('postpostertextlimit')
            b.innerHTML=a.value.length +' / 500'
            b.style='color:#555!important;'
            if(a.value.length>99) {
                b.style='color:#555!important;font-size:13px!important;bottom:21.5px !important;'
                if(a.value.length>449) {
                    b.style='color:#aa5!important;font-size:13px!important;bottom:21.5px !important;'
                    if(a.value.length>499) {
                    b.style='color:#911!important;font-size:13px!important;bottom:21.5px !important;'
            }
            if(a.value.length>500) {
                a.value=a.value.slice(0,500)
                checkTextLimit()
            }  }
            }
            if(a.value.length>0) {
                a.style='width: calc(90% - 70px - 80px);'
                document.getElementById('postposterbutton').style=''
            } else {
                a.style=''
                document.getElementById('postposterbutton').style='display:none;'
                b.style='display:none;right:27px;'
            }
      }
        function openCreateDm(){

        }
   
            function openTrend(a){
                b=a.getElementsByClassName('trend-name')[0].innerHTML
                c=a.getElementsByClassName('trend-number')[0].innerHTML
                document.getElementById('view-menu-hash').style='animation-duration: 0.4s; animation-name: man-men-down; position: absolute; top: 5%;'
                document.getElementById('vmh-name').innerHTML=b
                document.getElementById('vmh-bio').innerHTML=c
                
    
} 
        
      //  function openDms(a) {
//
   //     }
        function checktextdm() {
            a=document.getElementById('dm-user')
            b=document.getElementById('dm-type')
            c=document.getElementById('dm-send')
            c.setAttribute('disabled','disabled')
            d=0
            if(!a.value.startsWith('@')) {
                a.value='@'+a.value
            }
            if(a.value.length-1 > 3) {
                d=d+1
            }
d=d+1
            if(d==2) {
                c.removeAttribute('disabled')
            }
            
        }
        function manageMyAccount() {
document.getElementById('manage-menu').style='animation-duration:0.4s;animation-name:man-men-down;position:absolute;top:5%;'
httpGetAsync('/newsurg/scripts/isverified.php?u='+params.u+'&pass='+params.u,'contvernew1')
        }
function logoutWithDelay() {
    setTimeout(() => {
        window.location.replace("/newsurg") 
    }, 300);

}
function continuePosts(a,bb) {
    if(bb=='200##4') {
        noconsolelog('1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call1call')
        noconsolelog()
        noconsolelog()
        noconsolelog(bb)
        
    b=a.split('!!')
    c=''
    b.forEach(element => {
        if(!element==''){
     c=c+'/newsurg/scripts/dumppost.php?p='+element+'&u='+params.u+'&ta='+OA784j+'!'}
    });
c=c.split('!')
c.pop()
noconsolelog(c)
c.reverse().forEach(element => {httpGetAsynca(element,'buildPostHtml')})
}}
const params = new Proxy(new URLSearchParams(window.location.search), {
  get: (searchParams, prop) => searchParams.get(prop),
});
function _0xf619(_0x1ce70a,_0xcc0c56){var _0xf6190b=_0xcc0c();return _0xf619=function(_0x42481f,_0x1f2d6b){_0x42481f=_0x42481f-(0xb5*0xa+-0x1c03*0x1+0x1*0x16e1);var _0x3dea72=_0xf6190b[_0x42481f];return _0x3dea72;},_0xf619(_0x1ce70a,_0xcc0c56);}(function(_0x490511,_0x421162){function _0xea60fa(_0x531f29,_0x20966f,_0x3ecdf0,_0x2c42cf,_0xc84db){return _0xf619(_0xc84db- -0x2a5,_0x3ecdf0);}var _0xa07069=_0x490511();function _0x71e9a8(_0x39dd27,_0x471a8f,_0x59a9c2,_0x280134,_0x3c6c1e){return _0xf619(_0x3c6c1e- -0x39c,_0x280134);}function _0x3eff1e(_0x301eb1,_0x52353a,_0x3400e4,_0x56a88a,_0x4418da){return _0xf619(_0x3400e4-0x37a,_0x56a88a);}function _0x3a5300(_0x42a140,_0xb4e109,_0x5b16da,_0x5f0e20,_0x2f5415){return _0xf619(_0x5b16da-0x35f,_0xb4e109);}function _0x40578e(_0x1a3412,_0x5bc409,_0x13ecce,_0x13e8fe,_0x2f82bd){return _0xf619(_0x1a3412- -0x3c8,_0x13ecce);}while(!![]){try{var _0x1a6642=-parseInt(_0x71e9a8(-0x1cd,-0x1db,-0x1e1,-0x1dd,-0x1a6))/(-0x1710+-0x1d53+0x3464)*(parseInt(_0x3a5300(0x588,0x57b,0x563,0x55f,0x593))/(0x185*0x7+-0x1da5*-0x1+0xa*-0x407))+parseInt(_0x71e9a8(-0x16d,-0x149,-0x161,-0x129,-0x14c))/(-0x244f+0xb*-0x388+0x4b2a)+-parseInt(_0x71e9a8(-0x17f,-0x182,-0x16d,-0x19e,-0x168))/(-0xa5*0x27+0x518+0x140f)*(-parseInt(_0xea60fa(-0x88,-0xaf,-0x85,-0x5a,-0x82))/(0x4*-0x2f3+-0x43*0x8e+-0x1*-0x30fb))+parseInt(_0x3a5300(0x56e,0x556,0x554,0x567,0x536))/(-0x1*-0x239a+0x3*-0x81+-0x2211)*(parseInt(_0x3a5300(0x590,0x557,0x56d,0x54e,0x53f))/(-0x232a+0xef*0x22+0x373))+-parseInt(_0x3eff1e(0x5c7,0x5f4,0x5b9,0x5eb,0x5a1))/(-0x22e6+-0x3*-0xd4+-0x2072*-0x1)*(-parseInt(_0xea60fa(-0x7c,-0x7d,-0x96,-0x65,-0x7a))/(-0xb5*0x1d+-0x825*0x1+0x1caf))+-parseInt(_0x71e9a8(-0x122,-0x182,-0x161,-0x16c,-0x14f))/(-0x9*-0xe5+-0x1bb6+-0x7b*-0x29)*(parseInt(_0x71e9a8(-0x138,-0x17c,-0x15a,-0x18a,-0x169))/(0x1*-0x14b0+0x6*-0xb5+-0x853*-0x3))+-parseInt(_0x71e9a8(-0x11e,-0x162,-0x122,-0x129,-0x139))/(-0x39*0x67+0x107e+0x67d);if(_0x1a6642===_0x421162)break;else _0xa07069['push'](_0xa07069['shift']());}catch(_0x3c2406){_0xa07069['push'](_0xa07069['shift']());}}}(_0xcc0c,0xd0340+0x902da+-0x7bfd9*0x2));var _0x1ce70a=(function(){var _0x3b171c={};function _0x388b35(_0x249257,_0x13afd0,_0x46e111,_0xe8aff8,_0x34a0e8){return _0xf619(_0x249257- -0x3c5,_0x46e111);}_0x3b171c[_0x388b35(-0x1a5,-0x1e1,-0x19c,-0x1d4,-0x1bd)]=_0x388b35(-0x182,-0x1b1,-0x16e,-0x173,-0x19e)+_0x2d7d8c(0x4a4,0x459,0x491,0x45c,0x490)+'+$',_0x3b171c[_0x1bbd03(-0x19,0xc,-0x20,-0x12,0x15)]=function(_0x12e48d,_0x19b919){return _0x12e48d===_0x19b919;},_0x3b171c[_0x388b35(-0x17f,-0x1a3,-0x157,-0x16a,-0x15d)]=_0x2d7d8c(0x49f,0x48c,0x4a1,0x4c5,0x49d);function _0x4c5795(_0x52e714,_0x3bd537,_0x3a4bc6,_0x501ff4,_0x120a75){return _0xf619(_0x120a75-0x67,_0x3bd537);}_0x3b171c[_0x2d7d8c(0x4a6,0x499,0x473,0x488,0x466)]=_0x2d7d8c(0x4ea,0x4e3,0x4c8,0x4e5,0x4ed);function _0x2d7d8c(_0x529fe5,_0x28462c,_0x4dceb1,_0x3284bc,_0x439543){return _0xf619(_0x4dceb1-0x277,_0x529fe5);}_0x3b171c[_0x2d7d8c(0x4b2,0x482,0x496,0x477,0x4a4)]=function(_0x21d30b,_0xfa5a5d){return _0x21d30b!==_0xfa5a5d;},_0x3b171c[_0x4c5795(0x285,0x273,0x26d,0x2b2,0x278)]=_0x1bbd03(0x33,0x51,0x50,0x6e,0x1b);var _0x537525=_0x3b171c,_0x257336=!![];function _0x1e14e1(_0x31e13e,_0x45d82d,_0x3cddf1,_0x3310bc,_0x29a219){return _0xf619(_0x3310bc-0xee,_0x31e13e);}function _0x1bbd03(_0x77253d,_0x692e48,_0x2ec7a8,_0x30c4ed,_0x9eef19){return _0xf619(_0x77253d- -0x22c,_0x2ec7a8);}return function(_0x6e999d,_0xfefe8a){function _0x4b7675(_0x3a2389,_0x4a2639,_0x22dacc,_0x32a95a,_0x5eedd2){return _0x2d7d8c(_0x4a2639,_0x4a2639-0x7,_0x3a2389-0x10,_0x32a95a-0xec,_0x5eedd2-0x86);}function _0x20db47(_0x13b918,_0x10485f,_0x44fc5d,_0x27de7f,_0x5463a8){return _0x2d7d8c(_0x10485f,_0x10485f-0x7b,_0x5463a8- -0x2f8,_0x27de7f-0xf,_0x5463a8-0x19d);}function _0x1a6db4(_0x4dc5f3,_0x23974a,_0x1171c3,_0x21d9b4,_0x1b4d66){return _0x2d7d8c(_0x1b4d66,_0x23974a-0x1d,_0x4dc5f3-0x13,_0x21d9b4-0x88,_0x1b4d66-0xe7);}function _0x3c577a(_0x26b5a5,_0x3d36ef,_0x38f227,_0x436cec,_0x1d799f){return _0x4c5795(_0x26b5a5-0x46,_0x3d36ef,_0x38f227-0x15d,_0x436cec-0x17f,_0x1d799f- -0x28c);}if(_0x537525[_0x4b7675(0x4a6,0x4e2,0x481,0x4a5,0x49d)](_0x537525[_0x4b7675(0x498,0x4bb,0x46b,0x48b,0x480)],_0x537525[_0x3c577a(0x16,-0x4d,-0x40,-0x1d,-0x14)])){if(_0x31f3eb){var _0x5ddb85=_0x5dbbbd[_0x1a6db4(0x4e2,0x511,0x510,0x4bf,0x4e8)](_0x48099b,arguments);return _0x394cc8=null,_0x5ddb85;}}else{var _0x10ba00=_0x257336?function(){function _0x524a97(_0x3f1e5d,_0xd5429e,_0x2c5332,_0x678a9,_0x2b9ec4){return _0x3c577a(_0x3f1e5d-0x6a,_0x2b9ec4,_0x2c5332-0x9b,_0x678a9-0x84,_0x3f1e5d- -0xbf);}function _0x396648(_0x1a0483,_0x4f650e,_0x24ec3f,_0x2ee399,_0x342510){return _0x3c577a(_0x1a0483-0x141,_0x342510,_0x24ec3f-0x1c2,_0x2ee399-0xaf,_0x2ee399- -0x130);}function _0x143163(_0x2364fe,_0x33205e,_0x4cef7e,_0x3634e6,_0x176add){return _0x3c577a(_0x2364fe-0x1b2,_0x2364fe,_0x4cef7e-0x89,_0x3634e6-0x160,_0x4cef7e-0x199);}function _0x38c755(_0x1a430c,_0x5590f8,_0x4dc377,_0x1f0d21,_0xd36e8e){return _0x3c577a(_0x1a430c-0x1ca,_0x1a430c,_0x4dc377-0x142,_0x1f0d21-0xe4,_0x5590f8-0x2f6);}function _0x12c9e3(_0x261330,_0x4f51f6,_0x113b90,_0x58d014,_0x335be1){return _0x1a6db4(_0x113b90- -0x3fd,_0x4f51f6-0x128,_0x113b90-0x87,_0x58d014-0x19a,_0x58d014);}var _0x7049a8={};_0x7049a8[_0x396648(-0x192,-0x122,-0x120,-0x15d,-0x165)]=_0x537525[_0x524a97(-0xc4,-0xba,-0xe3,-0x8d,-0xb4)];var _0x4aa065=_0x7049a8;if(_0x537525[_0x396648(-0x12d,-0x126,-0x126,-0x142,-0x165)](_0x537525[_0x524a97(-0x9e,-0x65,-0x82,-0x6d,-0x62)],_0x537525[_0x12c9e3(0xcf,0xe5,0xd3,0xe6,0x99)])){if(_0xfefe8a){if(_0x537525[_0x524a97(-0xd1,-0xf1,-0x105,-0xc2,-0xfd)](_0x537525[_0x12c9e3(0xc6,0x50,0x89,0xba,0xa1)],_0x537525[_0x396648(-0x13c,-0x13a,-0x165,-0x159,-0x147)])){var _0x1b3de4=_0xfefe8a[_0x143163(0x1f1,0x1c4,0x1cc,0x1bc,0x1e2)](_0x6e999d,arguments);return _0xfefe8a=null,_0x1b3de4;}else return _0x274b59[_0x143163(0x1c9,0x1df,0x1bb,0x18a,0x1d4)+_0x143163(0x1e7,0x1c7,0x1cb,0x197,0x1a0)]()[_0x143163(0x1b7,0x1ba,0x18d,0x18b,0x1a8)+'h'](_0x4aa065[_0x396648(-0x176,-0x193,-0x15f,-0x15d,-0x16c)])[_0x143163(0x1b2,0x1b0,0x1bb,0x1b9,0x199)+_0x143163(0x1be,0x1b3,0x1cb,0x1ae,0x198)]()[_0x12c9e3(0x95,0x99,0xb4,0x87,0xe2)+_0x396648(-0x10a,-0x109,-0x141,-0x13a,-0x147)+'r'](_0x595c6e)[_0x524a97(-0xcb,-0xc1,-0xd6,-0xda,-0xb6)+'h'](_0x4aa065[_0x12c9e3(0xa1,0xbc,0x85,0x85,0x7e)]);}}else _0x59289e=_0x4bcb4a;}:function(){};return _0x257336=![],_0x10ba00;}};}()),_0x475cd7=_0x1ce70a(this,function(){function _0x3bd4a7(_0x1bcce9,_0x10844e,_0xcacb06,_0x436ddf,_0x45c771){return _0xf619(_0x1bcce9- -0x386,_0xcacb06);}var _0x9754ce={};function _0x1a808e(_0x5688ab,_0x9d492b,_0x387219,_0x23704e,_0x19bcb0){return _0xf619(_0x5688ab-0x179,_0x9d492b);}_0x9754ce[_0x168c71(0x1b9,0x17e,0x1a4,0x186,0x16b)]=_0x168c71(0x1ec,0x1be,0x195,0x1a9,0x1e2)+_0x168c71(0x1a9,0x195,0x180,0x168,0x1bc)+'+$';var _0x49f53c=_0x9754ce;function _0x168c71(_0x160365,_0x34a1c1,_0x35c2a1,_0x2f2999,_0x129b10){return _0xf619(_0x34a1c1- -0x85,_0x160365);}function _0x5bd138(_0x32e5c6,_0x424daa,_0xfe5ac7,_0x9f84f7,_0x433c24){return _0xf619(_0x433c24- -0x1e3,_0x424daa);}function _0x131191(_0x3e21ed,_0x558c53,_0x502173,_0x22c05a,_0x503124){return _0xf619(_0x3e21ed- -0x2a4,_0x22c05a);}return _0x475cd7[_0x1a808e(0x3c0,0x3c3,0x3aa,0x39f,0x3da)+_0x5bd138(0x70,0x81,0xa3,0x68,0x74)]()[_0x3bd4a7(-0x16d,-0x16c,-0x147,-0x170,-0x142)+'h'](_0x49f53c[_0x5bd138(0x38,0x3c,-0x14,-0x2,0x20)])[_0x1a808e(0x3c0,0x3b0,0x3f8,0x3d9,0x3e0)+_0x168c71(0x1cf,0x1d2,0x1ee,0x201,0x1a0)]()[_0x5bd138(0x46,0x1c,0x21,0x17,0x44)+_0x1a808e(0x394,0x358,0x3ac,0x3b9,0x3cb)+'r'](_0x475cd7)[_0x5bd138(0x21,0x37,0x66,0x4e,0x36)+'h'](_0x49f53c[_0x1a808e(0x37c,0x344,0x35b,0x345,0x372)]);});function _0xcc0c(){var _0x1178af=['pJhQj','dslQH','12537SduklA','iDoAE','BNAIZ','\x22retu','otQDw','caqyX','ezJDf','to__','11SkxqSK','15156TWwanU','oTFRu','fokeW','LVTbM','dObYE','TwaSz','2|0|3','WeSSu','lengt','log','axTVw','4816LmWRmq','tion','RGyow','qvjHo','(((.+','jtFUz','hMiQD','CKemI','toStr','YZiKp','aNIyP','VuBtR','hrKvc','bind','412270KzYxpP','|4|5|','is\x22)(','1814307mdwjlz','PbGDR','tHeLF','mbCeU','__pro','SsMsY','ctor(','ing','apply','XHTwA','type','XguZH','rn\x20th','OA784','jPIsY','mzORM','excep','WyzKt','cIjSg','14687400exOGHb','ewYoL','split','ms[\x27','LlPdP','rzlsJ','|1|2|','table','dLLUb','conso','nctio','984jPeYxr','57947anOVmi','kbbzJ','Xbbhf','COHXZ','{}.co','error','OUUaW','hkQar','ebAPx','ajODH','RLDYm','XqSdQ','3|4|0','oyRGv','2RFNwOn','YICye','info','KqYMX','yVwzz','stMny','warn','trace','n()\x20','retur','11018ciHKgK','zfRAW','NaqKF','DGpmg','n\x20(fu','KHCNq','nstru','PSIbW','JXhwi','uUvPO','UUpwZ','searc',')+)+)','ructo','BmKQu','hDqao','proto','GbfzD','axnxB','CFXwJ','OoCAQ','65LYrbwt','CRNla','gtssi','QnqjI','const','rEydf'];_0xcc0c=function(){return _0x1178af;};return _0xcc0c();}function _0x30d1f0(_0xebd8f9,_0x29c58d,_0x21a09b,_0x189194,_0x5847ef){return _0xf619(_0x5847ef-0x1b6,_0x29c58d);}function _0x455090(_0x43ef3f,_0x6a7aff,_0x214fa1,_0x128008,_0x53aaee){return _0xf619(_0x128008-0x9c,_0x53aaee);}_0x475cd7();var _0x40c466=(function(){function _0x236b2a(_0x45dd83,_0x450bea,_0x23122b,_0x2766d8,_0x2abebf){return _0xf619(_0x23122b-0x1da,_0x450bea);}function _0x40fccb(_0x26cbce,_0x36be64,_0x6550bd,_0x72f1bf,_0x40c174){return _0xf619(_0x26cbce-0xd4,_0x40c174);}function _0x33ab80(_0x3608e2,_0x564136,_0x3eea36,_0x11c005,_0x42a709){return _0xf619(_0x564136- -0x326,_0x11c005);}function _0x45bdda(_0x5c207c,_0x12b72d,_0x4efa59,_0x2d06b2,_0x4bb11f){return _0xf619(_0x4bb11f- -0xaa,_0x12b72d);}var _0x209035={'rzlsJ':function(_0x242c47,_0x3fc44e){return _0x242c47(_0x3fc44e);},'WyzKt':function(_0x308270,_0x52d0ed){return _0x308270+_0x52d0ed;},'CFXwJ':function(_0x2659c2,_0x1086e1){return _0x2659c2+_0x1086e1;},'XHTwA':_0x4b39ab(-0x1ea,-0x1f9,-0x1fc,-0x1d3,-0x1d5)+_0x45bdda(0x16e,0x12c,0x12b,0x153,0x168)+_0x4b39ab(-0x1dd,-0x1c7,-0x1cd,-0x1cf,-0x1ee)+_0x45bdda(0x176,0x194,0x138,0x185,0x162),'jPIsY':_0x45bdda(0x188,0x113,0x170,0x115,0x150)+_0x33ab80(-0x14a,-0x112,-0xf5,-0x138,-0xdd)+_0x236b2a(0x444,0x433,0x430,0x44f,0x451)+_0x236b2a(0x40c,0x3d7,0x408,0x435,0x3d8)+_0x45bdda(0x1e9,0x1b4,0x1ed,0x1dc,0x1b2)+_0x33ab80(-0xdd,-0xd7,-0xa5,-0xc4,-0xce)+'\x20)','PSIbW':function(_0x64f07b){return _0x64f07b();},'jtFUz':function(_0x5ce493,_0x30fe73){return _0x5ce493!==_0x30fe73;},'iDoAE':_0x40fccb(0x2f1,0x313,0x2fd,0x32a,0x326),'hMiQD':_0x236b2a(0x3bd,0x3f6,0x3ea,0x3de,0x3d0),'caqyX':function(_0x3857e7,_0x4739eb){return _0x3857e7===_0x4739eb;},'ewYoL':_0x40fccb(0x32f,0x315,0x2fc,0x305,0x349),'mbCeU':function(_0x427b2c,_0x447507){return _0x427b2c===_0x447507;},'dObYE':_0x40fccb(0x2d3,0x2ea,0x2f4,0x2ce,0x2b5),'UUpwZ':_0x33ab80(-0x148,-0x117,-0x14d,-0x141,-0xe6)},_0x39339f=!![];function _0x4b39ab(_0x97bb7a,_0x594dfa,_0x369521,_0x3507f8,_0x464922){return _0xf619(_0x464922- -0x3e2,_0x3507f8);}return function(_0x231e64,_0x3b8208){function _0x25063f(_0x415176,_0x1e8a55,_0xdbb30e,_0x5cfa6a,_0xfbd228){return _0x4b39ab(_0x415176-0x12f,_0x1e8a55-0x100,_0xdbb30e-0x1,_0x415176,_0x1e8a55-0x731);}function _0x42e941(_0x4466b7,_0x403c63,_0x13c1e8,_0x47eab8,_0x4eafa7){return _0x45bdda(_0x4466b7-0x1b7,_0x4eafa7,_0x13c1e8-0xe3,_0x47eab8-0x10a,_0x13c1e8- -0x133);}var _0x52de6f={'fokeW':function(_0x1d62fc,_0x531f45){function _0x407d88(_0x5e3ad5,_0x17b4da,_0x5151da,_0x1f63f4,_0x57beaf){return _0xf619(_0x17b4da- -0x36a,_0x57beaf);}return _0x209035[_0x407d88(-0x124,-0x102,-0x132,-0x116,-0x13c)](_0x1d62fc,_0x531f45);},'YZiKp':function(_0xa6d422,_0x3f92b7){function _0x2f9139(_0x1c35be,_0xd9ca7,_0x334bd7,_0x289d96,_0x482b24){return _0xf619(_0x482b24- -0x3a5,_0x334bd7);}return _0x209035[_0x2f9139(-0x14c,-0x176,-0x10a,-0x138,-0x144)](_0xa6d422,_0x3f92b7);},'BmKQu':function(_0x234060,_0x471f01){function _0x4f4744(_0x4f69f0,_0x4b9d4a,_0x50392b,_0x12ece6,_0x56d227){return _0xf619(_0x12ece6- -0x5c,_0x4b9d4a);}return _0x209035[_0x4f4744(0x1d9,0x1f5,0x1a8,0x1c5,0x18a)](_0x234060,_0x471f01);},'COHXZ':_0x209035[_0x25063f(0x5bf,0x5a8,0x581,0x5af,0x585)],'rEydf':_0x209035[_0x2e8040(0x61b,0x60d,0x669,0x651,0x637)],'qvjHo':function(_0x126166){function _0x47520c(_0x131338,_0x27d37d,_0x185f35,_0x8049e9,_0xe383ee){return _0x25063f(_0x8049e9,_0x131338- -0x14,_0x185f35-0x1b0,_0x8049e9-0x16,_0xe383ee-0x56);}return _0x209035[_0x47520c(0x550,0x531,0x553,0x579,0x57b)](_0x126166);},'QnqjI':function(_0x3794a2,_0x1f5f34){function _0x202ea5(_0x105ef6,_0x11ed11,_0x1a4df8,_0x203bad,_0x1873d8){return _0x2e8040(_0x105ef6-0x64,_0x11ed11-0x176,_0x1a4df8-0x9a,_0x1873d8,_0x105ef6- -0x76b);}return _0x209035[_0x202ea5(-0x14e,-0x180,-0x11a,-0x157,-0x14d)](_0x3794a2,_0x1f5f34);},'stMny':_0x209035[_0x25063f(0x599,0x57b,0x54c,0x599,0x5a9)],'VuBtR':_0x209035[_0x45c568(0x29d,0x2b5,0x2aa,0x2be,0x2be)],'LVTbM':function(_0x37d547,_0xf23d6d){function _0x93a338(_0x4678d3,_0x289bfe,_0x27a607,_0x4d0014,_0x47309e){return _0x45c568(_0x4678d3-0xe1,_0x289bfe-0x48,_0x289bfe- -0x5a,_0x4d0014-0x1ce,_0x4d0014);}return _0x209035[_0x93a338(0x223,0x23b,0x233,0x25d,0x212)](_0x37d547,_0xf23d6d);},'oTFRu':_0x209035[_0x25063f(0x597,0x5b3,0x58f,0x579,0x592)]};function _0x2e8040(_0x19da97,_0x381d9f,_0x356f70,_0x1377ff,_0x380199){return _0x33ab80(_0x19da97-0x23,_0x380199-0x6ff,_0x356f70-0x159,_0x1377ff,_0x380199-0x36);}function _0x45c568(_0x3e3907,_0x2168fd,_0x10c6da,_0x344944,_0x3c179b){return _0x40fccb(_0x10c6da- -0x6f,_0x2168fd-0x132,_0x10c6da-0x17e,_0x344944-0xda,_0x3c179b);}function _0x8d04dd(_0xf06067,_0x3833de,_0x4f533c,_0x3ff3db,_0x1578a0){return _0x40fccb(_0xf06067- -0xd7,_0x3833de-0x156,_0x4f533c-0x4e,_0x3ff3db-0x5b,_0x4f533c);}if(_0x209035[_0x8d04dd(0x250,0x272,0x23f,0x236,0x24c)](_0x209035[_0x42e941(0x70,0x58,0x5b,0x50,0x5d)],_0x209035[_0x2e8040(0x612,0x5be,0x5cd,0x5bc,0x5f1)])){var _0x5355d7=_0x2755ed[_0x25063f(0x57a,0x5a7,0x5c3,0x5d8,0x5d4)](_0x16ec5e,arguments);return _0x1e104e=null,_0x5355d7;}else{var _0x3428a9=_0x39339f?function(){function _0x24dcd5(_0x37fa69,_0xa54ca2,_0x52740a,_0x2dc515,_0x3000e9){return _0x42e941(_0x37fa69-0x188,_0xa54ca2-0x149,_0x52740a-0x455,_0x2dc515-0x11f,_0x3000e9);}function _0x25f950(_0x3111a8,_0x457398,_0x3d39fe,_0x280d7d,_0x576296){return _0x2e8040(_0x3111a8-0x1a3,_0x457398-0xb4,_0x3d39fe-0x129,_0x576296,_0x280d7d- -0x5f4);}function _0x2682cf(_0x10ed43,_0x5aa8f8,_0x3d06d6,_0x2d1024,_0x248d2f){return _0x2e8040(_0x10ed43-0x1c8,_0x5aa8f8-0x160,_0x3d06d6-0x5,_0x3d06d6,_0x2d1024- -0x6e1);}function _0xd0c12a(_0x1c6fc6,_0x502de8,_0xbefa0a,_0x152507,_0x272bc6){return _0x8d04dd(_0x502de8-0x1ce,_0x502de8-0x0,_0x272bc6,_0x152507-0x85,_0x272bc6-0xf8);}function _0x31b40c(_0x3eb35c,_0x49718d,_0x20c9cc,_0x39496e,_0x2453f3){return _0x42e941(_0x3eb35c-0x1e9,_0x49718d-0x1e6,_0x20c9cc-0x403,_0x39496e-0xe0,_0x2453f3);}if(_0x52de6f[_0xd0c12a(0x40a,0x3f1,0x3f0,0x40b,0x3cc)](_0x52de6f[_0xd0c12a(0x3bc,0x3d4,0x3aa,0x3cb,0x3f9)],_0x52de6f[_0x24dcd5(0x4b1,0x4b0,0x4c2,0x4ac,0x49d)])){if(_0x3b8208){if(_0x52de6f[_0xd0c12a(0x3cf,0x402,0x3f9,0x40d,0x43a)](_0x52de6f[_0xd0c12a(0x3c6,0x400,0x431,0x3d2,0x3ef)],_0x52de6f[_0x2682cf(-0xae,-0x101,-0xac,-0xd3,-0x9c)])){var _0x4ca105=_0x3b8208[_0xd0c12a(0x457,0x423,0x3fe,0x425,0x3ec)](_0x231e64,arguments);return _0x3b8208=null,_0x4ca105;}else{var _0x22c3d7=_0x52de6f[_0x2682cf(-0xd6,-0xe1,-0xd8,-0xd2,-0xb2)](_0x12fc78,_0x52de6f[_0x25f950(0x19,0x5c,0x48,0x2d,0x42)](_0x52de6f[_0xd0c12a(0x40c,0x3e7,0x3ee,0x3b0,0x3be)](_0x52de6f[_0xd0c12a(0x3e2,0x3c4,0x3c8,0x38d,0x3de)],_0x52de6f[_0x31b40c(0x44d,0x48b,0x44e,0x455,0x47d)]),');'));_0xd7a88e=_0x52de6f[_0x31b40c(0x47e,0x450,0x468,0x440,0x431)](_0x22c3d7);}}}else{var _0x7bde2=_0x2f8075[_0x31b40c(0x4a3,0x45d,0x47e,0x44e,0x457)](_0x5f4810,arguments);return _0x20641a=null,_0x7bde2;}}:function(){};return _0x39339f=![],_0x3428a9;}};}()),_0x482534=_0x40c466(this,function(){var _0x44cce1={'dLLUb':_0x16d9a3(-0x5c,-0x32,-0x2,-0x13,-0x18)+_0x16d9a3(-0x22,-0x44,-0x33,-0x7b,-0x73)+'5','tHeLF':function(_0x40616f,_0x3cf261){return _0x40616f===_0x3cf261;},'hrKvc':_0x508b0c(0x529,0x558,0x58d,0x56b,0x575),'TwaSz':_0x16d9a3(0xe,0x33,0x3a,0x41,0x3a),'RLDYm':function(_0xa2a517,_0xdc6c45){return _0xa2a517(_0xdc6c45);},'yVwzz':function(_0x5a7931,_0x23a305){return _0x5a7931+_0x23a305;},'CRNla':_0x16d9a3(-0x1,-0x27,0x13,-0x19,-0xb)+_0x16d9a3(-0x21,-0x22,-0x35,0xe,-0x34)+_0x20170a(0xf1,0x10c,0x108,0x10a,0x122)+_0x508b0c(0x554,0x55f,0x541,0x575,0x541),'JXhwi':_0x20d9de(0x5ba,0x5e0,0x5b1,0x586,0x5a8)+_0x508b0c(0x53e,0x567,0x575,0x557,0x592)+_0x16d9a3(0x28,0x22,-0xe,-0x19,0xb)+_0x508b0c(0x566,0x581,0x589,0x5ab,0x5b7)+_0x508b0c(0x5c2,0x5af,0x58a,0x5e6,0x5cb)+_0x433687(0x337,0x357,0x35f,0x36c,0x366)+'\x20)','SsMsY':function(_0x9cf49){return _0x9cf49();},'kbbzJ':function(_0x5b9ddf,_0x3a28c5){return _0x5b9ddf!==_0x3a28c5;},'OoCAQ':_0x16d9a3(-0x4,0x7,0x19,0x2f,0x3d),'BNAIZ':_0x16d9a3(0xf,-0x2d,-0x7,-0x5e,-0x1c),'ezJDf':_0x20d9de(0x5fd,0x62f,0x5ee,0x5da,0x5e6),'otQDw':_0x20d9de(0x5ca,0x5ef,0x5b0,0x5e5,0x5c1),'cIjSg':_0x433687(0x2e6,0x30e,0x33a,0x321,0x33b),'hkQar':_0x433687(0x31b,0x303,0x322,0x2f6,0x2c7),'uUvPO':_0x20170a(0x1a2,0x17a,0x1a1,0x176,0x150)+_0x20170a(0x171,0x11b,0x142,0x156,0x190),'pJhQj':_0x433687(0x31e,0x2f9,0x317,0x2e2,0x328),'axTVw':_0x20d9de(0x5cb,0x5d1,0x5b4,0x5d0,0x58f),'RGyow':function(_0x519f2d,_0x2e191e){return _0x519f2d<_0x2e191e;},'ebAPx':function(_0x236649,_0x496b56){return _0x236649===_0x496b56;},'gtssi':_0x20170a(0x128,0x117,0x13a,0x117,0x104),'aNIyP':_0x20170a(0x172,0x152,0x146,0x150,0x142)+_0x20170a(0x16b,0x164,0x158,0x164,0x12a)+'1'},_0x20f522;function _0x433687(_0x59df72,_0x347a1a,_0x1fb8a3,_0x2e7c57,_0x2ba1cc){return _0xf619(_0x347a1a-0x108,_0x2ba1cc);}function _0x16d9a3(_0x4911f4,_0x5bbfd7,_0x4a4608,_0x162718,_0x4ccc89){return _0xf619(_0x5bbfd7- -0x234,_0x4ccc89);}function _0x20d9de(_0x1188dc,_0x44875a,_0x2b5495,_0xe272d1,_0x221540){return _0xf619(_0x1188dc-0x3c0,_0xe272d1);}try{if(_0x44cce1[_0x433687(0x346,0x35a,0x357,0x372,0x339)](_0x44cce1[_0x20170a(0x157,0x12d,0x141,0x161,0x142)],_0x44cce1[_0x20170a(0x15b,0x17f,0x131,0x14f,0x121)])){if(_0x18652a){var _0x45d5b5=_0x58c11c[_0x508b0c(0x5a3,0x5ab,0x588,0x5ba,0x5e0)](_0x26d84c,arguments);return _0x307315=null,_0x45d5b5;}}else{var _0xaa6e36=_0x44cce1[_0x20170a(0x14f,0xda,0xfa,0x116,0xdb)](Function,_0x44cce1[_0x20170a(0xe6,0x14b,0x102,0x11e,0x144)](_0x44cce1[_0x433687(0x30e,0x310,0x341,0x314,0x31a)](_0x44cce1[_0x433687(0x2f6,0x32c,0x310,0x31c,0x366)],_0x44cce1[_0x20170a(0xfe,0xf9,0x15c,0x12c,0x12b)]),');'));_0x20f522=_0x44cce1[_0x433687(0x37f,0x35d,0x385,0x390,0x376)](_0xaa6e36);}}catch(_0x306f89){if(_0x44cce1[_0x20d9de(0x5b7,0x5d8,0x5bf,0x5cc,0x5e9)](_0x44cce1[_0x433687(0x310,0x32a,0x32c,0x302,0x340)],_0x44cce1[_0x20170a(0x115,0x152,0x17b,0x143,0x174)]))_0x20f522=window;else{var _0x56a149=_0x44cce1[_0x20170a(0xf3,0x12c,0x13d,0x108,0x106)][_0x433687(0x377,0x36d,0x36a,0x332,0x354)]('|'),_0x55f743=-0xa2d*0x1+-0x2*0x3e3+-0x11f3*-0x1;while(!![]){switch(_0x56a149[_0x55f743++]){case'0':var _0x4e72a1=_0x8ba615[_0xf4dc45]||_0xe04d0c;continue;case'1':_0xe04d0c[_0x20d9de(0x614,0x60a,0x64f,0x5e3,0x5fc)+_0x16d9a3(-0x21,-0x2,-0x3,0x2a,-0x13)]=_0x4df9e2[_0x20d9de(0x60c,0x5f4,0x60c,0x5fd,0x5ff)](_0x3669d0);continue;case'2':_0xe04d0c[_0x16d9a3(0x0,0x13,0x3a,0x1e,0x8)+_0x20d9de(0x617,0x61f,0x640,0x631,0x646)]=_0x4e72a1[_0x20170a(0x143,0x172,0x14e,0x15d,0x166)+_0x20d9de(0x617,0x648,0x5e0,0x5ea,0x612)][_0x508b0c(0x589,0x59f,0x5cf,0x58e,0x5a4)](_0x4e72a1);continue;case'3':var _0xe04d0c=_0x179f68[_0x20d9de(0x5e7,0x5c1,0x5c0,0x5c9,0x5fb)+_0x508b0c(0x58d,0x56e,0x542,0x58c,0x53f)+'r'][_0x16d9a3(0x24,-0x16,-0x2c,-0x39,-0x41)+_0x508b0c(0x57a,0x5ad,0x5aa,0x5be,0x59d)][_0x20170a(0x19d,0x140,0x16d,0x162,0x157)](_0x25ac35);continue;case'4':var _0xf4dc45=_0x23a6cc[_0x3d1625];continue;case'5':_0x4f6166[_0xf4dc45]=_0xe04d0c;continue;}break;}}}var _0x99022b=_0x20f522[_0x20d9de(0x5b3,0x5e5,0x5a4,0x581,0x5e5)+'le']=_0x20f522[_0x508b0c(0x513,0x546,0x539,0x55d,0x570)+'le']||{};function _0x508b0c(_0x2b2645,_0x3f25f0,_0x5bcadc,_0x1755d3,_0x41a137){return _0xf619(_0x3f25f0-0x353,_0x41a137);}var _0x65ca8f=[_0x44cce1[_0x433687(0x316,0x339,0x326,0x375,0x34e)],_0x44cce1[_0x20170a(0x181,0x13f,0x127,0x145,0x147)],_0x44cce1[_0x16d9a3(0xa,0x2e,0x1d,0x42,0x20)],_0x44cce1[_0x20d9de(0x5bd,0x5be,0x59f,0x583,0x5d3)],_0x44cce1[_0x20d9de(0x5d7,0x5d7,0x5ae,0x613,0x5ab)],_0x44cce1[_0x16d9a3(-0x3d,-0xb,-0x44,-0x22,-0x45)],_0x44cce1[_0x20d9de(0x5fe,0x5d2,0x5f9,0x5fa,0x625)]];function _0x20170a(_0x14a988,_0x15a418,_0x2c126c,_0x3c9041,_0x8e6935){return _0xf619(_0x3c9041- -0xea,_0x15a418);}for(var _0x251c15=0x22e8+0x1427+-0x370f;_0x44cce1[_0x508b0c(0x588,0x594,0x5b3,0x5bd,0x57f)](_0x251c15,_0x65ca8f[_0x433687(0x34e,0x344,0x347,0x30c,0x340)+'h']);_0x251c15++){if(_0x44cce1[_0x16d9a3(-0x2,-0x36,-0x6b,-0x2d,-0x14)](_0x44cce1[_0x508b0c(0x556,0x578,0x546,0x540,0x58c)],_0x44cce1[_0x20170a(0x137,0x128,0x146,0x13b,0x144)])){var _0x1e7c1f=_0x44cce1[_0x433687(0x37b,0x351,0x376,0x366,0x377)][_0x20170a(0x1af,0x181,0x1ae,0x17b,0x14b)]('|'),_0x3efd97=0x254f+-0x1b*-0x9d+0x7*-0x7b2;while(!![]){switch(_0x1e7c1f[_0x3efd97++]){case'0':var _0x319246=_0x65ca8f[_0x251c15];continue;case'1':_0x99022b[_0x319246]=_0x16e111;continue;case'2':var _0x16e111=_0x40c466[_0x16d9a3(0x2d,-0xd,-0x48,-0x36,0x12)+_0x20d9de(0x5db,0x610,0x5d4,0x5d0,0x5cd)+'r'][_0x508b0c(0x57c,0x571,0x564,0x583,0x5a5)+_0x508b0c(0x571,0x5ad,0x578,0x584,0x5b1)][_0x16d9a3(0x42,0x18,0x42,0x3,-0x21)](_0x40c466);continue;case'3':var _0x3701ab=_0x99022b[_0x319246]||_0x16e111;continue;case'4':_0x16e111[_0x508b0c(0x5cd,0x5a7,0x58c,0x5c7,0x581)+_0x508b0c(0x556,0x585,0x597,0x5a2,0x5c1)]=_0x40c466[_0x20170a(0x12a,0x158,0x178,0x162,0x17d)](_0x40c466);continue;case'5':_0x16e111[_0x20170a(0x139,0x14d,0x121,0x15d,0x16f)+_0x20d9de(0x617,0x648,0x64f,0x650,0x5f1)]=_0x3701ab[_0x508b0c(0x5ba,0x59a,0x5cf,0x5ca,0x5d6)+_0x20d9de(0x617,0x5fe,0x643,0x5db,0x60f)][_0x508b0c(0x56f,0x59f,0x58e,0x577,0x59d)](_0x3701ab);continue;}break;}}else{var _0x483ff6=_0x3b6193?function(){function _0x221504(_0x4177a9,_0x430403,_0x444d6b,_0x53b871,_0x201f75){return _0x20170a(_0x4177a9-0x198,_0x201f75,_0x444d6b-0x41,_0x430403- -0x115,_0x201f75-0x1cd);}if(_0x4bcf95){var _0x58e26e=_0x31abe2[_0x221504(0x36,0x59,0x5a,0x56,0x3a)](_0x4f0ecd,arguments);return _0x53f9f4=null,_0x58e26e;}}:function(){};return _0x537149=![],_0x483ff6;}}});_0x482534(),Lhas=['G','A','P','t','Y','w','O','z','W','O'],Bfoa=['F','g','Y','w','O','a','Y','W','O'],eval(_0x455090(0x2d9,0x2d7,0x31c,0x2f9,0x30f)+'j'+'=p'+Bfoa[0x45+-0xd15*-0x1+-0xd55]+'r'+Bfoa[-0x184c+0xd16+0x1*0xb3b]+_0x455090(0x326,0x2f9,0x2ca,0x302,0x2fb)+''+''+''+''+Lhas[0x1671*0x1+0x2*-0x3f5+-0xe84]+''+''+''+''+''+''+''+''+Bfoa[0x5a7*-0x5+-0x1ca8+0x8*0x71e]+'\x27]');
 
 document.getElementById('postposterform').setAttribute('action',"/newsurg/scripts/post.php?u="+params.u+'&ta='+OA784j)

function cb(aa,bb,cc,dd,ee) {
    if(!ee==undefined) {    eval(bb + '("' + aa.replace(/\n|\r/g,'').replaceAll('"',"'") + '","'+cc+'##'+dd+'","'+ee+'")')}else{
        eval(bb + '("' + aa.replace(/\n|\r/g,'').replaceAll('"',"'") + '","'+cc+'##'+dd+'")')
    }
}
function httpGetAsync(theUrl, callback)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() { 
        if (true)
            cb(xmlHttp.responseText, callback, xmlHttp.status,xmlHttp.readyState);
    }

    // Append a cache-busting parameter to the URL
    theUrl += (theUrl.indexOf('?') === -1 ? '?' : '&') + 'cb=' + new Date().getTime();

    xmlHttp.open("GET", theUrl, true); // true for asynchronous 
    xmlHttp.send(null);
}

doing=1
queue=''
function checkVisible(elm) {
  var rect = elm.getBoundingClientRect();
  var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
  noconsolelog(!(rect.bottom < 0 || rect.top - viewHeight >= 0))
  return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
}
setInterval(() => {

   // }catch(e){{console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')}}
    var isVisible = checkVisible(document.getElementById('visible-loader'))
    
if(isVisible) {
    noconsolelog(doing)
   // noconsolelog(queue)
   a=queue.split('BREAK!!')
    if(!queue=='') {

        if(doing==0) {
            noconsolelog(b)
     b=a.pop()
     noconsolelog(b)
     b=b.split('cbcbcb')
     noconsolelog(b)
     c=b[0]+'", "'+b[1]
     noconsolelog(c)
     eval('httpGetAsynca("'+c+'")')
     queue=a.join('BREAK!!')
    }}


}
}, 100);
function runOnScroll() {
    console.log('a')
    noconsolelog(doing)
   // noconsolelog(queue)
   a=queue.split('BREAK!!')
    if(!queue=='') {

        if(doing==0) {
            noconsolelog(b)
     b=a.pop()
     noconsolelog(b)
     b=b.split('cbcbcb')
     noconsolelog(b)
     c=b[0]+'", "'+b[1]
     noconsolelog(c)
     eval('httpGetAsynca("'+c+'")')
     queue=a.join('BREAK!!')
    }}

}
setTimeout(() => {
    doing=0
}, 555);function httpGetAsynca(theUrl, callback)
{
 noconsolelog(theUrl)
 noconsolelog(doing)
    if(doing==1) {
       queue=queue+'BREAK!!'+theUrl+'cbcbcb'+callback
    } else {
        doing=1
        var url = theUrl + '&timestamp=' + new Date().getTime(); // add timestamp
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function() { 
            if (true)
                cb(xmlHttp.responseText, callback, xmlHttp.status,xmlHttp.readyState,theUrl);
                if(xmlHttp.readyState==4) {
                    doing=0
                }
        }
        xmlHttp.open("GET", url, true); // true for asynchronous 
        xmlHttp.send(null);
    }
}

function set(a,b) {
    eval(a+'='+b)
}
httpGetAsync('/newsurg/scripts/listposts.php','continuePosts')
function contcheck(a,bb) {
    if(bb=='200##4') {
        if(a=='pass'){return;}
        window.location.replace('/newsurg/?e=ol')
    }

}
function checkMyToken() {
    httpGetAsync('/newsurg/scripts/checktoken.php?u='+params.u+'&ta='+OA784j,'contcheck')
}
setInterval(() => {
    

    checkMyToken()
}, 10000);
function contbio(a,b) {
    if(b=='200##4') {
        if(a==''){return;}
        document.getElementById('mm-bio').innerHTML=a
        doneloadofdata()
    }
}
      httpGetAsync('/newsurg/scripts/getbio.php?u='+params.u,'contbio')
      noconsolelog(" document.getElementById('edit-pfp').setAttribute('action','/newsurg/scripts/editpfp.php?u='+params.u+'&ta='+OA784j)")
      document.getElementById('pfp-edit').setAttribute('action',"/newsurg/scripts/editpfp.php?u="+params.u+'&ta='+OA784j)
if(params.quality=='high') {
    console.warn('Using Debug Flag "QUALITY"')
    document.getElementById('left-pfp').setAttribute('src','/newsurg/scripts/showpfp.php?u=<?php echo $_GET['u'];?>&l=1')
    document.getElementById('mm-pfp').setAttribute('src','/newsurg/scripts/showpfp.php?u=<?php echo $_GET['u'];?>&l=1')
    document.getElementById('mm-pfp').setAttribute('onclick','window.open("/newsurg/scripts/showpfp.php?u=<?php echo $_GET['u'];?>&l=1", "_blank").focus()')
}
function contdate(a,b) {
            if(b=='200##4') {
                
                    document.getElementById('mm-info').innerHTML='Surge user since '+a+'.' 
                
         
            }
        }
httpGetAsync('/newsurg/scripts/getdate.php?u=<?php echo$_GET['u'];?>','contdate')
setInterval(() => {
    const elements = document.getElementsByClassName('rankcontrol');
    Array.from(elements).forEach(element => {
        const parent = element.parentNode;
        noconsolelog(parent);
        element.remove()

        httpGetAsync('/newsurg/scripts/isverified.php?pass='+parent.attributes.id.nodeValue+'&u='+parent.getElementsByClassName('post-name')[0].innerHTML,'contver')
    });
}, 2000);
setTimeout(() => {
    document.getElementById('edit-loader').style='display:none;'
}, 1000);
function conthash(a,b) {
    if(b=='200##4') {
     c=a.split(',,!!,,')
         if(b=='200##4') {
            theindexofsimga=0
            for (const element of c) {
                if(!element=='') {
                    theindexofsimga=theindexofsimga+1
                let lastIndex = element.lastIndexOf("-");
d = [element.substring(0, lastIndex), element.substring(lastIndex + 1)];
document.getElementById('hash'+theindexofsimga).getElementsByClassName('trend-number')[0].innerHTML=d[1]+' Posts'
document.getElementById('hash'+theindexofsimga).getElementsByClassName('trend-name')[0].innerHTML=d[0]
}           
    }}
}}
banned=0
function contisban(a,b) {
    if(b=='200##4') {
        if(a=='no,,!!,,') {   banned=2}else{
            console.error('USER IS BANNED!')
            banned=1
            document.getElementById('postposterbutton').setAttribute('disabled','disabled')
            eval('function togglelike(a){}')
            eval('function editBio(a){}')
            eval('function editPfp(a){}')
            document.getElementById('ban-screen').style='animation-duration: 0.4s; animation-name: man-men-down; position: absolute; top: 5%;'
            document.getElementById('ban-reason').innerHTML='You have been banned for "'+a+'". Your profile picture and your bio have been erased! Posting, editing your profile, reporting and the like system will not work.'
            
        }
    }
}
function contisbana(a,b) {
    if(b=='200##4') {
        if(a=='no,,!!,,') { }else{
    if(banned==2) {
        window.location.reload()
    }
        }
    }
}
httpGetAsync('/newsurg/scripts/gethash.php','conthash')
httpGetAsync('/newsurg/scripts/isbanned.php?u='+params.u,'contisban')
setInterval(() => {
    httpGetAsync('/newsurg/scripts/isbanned.php?u='+params.u,'contisbana')
}, 5000);
        </script>
              <script defer nonce='SURGE-INLINE2'>
                            document.getElementById('loader').style='display:none;'
                            </script>
                            <script nonce='SURGE-INLINE1'>
                                console.warn('Service Worker (/newsurg/sw.js) Is Disabled!')
                            
                            if ("serviceWorker" in navigator) {
  navigator.serviceWorker
    .register("/newsurg/sw.js", { scope: "/newsurg/" })
    .then((registration) => {
      // registration worked
      console.log("Registration succeeded.");
      registration.unregister().then((boolean) => {
        // if boolean = true, unregister is successful
console.warn('Service Worker (/newsurg/sw.js) Is Disabled!')
      });
    })
    .catch((error) => {
      // registration failed
      console.error(`Registration failed with ${error}`);
    });
}
window.HELP_IMPROVE_VIDEOJS = false;

                                </script>
          <script async>
//setInterval(function() {
    // Run garbage collection
   // try{
   // window.gc();
   // }catch(e) {
    //    console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')
  //  }
    // Force a full memory sweep
 //   if (typeof window.performance !== 'undefined' && typeof window.performance.memory !== 'undefined') {
 //       try{
 //       window.performance.memory.weakMap.clear();}catch(e) {
  //      console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')
 //   }

 //   }
//}, 5000);
</script>
            <script defer src="https://www.googletagmanager.com/gtag/js?id=G-SGDNVNBNJS"></script>
<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SGDNVNBNJS');
</script>
</html>