<?php
//if
$num_01 = 10;
$num_02 = 11;

    if($num_01 == $num_02){
        echo "{$num_01} same {$num_02}";
    }
    else if($num_01 < $num_02){
        echo "{$num_01} < {$num_02}";
    }
    else if($num_01 > $num_02){
        echo "{$num_01} > {$num_02}";
    }


    $var = "귤";
    switch ($var) {
        case "귤":
            echo "this is korea orange";
            break;
        case "사과":
        case "바나나":
        case "아보카도":
            echo "여기 있는 과일은 제가 먹어본 과일입니다.";
            break;
        case "파파야":
        case "두리안":
        case "석가":
            echo "여기 있는 과일은 제가 먹어보지 못한 과일입니다.";
            break;
        default:
            echo "여기 있는 것은 과일이 아닙니다.";
            break;
}

?>