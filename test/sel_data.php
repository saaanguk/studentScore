<?php
    $food = $_POST['food'];

    echo "<script>alert('전달 받은 음식 : ' + '$food')</script>";

    echo "echo 전달 받은 음식 : ".$food;
    echo nl2br("\n");

    print "print 전달 받은 음식 : ".$food; 
    echo "<br/>";
?>