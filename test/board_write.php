<?php
    $con = mysqli_connect("localhost", "root", "qwer", "php_db");
    mysqli_query($con,'SET NAMES utf8');	
	
//세션 데이터에 접근하기 위해 세션 시작
if (!session_id()) {
	session_start();
  }


  $idx = $_GET['idx'];                                             
  $sql = "select * from board where idx ='$idx'"; 
  $result = mysqli_query($con, $sql); 
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
    <link href="css/board.css" rel="stylesheet">
	<link href="css/submenu2.css" rel="stylesheet">
	<link href="css/border.css" rel="stylesheet">
	<!--   -->
  </head>
  <body>


<!--타이틀자리 -->
<div class="main_footer_2">
    <div class="container-fluid" style="">
        <div class="row">
              <div class="ft_005">
                    <H2><p>게시판</p></H2>
                </div>
        </div>
    </div>
</div>


<!-- 본문 -->
<div class="container">	
	


	
	<!-- 게시판 쓰기 -->
	
	<form action="write_ok.php" enctype="multipart/form-data" method="post">
	
	<div id="board_write">
		<table>
			<colgroup>
				<col width="20%">
				<col>
			</colgroup>

			 
			<tbody>
				<tr>
					<th>작성자</th>					
					<td><input type="text" name="name" class="form-control" value="" detect="" detect-check="true"></td>
					
				</tr>
				
				
				
				<tr>
					<th>제목</th>
					<?php if($answer==1) { ?>
					<td><input type="text" name="title" id="subject" class="form-control" value="ㄴ[ <?=$subject?> ]의 답변" detect="" detect-check="true"></td>
					<?php } else { ?>
					<td><input type="text" name="title" id="subject" class="form-control" value="" detect="" detect-check="true"></td>
					<?php } ?>	
				</tr>
				<tr>
					
					<td colspan="2" class="editor"><textarea name="content" rows="20" title="내용"></textarea></td>
					
				</tr>
				
			</tbody>
		
		</table>
	</div>
	<!-- //게시판 쓰기 -->

	<!-- 게시판 버튼 -->
	<div class="border_btn2">
		<button type="submit" class="btn blue" > 확인 </button> 
		<button type="button" class="btn gray" onclick="location.href='/border/border_list.php'; return false;"> 취소 </button> 

	</div>
	<!-- //게시판 버튼 -->
	<input type="hidden" name="page" value="<?=$page_name?>" />
	<input type="hidden" name="answer" value="<?=$answer?>" />
	<? if($answer==1) { ?>
	<input type="hidden" name="idx" value="<?=$idx?>" />
	<?}?>
	</form>
	
</div>
<!-- //본문 -->





<!-- 하단 맨 끝 -->
<div class="main_footer_2">
    <div class="container-fluid" style="">
        <div class="row">
              <div class="ft_005">
                    <p>프로그래머 초보 홍길동</p>
                </div>
        </div>
    </div>
</div>

  </body>

</html>
