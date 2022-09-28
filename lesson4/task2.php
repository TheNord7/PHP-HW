<?php


$numbers = [];
for ($i=0; $i < 10; $i++) { 
    $numbers[] = random_int(-100, 100);
}

function someFunc (array $arr): array {
    $max = 0;
    $min = 0;
    foreach ($arr as $number) {
        if ($number > $max) {
            $max = $number;
        } elseif ($number < $min) {
            $min = $number;
        }
        $avg += $number;
        $avg = $avg / count($arr);
    }
    return ["1" => $max, "2" => $min, "3" => $avg];
}

print_r(someFunc($numbers));