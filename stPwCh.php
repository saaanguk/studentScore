<?php
    session_start(); // 세션시작
    //데이타베이스 정보
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "qwer";
    $db_name = "student_db";
    $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
    if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

    //form에서 전달받은 POST 데이타
    $id = $_SESSION['id'];
    $pw = $_POST['pw'];
  
    if($pw==null){
        echo "<script>alert('패스워드를 입력하시오.')</script>";
        echo "<script>history.back();</script>";
    }

    //쿼리문 실행
    $query = "select * from student_tb where id='$id' and pw='$pw'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);

    if($id==$row['id'] && $pw==$row['pw']){ // id와 pw가 맞다면 login

        $_SESSION['pw'] = $row['pw'];
        echo "<script>location.href='st_my_info.php';</script>";
     
     }else{ // id 또는 pw가 다르다면 login 폼으로
      
        echo "<script>window.alert('비밀번호가 다릅니다.');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
        echo "<script>history.back();</script>";
     
     }
    

?>