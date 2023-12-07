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
    $pw = $_SESSION['pw'];
  
    //쿼리문 실행
    $query = "delete from student_tb where id='$id'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);

    $query = "delete from score_tb where id='$id'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);

      echo "<script>location.href='index.html';</script>";
    
?>