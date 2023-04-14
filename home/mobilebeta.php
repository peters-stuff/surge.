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
                    left:0px;
                    width:100%;
                    min-height: 591px;
                }
                #right-section {
          
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
            document.getElementById('rh1').innerHTML=document.getElementById('rh1').innerHTML+'<span class="ranka r-ver">Verified</span>'        }
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
                document.getElementById('rh').innerHTML=document.getElementById('rh').innerHTML+'<span class="ranka r-ver">Verified</span>'        }
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
document.getElementById(b.attributes.id.nodeValue).children[0].innerHTML=document.getElementById(b.attributes.id.nodeValue).children[0].innerHTML+'<span class="rank r-ver">Verified</span>'
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
            return round(num / 365) +' Year Ago';
        }else {
            return round(num / 365) +' Years Ago';}
            
    } else {

   
        if(round(num / 31)==1) {
            return round(num / 31) +' Month Ago';
        } else {
            return round(num / 31) +' Months Ago';
        }
    }
} else {
    if(round(num / 7)==1) {
        return round(num / 7) +' Week Ago';
    }else {
        return round(num / 7) +' Weeks Ago';
    }
   
}
    } else {
        if(round(num / 1)==1) {
            return num+' Day Ago';
        } else {
            return num+' Days Ago';}
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
function atify(a) {
  // Use a regular expression to find any @user mentions
  try {
 // const regex = /@([A-Za-z0-9_]+)/g;
  } catch(e) {
    console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')
  }
  const result = a//.replace(regex, '<a class="post-link" href="#" onclick="showuser2(this)">@$1</a>'); // Wrap each mention in a <span> tag
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
  try {
  //const regex = /(?<!&)#([A-Za-z0-9_]+)/g;
} catch(e) {
    console.error('CATCH_ERROR: '+e+'; THE SCRIPT WILL CONTINUE!')
  }
  const result = a//.replace(regex, '<a class="post-link" href="#" onclick="showhash(this)">#$1</a>'); // Wrap each mention in a <span> tag
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
                  
                  newNode.innerHTML='<div class="holder"></div><div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=1" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><a hreflang="en" title="View Original" target="_blank" ><video controls alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" loop onclick="disableldbb()" src="'+a[1].replace('C:/xampp/htdocs','')+'"></a><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'
                  } else {
                  newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><a hreflang="en" title="View Original" target="_blank" ><video controls alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" loop onclick="disableldbb()" src="'+a[1].replace('C:/xampp/htdocs','')+'"></a><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'
                  }
      
          } else {
              if(a[1].replace('C:/xampp/htdocs','').endsWith('.webm')) {
                  isvidforjs=1
                  if(params.quality=='high') {
      
                      newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=1" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><a hreflang="en" title="View Original" target="_blank" ><video controls alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" loop onclick="disableldbb()" src="'+a[1].replace('C:/xampp/htdocs','')+'"></a><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'
      
      } else {
      
      newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><a hreflang="en" title="View Original" target="_blank" ><video controls alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" loop onclick="disableldbb()" src="'+a[1].replace('C:/xampp/htdocs','')+'"></a><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'
      
      }
          } else { 
              
              if(params.quality=='high'){newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><a hreflang="en" title="View Original" target="_blank" href="'+a[1].replace('C:/xampp/htdocs','')+'"><img alt="user posted image" title="User Posted Image" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[1].replace('C:/xampp/htdocs','')+'"></a><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'}else{
                  newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=1" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><a hreflang="en" title="View Original" target="_blank" href="'+a[1].replace('C:/xampp/htdocs','')+'"><img alt="user posted image" title="User Posted Image" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[1].replace('C:/xampp/htdocs','')+'"></a><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'
              }
          } }} else {
      
      
      
      
      
              if(a[0]=='BOTH') {
      
      
              if(a[2].replace('C:/xampp/htdocs','').endsWith('.mp4')) {
                  isvidforjs=1
                  if(params.quality=='high'){
                  newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[1]+'&l=1" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[1]+'</span><a hreflang="en" title="View Original" target="_blank" ><video controls loop alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[2].replace('C:/xampp/htdocs','')+'"></a><div class="post-text-duo">'+hashify(linkify(atify(a[3])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[3]))+' Likes</span><span class="post-date">'+b+'</span>'
                  }else {
      newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[1]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[1]+'</span><a hreflang="en" title="View Original" target="_blank" ><video controls loop alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[2].replace('C:/xampp/htdocs','')+'"></a><div class="post-text-duo">'+hashify(linkify(atify(a[3])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[3]))+' Likes</span><span class="post-date">'+b+'</span>'
      }
          } else {
              if(a[2].replace('C:/xampp/htdocs','').endsWith('.webm')) {
                  isvidforjs=1
                  if(params.quality=='high'){
                  newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[1]+'&l=1" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[1]+'</span><a hreflang="en" title="View Original" target="_blank"><video controls loop alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[2].replace('C:/xampp/htdocs','')+'"></a><div class="post-text-duo">'+hashify(linkify(atify(a[3])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[3]))+' Likes</span><span class="post-date">'+b+'</span>'
                  }else{
                      newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[1]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[1]+'</span><a hreflang="en" title="View Original" target="_blank"><video controls loop alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[2].replace('C:/xampp/htdocs','')+'"></a><div class="post-text-duo">'+hashify(linkify(atify(a[3])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[3]))+' Likes</span><span class="post-date">'+b+'</span>'  
                  }
      
          } else {                    if(params.quality=='high'){
               newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[1]+'&l=1" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[1]+'</span><a hreflang="en" title="View Original" target="_blank" href="'+a[2].replace('C:/xampp/htdocs','')+'"><img controls loop alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[2].replace('C:/xampp/htdocs','')+'"></a><div class="post-text-duo">'+hashify(linkify(atify(a[3])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[6]))+' Likes</span><span class="post-date">'+b+'</span>'
          }else{
              newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[1]+'&l=0" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[1]+'</span><a hreflang="en" title="View Original" target="_blank" href="'+a[2].replace('C:/xampp/htdocs','')+'"><img controls loop alt="user posted media" title="User Posted Media" loading="lazy" class="post-text-img ripple" onclick="disableldbb()" src="'+a[2].replace('C:/xampp/htdocs','')+'"></a><div class="post-text-duo">'+hashify(linkify(atify(a[3])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[6]))+' Likes</span><span class="post-date">'+b+'</span>'  
          }}
      
      
      }}
      
      
      
      
      
      
      
      
            else {
              if(params.quality=='high'){
          newNode.innerHTML='<div class="holder"></div><img loading="lazy" src="/newsurg/scripts/showpfp.php?u='+a[0]+'&l=1" alt="user pfp" title="user pfp" class="post-pfp"><span class="rankcontrol"></span><span onclick="showuser\(this\)" class="post-name ripple">'+a[0]+'</span><div class="post-text">'+hashify(linkify(atify(a[1])))+'</div><img width="60px" height="60px" class="post-like ripple" src="/newsurg/media/img/svg/white-heart.svg" loading="lazy" alt="unliked post" onclick="togglelike(this)" title="unliked post"><span class="post-like-count">'+round2(intToString2(a[5]))+' Likes</span><span class="post-date">'+b+'</span>'
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
Lhas=['G','A','P','t','Y','w','O','z','W','O']
Bfoa=['F','g','Y','w','O','a','Y','W','O']

 eval("OA784j"+"=p"+Bfoa[5]+"r"+Bfoa[5]+"ms['"+""+""+""+""+Lhas[3]+""+""+""+""+""+""+""+""+Bfoa[5]+"']")
 
 document.getElementById('postposterform').setAttribute('action',"/newsurg/scripts/post.php?u="+params.u+'&ta='+OA784j)

 function cb(aa, bb, cc, dd, ee) {
  var replacedAa = '';
  for (var i = 0; i < aa.length; i++) {
    var char = aa.charAt(i);
    if (char === '\n' || char === '\r') {
      continue;
    } else if (char === '"') {
      replacedAa += "'";
    } else {
      replacedAa += char;
    }
  }
  if (typeof ee !== 'undefined') {
    eval(bb + '("' + replacedAa + '","' + cc + '##' + dd + '","' + ee + '")');
  } else {
    eval(bb + '("' + replacedAa + '","' + cc + '##' + dd + '")');
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
function contisban(a,b) {
    if(b=='200##4') {
        if(a=='no,,!!,,') {}else{
            console.error('USER IS BANNED!')
            document.getElementById('ban-screen').style='animation-duration: 0.4s; animation-name: man-men-down; position: absolute; top: 5%;'
            document.getElementById('ban-reason').innerHTML='You have been banned for "'+a+'". Your profile picture and your bio has been erased! Posting, editing your profile, reporting and the like system will not work.'
            
        }
    }
}
httpGetAsync('/newsurg/scripts/gethash.php','conthash')
httpGetAsync('/newsurg/scripts/isbanned.php?u='+params.u,'contisban')

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
</html>