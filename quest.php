<?php
$answer = (int)readline("В каком году произошло крещение Руси?");
if ($answer == 988) {
    echo "Вы ответили верно!";
} elseif ($answer == 810 || $answer == 740) {
    echo "Не верно!";
} else {
    while ($answer !== 988) {
        echo "Не верно, попробуйте снова\n";
        $answer = (int)readline("В каком году произошло крещение Руси?");
    }
    echo "Верно!";
}

