<?php

$result = require __DIR__ . '/calc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор</title>
    <link rel='stylesheet' href="style.css">
</head>
<body>
<form method="POST">
    <h1><u>Введите переменную:</u></h1>
    <input class="a" type="text" name="x1" style="width: 150px; height: 20px;">
    <select name="operation" style="height: 25px">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input class="b" type="text" name="x2" style="width: 150px; height: 20px;">
    <input class="c" type="submit" value="Посчитать" style="">
</form>
<p>Результат вычислений:</p>
    <?=$result ?>
</body>
</html> 