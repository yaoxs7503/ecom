<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php图形验证码</title>
  <script>
  function refresh_code(){
    document.getElementById("imgcode").src="captcha.php";
  } 
  </script>
</head>
<body>
 <form action="./checkcode.php" method="post">
 <p>请输入下列图样:</p>
 <p><img src="captcha.php" id="imgcode" onclick="refresh_code()" alt=""><br />
 点击图片可以更换验证码
 </p>
 <input type="text" name="check_word" size="10" maxlength="10">
 <input type="submit" name="Submit" value="送出">
 </p>
 </form> 
</body>
</html>