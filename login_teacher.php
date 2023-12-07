<?php
//세션 데이터에 접근하기 위해 세션 시작
if (!session_id()) {
  session_start();
}
?>


<!DOCTYPE html>
<html lang="ko">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- //구글폰트 -->
 

    <title>로그인</title>
    <link href="css/login1.css" rel="stylesheet">
	<!--   -->
  </head>
  <body>
  <form id="Login" action="login_tc_ok.php" method="post">
  <h2><span class="entypo-login"><i class="fa fa-sign-in"></i></span> Login</h2>
  <button class="submit"><span class="entypo-lock"><i class="fa fa-lock"></i></span></button>
  <span class="entypo-user inputUserIcon">
     <i class="fa fa-user"></i>
   </span>
  <input type="text" class="user" placeholder="ursername" name='id'/>
  <span class="entypo-key inputPassIcon">
     <i class="fa fa-key"></i>
   </span>
  <input type="password" class="pass"placeholder="password" name='pw'/>
  <a href="join_teacher.php"><input type="button" class="entypo-join" value="Join"></a>
</form>
  </body>

</html>
