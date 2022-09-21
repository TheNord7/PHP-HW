<?php
$name = readline("Как вас зовут?");
echo "Здравствуйте $name\n";
$count = (int)readline("Сколько задач надо сделать?");
if ($count == 0 || $count > 10) {
    echo "Введите верное значение";
} else {
    $number = 0;
    $plan = " ";
    while ($number < $count) {
        $task = readline("Какое дело запланированно?");
        $time = (int)readline("Сколько времени это займет?");
        $plan .= "\n - $task($time)";
        $number++;
        $time += $time;
    }
    echo "$name на сегодня запланированно:\n$plan\n";
    echo "Это займет $time часа";
};


