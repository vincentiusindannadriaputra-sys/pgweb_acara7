<?php

$i = 1;
while ($i == 1) {
    echo $i . "<br>";
    $i++;
}

$i = 1;
while ($i <= 10) {
    echo $i . "<br>";
    $i = $i + 2;
}

for ($i = 1; $i < 7; $i++) {
    echo $i . "<br>";
}

$colors = array("red", "blue", "green");

foreach ($colors as $value) {
    echo "$value <br>"; 
}

for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "<br>";
}

?>