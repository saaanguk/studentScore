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
    $kor = $_POST['kor'];
    $eng = $_POST['eng'];
    $mat = $_POST['mat'];
    $sci = $_POST['sci'];
    $soc = $_POST['soc'];
    $tot = $kor + $eng + $mat + $sci + $soc;
    $avg = $tot/5;

    if(!$kor) {
        echo "<script>alert('국어 점수를 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$eng) {
        echo "<script>alert('영어 점수를 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$mat) {
        echo "<script>alert('수학 점수를 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$sci) {
        echo "<script>alert('사회 점수를 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$soc) {
        echo "<script>alert('과학 점수를 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    }

    $query = "update score_tb set kor = '$kor', eng = '$eng', mat = '$mat', sci = '$sci', soc = '$soc', tot = '$tot', avg = '$avg' where id = '$id'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);
    if($result == false) {
        echo "<script>alert('점수 입력에 실패 하였습니다.')</script>";
        echo "<script>history.back();</script>";
    } else {
        echo "<script>alert('점수 입력이 되었습니다.')</script>";
        echo "<script>location.href='searchstudent.php';</script>";
    }

    

?>