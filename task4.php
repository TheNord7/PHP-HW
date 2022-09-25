<?php

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Петр Петров' => 5,
        'Игорь Иванов' => 4,
        'Николай Сидоров' => 5
    ],
    'БАП20' => [
        'Антонов Антон' => 5,
        'Степан Степанович' => 5,
        'Анастасия Юрьевна' => 3,
        'Яна Евгеньевна' => 5,
        'Екатерина Игоревна' => 4
    ]
];

$group1 = $students['ИТ20'];
$group2 = $students['БАП20'];
$totalmark1 = 0;
foreach ($group1 as $mark) {
    $totalmark1 += $mark;
    $middle1 = $totalmark1 / count($group1);

}
$totalmark2 = 0;
foreach ($group2 as $mark2) {
    $totalmark2 += $mark2;
    $middle2 = $totalmark2 / count($group2);
}

if ($middle1 > $middle2) {
    echo "Группа ИТ20 имеет лучшую успеваемость";
} elseif ($middle1 < $middle2) {
    echo "Группа БАП20 имеет лучшую успеваемость";
} else {
    echo "Группы имеют одинаковую успеваемость";
};



 