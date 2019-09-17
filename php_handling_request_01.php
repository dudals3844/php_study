<?php
    $name = $_POST["name"];//html에서 name이란 id에서 보낸 값을 받아온다.
    $email = $_POST["email"];

    echo $name."님의 이메일 주소는 ".$email."입니다.";

?>