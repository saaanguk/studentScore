<? $body = nl2br($body);  ?>
<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "qwer";
$db_name = "web_db";
$connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력
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
                    <a href="index.html"><H2><p>Green HighScool</p></H2></a>
                </div>
        </div>
    </div>
</div>


<div class="container">
		 <div id="">
          <div class="member_list_section">
            
				<div id="mainbody">
						<form method="POST" action="join_st_ok.php" >
							<table>
							<caption>(*)표시는 <strong>필수입력</strong> 사항입니다.</caption>
								
                                <tr>
									<th><span>*</span>학번</th>
									<td>
									<div class="id">
										<input type="text" size="20" id='joinId' name="id">
                                        <input type="button" value="학번확인" id='check' onclick="idCheck()">
										<br>
										-<strong>학번</strong>을 입력해주십시오.
									</div>
									</td>
								</tr>

								<tr>
									<th><span>*</span>비밀번호</th>
									<td>
									<div class="pw">
										<input type="password" size="20" name="pw"><br>
										-<strong>영문자, 숫자, 특수문자</strong>의 조합,<br>
										&emsp;<strong>8자리 이상</strong>으로 이루어져야 합니다.
									</div>
									</td>
								</tr>

								<tr>
									<th><span>*</span>비밀번호 확인</th>
									<td>
									<div class="pw">
										<input type="password" size="20" name="pw_r">
									</div>
									</td>
								</tr>
								<tr>
									<th><span>*</span>이름</th>
									<td>
									<div class="major">
										<input type="text" name="name" value=""> 
										
									</div>
									</td>
								</tr>
								<tr>
									<th><span>*</span>연락처</th>
									<td>
									<div class="major">
										<input type="text" name="hp" value=""> 
										
									</div>
									</td>
								</tr>
                                <tr>
									<th><span>*</span>부모님 연락처</th>
									<td>
									<div class="major">
										<input type="text" name="pt_hp" value=""> 
										
									</div>
									</td>
								</tr>
                                <tr>
									<th><span>*</span>주소</th>
									<td>
									<div class="major">
										<input type="text" name="addr" value=""> 
										
									</div>
									</td>
								</tr>

								<tr>
									<th>이메일</th>
									<td>
									<div class="email">
										<input type="text" size="15" name="email">
										@
										<select name="email_domain" >
											<option value="1">네이버</option>
											<option value="2">구글</option>
											<option value="3">다음</option>
										</select>
									</div>
									</td>
								</tr>

								<tr>
									<td colspan="2">
									<div>
										&emsp;회원가입을 하시겠습니까?
										<span class="btn">
											<input type="submit" value="가입하기">&nbsp;
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
<!-- 관리자 로그인 -->
<!-- 하단 맨 끝 -->
<div class="main_footer_2" >

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

<script>
	function idCheck() {
        var id = document.getElementById('joinId').value;
        location.href = "studentNo.php?id="+id;
    }
   
</script>
