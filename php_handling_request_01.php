<?php
    $name = $_POST["name"];//html에서 name이란 id에서 보낸 값을 받아온다.
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $favtopic = $_POST["favtopic"];
    $comment = $_POST["comment"];

    echo "<h2>입력된 회원 정보</h2>";
    echo "이름 : ".$name."<br>";
    echo "성별 : ".$gender."<br>";
    echo "이메일 : ".$email."<br>";
    echo "홈페이지 : ".$website."<br>";
    echo "관심 있는 분야 : ";
    if (!empty($favtopic)) {
        foreach ($favtopic as $value) {
            echo $value." ";
        }
    }
    echo "<br>기타 : ".$comment;

?>