<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- //구글폰트 -->
 

    <title>회원관리 사이트</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">	
    <!-- Custom styles for this template -->	
    <link href="css/reset_responsive.css" rel="stylesheet">    
	<link href="css/style.css" rel="stylesheet">
	<link href="css/dropdown.css" rel="stylesheet">
	<!--   -->
  </head>
  <body>


<!--타이틀자리 -->
<div class="main_footer_2">
    <div class="container-fluid">
        <div class="row">
              <div class="ft_005">
              <a href="st_login_ok.php"><H2><p>Green HighScool</p></H2></a>
                </div>
        </div>
    </div>
</div>


<!-- 헤더 네비게이션 -->
	 <nav class="navbar navbar-expand-lg navbar-dark" style="background:#005b91; color:#fff;">
	 <div class="dropdown">
    <button class="dropdown-button">성적 조회</button>
    <div class="dropdown-content">
			<a href="scoresearch.php">성적 조회</a>
			
		</div>
	</div>
    <div class="dropdown">
		<button class="dropdown-button">내 정보</button>
		<div class="dropdown-content">
			<a href="pwCheck2.php">정보 변경</a>
			<a href="pwCheck3.php">회원 탈퇴</a>
            <a class="nav-link" href="logout.php"  style="">로그아웃</a>
		</div>
	</div>
      <div class="container">

    </nav>
<!--//네비게이션 종료-->
<!-- 회원목록-->
<div class="">
 
	<div class="container">
		 <div id="">
    		<img src="img/student.png" alt="관리자 로그인" style="width: 40%; float: left; margin-top: 10%; margin-left: 30%;">
		</div>
   	  </div>
	</div>
</div>
<!-- 하단 맨 끝 -->
<div class="main_footer_2" style="position: absolute; bottom: 0;">

    <div class="container-fluid" style="">
        <div class="row">
              <div class="ft_005">
                    <p>Copyright © Genomed. All right reserved.</p>
                </div>
        </div>
    </div>

</div>

  </body>

</html>
