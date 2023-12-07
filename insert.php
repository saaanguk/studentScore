<?php
    session_start();
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "qwer";
    $db_name = "student_db";
    $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
    if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

    $id = $_SESSION['id'];
    $num = $_POST['num'];
    $name = $_POST['name'];

    if(!$num) {
        echo "<script>alert('학번을 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    } else if(!$name) {
        echo "<script>alert('이름을 입력하십시오.');</script>";
        echo "<script>history.back();</script>";
        return;
    }
    $query = "select * from teacher_tb where id='$id'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);

    if($id == $row['id']){
        $grade = $row['grade'];
        $ban = $row['ban'];
    }
    
    $query = "select * from student_tb where id='$num'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);
    
    if($row['id'] == null){
        
        $query = "insert into student_tb(id, pw, name, grade, ban, ph, parentph, addr, email) values('$num', null,'$name', '$grade', '$ban', null, null, null, null)";
        $result = mysqli_query($connect, $query); 
        $row = mysqli_fetch_array($result);
        

        $query = "insert into score_tb(id, name, grade, ban, kor, eng, mat, soc, sci, tot, avg) values('$num', '$name', '$grade', '$ban', null, null, null, null, null, null, null)";
        $result = mysqli_query($connect, $query); 
        $row = mysqli_fetch_array($result);
        if($result == false) {
            echo "<script>alert('학생 추가에 실패 하였습니다.')</script>";
            echo "<script>history.back();</script>";
        } else {
            echo "<script>alert('학생이 추가 되었습니다.')</script>";
            echo "<script>location.href='insertStudent.php';</script>";
        }
        
     
     }else{

        echo "<script>alert('이미 존재하는 학번입니다.');</script>";
        echo "<script>history.back();</script>";
        
     }

?>