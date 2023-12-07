<?php
    session_start(); // 세션시작
    //데이타베이스 정보
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "qwer";
    $db_name = "student_db";
    $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
    if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

    $id = $_GET['id'];

    $query = "select * from score_tb where id='$id'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);

    

    if($id==$row['id']){ // id와 pw가 맞다면 login
        $name = $row['name'];
        $kor = $row['kor'];
        $mat = $row['mat'];
        $eng = $row['eng'];
        $sci = $row['sci'];
        $soc = $row['soc'];

        
     
     }else{ // id 또는 pw가 다르다면 login 폼으로
      
        echo "<script>window.alert('학번이 조회가 안됩니다.');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
        echo "<script>history.back();</script>";
     
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
<div id="sub1_2_information_area">
          <div class="sub1_2_info_section">
            <h2 style="margin-left:47%; margin-top: 1%;">성적 입력</h2>
            <div class="container">

          <div class="member_list_section">
            
				<div id="mainbody">
						<form method="POST" action="score.php" >
							<table>
								<tr>
									<th>학번</th>
									<td>
									<div class="id">
										<input type="text" size="20" id='joinId' name="id" value="<?=$id?>" readonly style="background-color: #e1e4ee">
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
									<th>국어</th>
									<td>
									<div class="score">
										<input type="text" size="20" name="kor" value="<?=$row['kor']?>"> 
										
									</div>
									</td>
								</tr>
								<tr>
									<th>영어</th>
									<td>
									<div class="score">
										<input type="text" size="20" name="eng" value="<?=$row['eng']?>">
										
									</div>
									</td>
								</tr>
								<tr>
									<th>수학</th>
									<td>
									<div class="score">
										<input type="text" name="mat" value="<?=$row['mat']?>"> 
										
									</div>
									</td>
								</tr>
								<tr>
									<th>사회</th>
									<td>
									<div class="score">
										<input type="text" size="20" name="soc" value="<?=$row['soc']?>">
										
									</div>
									</td>
								</tr>
                                <tr>
									<th>과학</th>
									<td>
									<div class="score">
										<input type="text" size="20" name="sci" value="<?=$row['sci']?>">
										
									</div>
									</td>
								</tr>
								<tr>
									<td colspan="2">
									<div>
										&emsp;성적을 입력 하시겠습니까?
										<span class="btn">
											<input type="submit" value="입력 하기">&nbsp;
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


                           