<?php
    session_start(); // 세션시작
    //데이타베이스 정보
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "qwer";
    $db_name = "student_db";
    $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
    if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

    $id = $_SESSION['id'];

    $query = "select * from student_tb where id='$id'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);

   
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- //구글폰트 -->
 

    <title>내 정보 변경</title>

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
<div id="sub1_2_information_area">
          <div class="sub1_2_info_section">
            <h2 style="margin-left:47%; margin-top: 1%;">정보 변경</h2>
            <div class="container">

          <div class="member_list_section">
            
				<div id="mainbody">
						<form method="POST" action="st_info_update.php" >
							<table>
								<tr>
									<th>학번</th>
									<td>
									<div class="id">
										<input type="text" size="20" id='joinId' name="id" value="<?=$row['id']?>" readonly style="background-color: #e1e4ee">
									</div>
									</td>
								</tr>
                                <tr>
									<th>변경할 비밀번호</th>
									<td>
									<div class="pw">
										<input type="password" size="20" name="pw"><br>
									</div>
									</td>
								</tr>
								<tr>
									<th>이름</th>
									<td>
									<div class="name">
										<input type="text" size="20" name="name" value="<?=$row['name']?>">
									</div>
									</td>
								</tr>
								<tr>
									<th>연락처</th>
									<td>
									<div class="ph">
										<input type="text" size="20" name="ph" value="<?=$row['ph']?>"> 
										
									</div>
									</td>
								</tr>
								<tr>
									<th>부모님 연락처</th>
									<td>
									<div class="parentph">
										<input type="text" size="20" name="parentph" value="<?=$row['parentph']?>">
										
									</div>
									</td>
								</tr>
								<tr>
									<th>주소</th>
									<td>
									<div class="addr">
										<input type="text" name="addr" value="<?=$row['addr']?>"> 
										
									</div>
									</td>
								</tr>
                                <tr>
									<th>이메일</th>
									<td>
									<div class="email">
										<input type="text" size="20" name="email" value="<?=$row['email']?>">
										
									</div>
									</td>
								</tr>

								<tr>
									<td colspan="2">
									<div>
										&emsp;정보를 변경 하시겠습니까?
										<span class="btn">
											<input type="submit" value="변경하기">&nbsp;
										</span>
									</div>
									</td>
								</tr>
							</table>
						</form>

				</div>
		</div>
   	  </div>
          
<!-- 풋터 -->

<!-- 하단 맨 끝 -->
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