<?php

$colors = array("red", "green", "hello" => "blue", "yellow");

// php에서는 배열 인덱스란에 key 사용가능

echo "색 : $colors[0] <br>";
echo "색 : $colors[1] <br>";
echo "색 : $colors[hello] <br>";
echo "색 : $colors[2] <br>";


array_push($colors, "brown");
array_push($colors, "magenta");
array_push($colors, "cyan");

// 배열 구성 인덱스를 이용해서 배열로 부터 값을 하나씩 가져오기 위해 사용
foreach ( $colors as $key => $value)
{
    echo "$key : $value <br>";
}
?>