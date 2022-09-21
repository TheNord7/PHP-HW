<?php
$number = (int)readline("Введите число чтобы узать палец ");
if ($number == 1 || $number == 9) {
    echo "Это первый палец";
} elseif ($number == 10 || $number == 8 || $number == 2) {
    echo "Это второй палец";
} elseif ($number == 11 || $number == 7 || $number == 3) {
    echo "Это третий палец"; 
} elseif ($number == 12 || $number == 6 || $number == 4) {
    echo "Это Четвертый палец";
} elseif ($number == 21 || $number == 13 || $number == 5) {
    echo "Это пятый палец";
};            