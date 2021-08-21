<?php
session_start();
$num=rand(10000,999999);
$_SESSION['captchaNum']=$num;
$img=imagecreatetruecolor(200,100);
$bgcolor=imagecolorallocate($img,rand(0,200),rand(10,150),rand(20,255));
$textcolor=imagecolorallocate($img,rand(0,200),rand(10,150),rand(20,255));
imagefill($img,0,0,$bgcolor);
imagestring($img, rand(1,40), rand(1,40),rand(1,40),$num,$textcolor);
header('Content-type:image/png');
imagepng($img);
imagedestroy($img);

?>
