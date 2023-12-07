<?php
    session_start(); // 세션시작

    $id = $_SESSION['id'];
    //데이타베이스 정보
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "qwer";
    $db_name = "student_db";
    $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
    if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

    //form에서 전달받은 POST 데이타

    //쿼리문 실행
    $query = "select * from score_tb where id='$id'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);
   
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
    <link href="css/score.css" rel="stylesheet">
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
<blockquote>

<div class="hline top"></div>
  <h1><strong>내 성적 확인</strong></h1>
  <label>● 국어 : </label>
  <label><?=$row['kor']?>점</label><br>
  <label>● 영어 : </label>
  <label><?=$row['eng']?>점</label><br>
  <label>● 수학 : </label>
  <label><?=$row['mat']?>점</label><br>
  <label>● 사회 : </label>
  <label><?=$row['sci']?>점</label><br>
  <label>● 과학 : </label>
  <label><?=$row['soc']?>점</label><br>
  <label>● 총점 : </label>
  <label><?=$row['tot']?>점</label><br>
  <label>● 평균 : </label>
  <label><?=$row['avg']?>점</label><br>
<div class="hline bottom"></div>


</blockquote>
    



<div class="main_footer_2" style="position: absolute; bottom: 0; width: 100%">
    <div class="container-fluid" style="">
        <div class="row">
              <div class="ft_005">
                    <p>Copyright © Genomed. All right reserved.</p>
                </div>
        </div>
    </div>
</div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>