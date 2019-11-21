<?php

session_start();

$letter = range("A","Z");
shuffle($letter);
$captchaString = "";
for ($i=0; $i<5 ;$i++) {
  $captchaString .= $letter[$i];
}

$_SESSION["captcha"] = $captchaString;


$im = imagecreate(200,50);
imagecolorallocate($im, mt_rand(0,200), mt_rand(0,200), mt_rand(0,200));

$posX = 10;
$fonts = "C:/Windows/Fonts/tahomabd.ttf";

for ($i=0, $posX = 10; $i<5;$i++, $posX += 35){
  $color = imagecolorallocate($im,mt_rand(0,200),mt_rand(0,200),mt_rand(0,200));
  $size = mt_rand(10,35);
  $angle = mt_rand(-30,30);
  imagettftext($im,$size,$angle,$posX,35,$color, $fonts, $captchaString[$i]);
  imagearc($im,mt_rand(0,200),mt_rand(0,50),mt_rand(50,200),mt_rand(50,200),0,0,$color);
  imageline($im, 0, mt_rand(0, 50),200, mt_rand(0,50),$color);
}

header('Content-Type: image/png');
imagepng($im);

// <img src="test.png" alt="#">
?>
