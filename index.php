<?php
$colors = array("red", "green", "hello" => "blue", "yellow");

echo "색 : $colors[0] <br>";
echo "색 : $colors[1] <br>";
echo "색 : $colors[hello] <br>";
echo "색 : $colors[2] <br>";


array_push($colors, "brown");
array_push($colors, "magenta");
array_push($colors, "cyan");

foreach ( $colors as $key => $value)
{
    echo "$key : $value <br>";
}

?>