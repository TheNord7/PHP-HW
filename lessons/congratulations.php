<?php

$names = ["Ваня", "Маша", "Петя", "Вася", "Даша", "Женя"];
$cong = " Поздравляю с днем рождения";
$randName = array_rand($names);
$string = $names[$randName].$cong;
echo "$string";

