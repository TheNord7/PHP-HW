<?php

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$result = function ($number)
{ 
    return ($number % 2 == 0)? "Четное" : "Нечетное";
};

print_r(array_map($result, $numbers));

