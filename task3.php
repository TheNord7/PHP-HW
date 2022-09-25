<?php

$wishes = ["здоровья", "счастья", "благополучия", "любви"];
$epithets = ["Бесконечного", "Крепкого", "Успешного", "Блестящего"];
$name = readline("Введите имя: ");
$wishArr = [];
$a = 0;
while ($a < 3) {
    $randWishIndex = array_rand($wishes);
    $randWish = $wishes[$randWishIndex];
    $epithetsIndex = array_rand($epithets);
    $randEp = $epithets[$epithetsIndex];
    $wishArr[] = $randEp.' '.$randWish;
    $a++;
};

$allWish = implode(', ', $wishArr);
echo "$name Желаю тебе $allWish!";

