<?php


 $findItem = (string)readline("Введите название предмета для поиска: ");
 function findSom (array $arr, string $key): bool
 {
    $answer = FALSE;
    foreach ($arr as $item) {
        if (is_array($item)) {
           $answer = findSom($item, $key);
        } elseif ($item == $key) {
            return TRUE;
        }
    }
    return $answer;
 };

 $box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
 ];

 $var = findSom($box, $findItem);
 var_dump($var);