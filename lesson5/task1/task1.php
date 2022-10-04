<?php

require_once "User.php";
require_once "Task.php";

$user = new User('Jora', 'jora@gmail.com', 'male', 22);
$task = new Task('Сделать зарядку', 5, $user);

var_dump($task);


