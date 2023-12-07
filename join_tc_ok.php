<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "qwer";
    $db_name = "student_db";
    $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
    if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $pw_r = $_POST['pw_r'];
    $name = $_POST['name'];
    $hp = $_POST['hp'];
    $grade = $_POST['grade'];
    $ban = $_POST['ban'];
    $email1 = $_POST['email'];
    $email_domain = $_POST['email_domain'];

    if(!$pw || !$pw_r) {
        echo "<script>alert('패스워드를 입력하시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if($pw != $pw_r) {
        echo "<script>alert('패스워드가 일치하지 않습니다.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$name) {
        echo "<script>alert('이름을 입력하시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$hp) {
        echo "<script>alert('연락처를 입력하시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$grade) {
        echo "<script>alert('학년을 입력하시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$ban) {
        echo "<script>alert('반을 입력하시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    }
    $temp = "";
    if($email_domain == 1) {
        $temp = "@naver.com";
    } else if($email_domain == 2) {
        $temp = "@gmail.com";
    } else if($email_domain == 3) {
        $temp = "@daum.net";
    }
    $email = $email1.$temp;
    
    $query = "insert into teacher_tb(id, pw, name, ph, grade, ban, email) values('$id', '$pw', '$name', '$hp', '$grade', '$ban', '$email')";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);
    if($result == false) {
        echo "<script>alert('회원가입에 실패 하였습니다.')</script>";
        echo "<script>history.back();</script>";
    } else {
        echo "<script>alert('회원가입이 되었습니다.')</script>";
        echo "<script>location.href='login_student.php';</script>";
    }
?>