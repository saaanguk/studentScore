<?php
    session_start(); // 세션시작
    //데이타베이스 정보
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "qwer";
    $db_name = "student_db";
    $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
    if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $ph = $_POST['ph'];
    $grade = $_POST['grade'];
    $ban = $_POST['ban'];
    $email = $_POST['email'];

    if(!$pw) {
        $pw = $_SESSION['pw'];
    } else if(!$name) {
        echo "<script>alert('이름을 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$ph) {
        echo "<script>alert('연락처를 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$grade) {
        echo "<script>alert('학년을 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$ban) {
        echo "<script>alert('반을 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    }

    $query = "update teacher_tb set name = '$name', pw ='$pw', ph = '$ph', grade = '$grade', ban = '$ban', email = '$email' where id = '$id'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);
    if($result == false) {
        echo "<script>alert('정보 변경에 실패 하였습니다.')</script>";
        echo "<script>history.back();</script>";
    } else {
        echo "<script>alert('정보 변경이 되었습니다.')</script>";
        echo "<script>location.href='tc_login_ok.php';</script>";
    }

    

?>