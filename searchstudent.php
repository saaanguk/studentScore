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
    $query = "select * from teacher_tb where id='$id'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);


    if($id==$row['id']){ // id와 pw가 맞다면 login

        $grade = $row['grade'];
        $ban = $row['ban'];
     
     }else{ // id 또는 pw가 다르다면 login 폼으로
      
        echo "<script>window.alert('아이디 확인 불가');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
        echo "<script>location.href='login_teacher.php';</script>";
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
    <link href="css/table.css" rel="stylesheet">
    
    
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
    <table>
    <thead>
    <tr>
        <th>학번</th>
        <th>이름</th>
        <th>국어</th>
        <th>영어</th>
        <th>수학</th>
        <th>사회</th>
        <th>과학</th>
        <th></th>

    </tr>
    </thead>
  
        <tbody>
        <?php	
		    $query = "select * from score_tb where grade='$grade' and ban='$ban' order by id asc";
            $result = mysqli_query($connect, $query); 
            $firstrow = mysqli_fetch_array($result);
            mysqli_data_seek($result, 0);
			while($datarow = $result->fetch_assoc())
			{ 
                $id = $firstrow['id'];
			?>   
        <tr>
            <td><a href="viewStudent.php?id=<?=$datarow['id']?>"><?=$datarow['id']?></a></td>
            <td><?=$datarow['name']?></td>
            <td><?=$datarow['kor']?></td>
            <td><?=$datarow['eng']?></td>
            <td><?=$datarow['mat']?></td>
            <td><?=$datarow['soc']?></td>
            <td><?=$datarow['sci']?></td>
            <td><a href="inputScore.php?id=<?=$datarow['id']?>">성적 입력</a></td>
            
        </tr>
   
        <?php
		}
		?>
    </tbody>
    
</table>
    
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