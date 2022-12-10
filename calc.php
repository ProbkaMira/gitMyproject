<?php

if (empty($_POST)) {
    return 'ничего не передано';
}

if (empty($_POST['operation'])) {
    return 'операция не передана';
}

if (empty($_POST['x1']) || empty($_POST['x2'])) {
    return 'Не переданы аргументы';
}

$x1 = $_POST['x1'];
$x2 = $_POST['x2'];

$operation = $_POST['operation'];

$expression = $x1 . ' ' . $operation . ' ' . $x2 . '= ';

switch ($operation) {
    case '+' :
        $result = $x1 + $x2;
        break;

     case '-' :
        $result = $x1 - $x2;
        break;

    case '*' :
        $result = $x1 * $x2;
        break;

    case '/' :
        $result = $x1 / $x2;
        break;

    default:
    return 'Операция не поддерживается';


}

return $expression . $result;
