<?php
if(file_get_contents('C:/xampp/htdocs/newsurg/data/misc/surge.active')=='0'){
    //http_response_code\(500\);
    echo "Surge is not available!";
    die();
}
?><?php

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
        
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval'; img-src 'self' data:;media-src data: 'self';">
<title>Surge | Home - Welcome To Surge! Have Fun</title>
<meta name="surge:pid" content="983aUIDnajd903294279csyh8">
<meta name="theme-color" content="#80BFFF">
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
                </style>
                        <link rel="stylesheet preload" type="text/css" href="/newsurg/media/code/css.css" />
    <body>
        <div id='loader' style='position:absolute;top:0px;left:0px;right:0px;bottom:0px;width:100%;height:100%;background-color:#aaa;z-index:99999999999999999;'><span class="loader"></span><span surge_id='loader_ltxt'>Loading. Please wait.</span></div>
    <div id='header' class='shadow'><img alt='surge logo without text' title='surge logo without text' src='/newsurg/media/img/min/logo-only.webp' id='logo-in-header' width='82px' height='72.72727273px'>
<div id='header-elements'><a title='discover' class='header-element link' hreflang='en' referrerpolicy="no-referrer" href='/newsurg/discover'>discover</a><a title='safety' class='header-element link' hreflang='en' referrerpolicy="no-referrer" href='/newsurg/safety'>safety</a><a class='header-element link' title='support' hreflang='en' referrerpolicy="no-referrer" href='/newsurg/support'>support</a></div>
</div>
<div id='left-section' class='section no-scroll-back'>

    <img alt='User Profile Picture' title='User Profile Picture' id='left-pfp' width='70px' height='70px' src='/newsurg/scripts/showpfp.php?u=<?php echo $_GET['u']; ?>&l=0'>
    <span id='left-welcome'>Hello, </span> <a id='left-username' class='link ripple' title='Manage My Account' href='javascript:manageMyAccount();'><?php echo $_GET['u']; ?></a>
    <div id='left-dms' class='no-scroll-back'>
        <span id='dms-title'>Messages</span><div id='dm-name-container'>


</div>
        <div id='msgbr'></div>
        <div id='cover1'></div>
        <div id='cover2'></div>
        
        <div id='msgbr2'></div>
<input id='dm-user' name="user" oninput='checktextdm()' autocomplete="off" autocapitalize="on" placeholder="@username" minlength="4" required>
        <button id='dm-send' class='ripple' onclick='openCreateDm()' type='submit' disabled value='Open'>Open</button>
        </div>
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
<div id='visible-loader'><span id='visible_loader_text' style=''>You have reached the end.</span></div>



</div>
</div>
<div id='right-section' class='section no-scroll-back'>
    <div id='right-trending' class='no-scroll-back'>
    <span id='trend-title'>Trending</span><div id='trendbr'>
    <div class='trend ripple' onclick='openTrend("trendname")'><span class='trend-hash'>#</span><span class='trend-name'>trend</span><span class='trend-number'>123 Posts</span></div>
    <div class='trend ripple' onclick='openTrend("trendname")'><span class='trend-hash'>#</span><span class='trend-name'>trend</span><span class='trend-number'>123 Posts</span></div>
    <div class='trend ripple' onclick='openTrend("trendname")'><span class='trend-hash'>#</span><span class='trend-name'>trend</span><span class='trend-number'>123 Posts</span></div>

    </div>
    </div>
</div>
<div style id='notify' onclick><span id='notify_title'>Accounts</span><hr id='msgbr3'><img id='notify_img' width='90px' height='90px' style='display:none;'><span id='notify_text'>Deleting Surge Account Data! Please Wait.</span><span id='edit-loader'></span></div>
   
<div id='manage-menu' style='position:absolute;top:-100%;'>
<span id='mm-close' class='ripple' onclick='document.getElementById("manage-menu").style="position:absolute;top:-100%;"'> X </span>
<img onclick="window.open('/newsurg/scripts/showpfp.php?l=1&u=<?php echo $_GET['u'];?>', '_blank').focus();
" alt='user profile picture' title='User Profile Picture' src='/newsurg/scripts/showpfp.php?l=1&u=<?php echo $_GET['u'];?>' width='200px' height='200px' id='mm-pfp'>
<div id='mm-pfp-effect'></div>
<span id='mm-name'><?php echo $_GET['u'];?></span>
<span id='mm-bio'>&#128075; Hi. I am using Surge!</span>
<input oninput='updatebio()' type='text' autocomplete="off" autocapitalize="on" placeholder='&#128075; Hi. I am using Surge!' style='display:none;' autocomplete='none' id='bio-edit'></input>

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
<span id='vm-name'><?php echo $_GET['u'];?></span>
<span id='vm-bio'>&#128075; Hi. I am using Surge!</span>
<span id='vm-info'>Surge user since 01/01/2023.</span>
<span id='vm-load'></span>
</div>






</body>

    <script async>

        </script>
    
                        <script defer>
                            document.getElementById('loader').style='display:none;'
                            </script>
                            <script>

setTimeout(() => {
    window.location.reload()
}, 5000);
                                </script>
          
</html>

<?php
unlink('C:/xampp/htdocs/newsurg/data/user/pfp/data/'.$_GET['u'].'.pfp');
unlink('C:/xampp/htdocs/newsurg/data/user/date/'.$_GET['u'].'.date');
unlink('C:/xampp/htdocs/newsurg/data/user/bio/'.$_GET['u'].'.bio');
unlink('C:/xampp/htdocs/newsurg/data/tempaccess/'.$_GET['u'].'.pass');
unlink('C:/xampp/htdocs/newsurg/data/login/'.$_GET['u'].'.pass');


?>