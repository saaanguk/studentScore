<?php
    $age = $_POST['user_age'];

    if($age > 18) {
        echo "<script>alert('성인이라 input1 이동')</script>";
        //페이지 이동 첫번째 방법
        echo "<script>location.href='input_test1.html'</script>";

    } else {
        echo "<script>alert('미성년이라 input2 이동')</script>";
        //페이지 이동 두번째 방법
        echo "<script>location.replace('input_test2.html')</script>";
    }

?>