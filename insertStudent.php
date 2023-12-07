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
 

    <title>회원관리 사이트</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">	
    <!-- Custom styles for this template -->	
    <link href="css/reset_responsive.css" rel="stylesheet">    
	<link href="css/style.css" rel="stylesheet">
	<link href="css/dropdown.css" rel="stylesheet">
    <link href="css/join.css" rel="stylesheet">
	<!--   -->
  </head>
  <body>


<!--타이틀자리 -->
<div class="main_footer_2">
    <div class="container-fluid">
        <div class="row">
              <div class="ft_005">
			  <a href="tc_login_ok.php"><H2><p>Green HighScool</p></H2></a>
                </div>
        </div>
    </div>
</div>


<!-- 헤더 네비게이션 -->
	 <nav class="navbar navbar-expand-lg navbar-dark" style="background:#005b91; color:#fff;">
	 <div class="dropdown">
    <button class="dropdown-button">학생 조회</button>
    <div class="dropdown-content">
			<a href="searchstudent.php">학생 조회</a>
			<a href="insertStudent.php">학생 추가</a>
		</div>
	</div>
    <div class="dropdown">
		<button class="dropdown-button">내 정보</button>
		<div class="dropdown-content">
			<a href="pwCheck.php">정보 변경</a>
			<a href="pwCheck1.php">회원 탈퇴</a>
			<a class="nav-link" href="logout.php"  style="">로그아웃</a>
		</div>
	</div>
	
	</div>
      <div class="container">

    </nav>

<div class="container">
		 <div id="">
          <div class="member_list_section">
            
				<div id="mainbody">
						<form method="POST" action="insert.php" >
							<table>
								<tr>
									<th><span>*</span>학번</th>
									<td>
									<div class="id">
										<input type="text" size="20" id='joinId' name="num">
										
									</div>
									</td>
								</tr>

								<tr>
									<th><span>*</span>이름</th>
									<td>
									<div class="name">
										<input type="text" size="20" name="name"><br>
									</div>
									</td>
								</tr>

								<tr>
									<td colspan="2">
									<div>
										&emsp;학생을 추가 하시겠습니까?
										<span class="btn">
											<input type="submit" value="추가하기">&nbsp;
										</span>
									</div>
									</td>
								</tr>
							</table>
						</form>

				</div>
		</div>
   	  </div>
      <!-- 게시판영역 종료-->
	</div>
<!-- 풋터 -->

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


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
