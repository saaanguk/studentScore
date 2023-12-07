<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "qwer";
    $db_name = "web_db";
    $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
    if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

    $name = $_POST['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    

    if(!$name) {
        echo "<script>alert('작성자를 입력하시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$title) {
        echo "<script>alert('제목을 입력하시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$content) {
        echo "<script>alert('내용을 입력하시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    }

    $query = "INSERT into board(title, content, reg_date, hit, writer) values('$title', '$content', now(), 0,'$name')";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);
    if($result == false) {
        echo "<script>alert('회원가입에 실패 하였습니다.')</script>";
        echo "<script>history.back();</script>";
    } else {
        echo "<script>alert('작성이 완료 되었습니다.')</script>";
        echo "<script>location.href='submenu1_2.php';</script>";
    }
?>