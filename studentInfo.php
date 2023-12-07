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

    $id = $_POST['id'];
    $name = $_POST['name'];
    $addr = $_POST['addr'];
    $ph = $_POST['ph'];
    $parentph = $_POST['parentph'];
    $email = $_POST['email'];

    if(!$name) {
        echo "<script>alert('이름을 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$addr) {
        echo "<script>alert('주소를 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$ph) {
        echo "<script>alert('연락처를 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$parentph) {
        echo "<script>alert('부모님 연락처를 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$email) {
        echo "<script>alert('이메일을 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    }
    
    $query = "update student_tb set name = '$name', ph = '$ph', parentph = '$parentph', addr = '$addr', email = '$email' where id = '$id'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);
    if($result == false) {
        echo "<script>alert('정보변경에 실패 하였습니다.')</script>";
        echo "<script>history.back();</script>";
    } else {
        echo "<script>alert('정보변경이 되었습니다.')</script>";
        echo "<script>location.href='searchstudent.php';</script>";
    }