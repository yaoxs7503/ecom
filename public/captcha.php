<?php
   if(!isset($_SEESION)){
     session_start();
   }

   $_SESSION['check_word']='';
  //  设置定义为图片
   header("Content-type:image/png");
  imgCode(5,120,30); 
  // imgCode(5,200,200); 

  function imgCode($numbers,$width,$high){
    $str="23456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNOPRSTUVWXYZ";
    $code='';
    for ($i=0; $i < $numbers; $i++) { 
      $code.=$str[mt_rand(0,strlen($str)-1)];
    }
    $_SESSION['check_word']=$code;

    // $image=imagecreate($width,$high);
    $image=imagecreatetruecolor($width,$high);
    // 分配图片的颜色
    $black=imagecolorallocate($image,mt_rand(0,200),mt_rand(0,200),mt_rand(0,200));
    $border_color=imagecolorallocate($image,21,106,235);
    $backgroud_color=imagecolorallocate($image,235,236,237);


    imagefilledrectangle($image,0,0,$width,$high,$backgroud_color);
    imagerectangle($image,0,0,$width-1,$high-1,$border_color);
    imagefill($image,0,0,$black);
  for ($i=0; $i <80 ; $i++) { 
    imagesetpixel($image,rand(0,$width),rand(0,$high),$black);
  }  
  $strx=rand(3,8);
  for ($i=0; $i <$numbers ; $i++) { 
    $strpos=rand(1,6);
    imagestring($image,5,$strx,$strpos,substr($code,$i,1),$black);
    $strx+=rand(10,30);
  }
    imagepng($image);
    imagedestroy($image);
  }
?> 
