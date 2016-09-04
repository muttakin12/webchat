<?php


$array = [1, 'dsaw', 56, 'fawwa'];

print_r($array);
for($i = 0; $i < sizeof($array); $i++){
    echo $i.'<br>';
    echo $array[$i].'<br>';
}

echo $array[2];
echo $array[6];