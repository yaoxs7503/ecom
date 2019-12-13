<?php
if(!isset($_SESSION)){
  session_start();
}

if((!empty($_SESSION['check_word']))&&(!empty($_POST['check_word']))){
  if($_SESSION['check_word']==$_POST['check_word']){
    header('content-type:text/html;charset=utf-8');
    echo '<p><a href="./captcha_index.php">输入正确</a></p>';
    echo '<meta http-equiv="refresh" content="1; url=./captcha_index.php">';
    $_SESSION['check_word']='';
    exit();
  }else{
    echo '<p><a href="./captcha_index.php">输入不正确</a></p>';
    echo '<meta http-equiv="refresh" content="1; url=./captcha_index.php">';

  }
}

?>