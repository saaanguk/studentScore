<?php

//세션 데이터에 접근하기 위해 세션 시작
if (!session_id()) {
  session_start();
}

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "qwer";
    $db_name = "student_db";
    $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
    if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

    //form에서 전달받은 POST 데이타
    $id = $_GET['id'];

    //아이디 공백체크
    if(!$id){
        echo "<script>alert('아이디를 입력하시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    }

    //쿼리문 실행
    $query = "select * from teacher_tb where id='$id'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);
    
    if($row['id'] == null){

        echo "<script>alert('회원가입이 가능합니다.')</script>";
        echo "<script>history.back();</script>";
     
     }else{

        echo "<script>alert('중복된 아이디가 존재합니다.');</script>";
        echo "<script>history.back();</script>";
        
     }
?>