<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--   Задание 3   --> 
<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Сравнение по значению. Строковый тип автоматически приводится к целому числу
    var_dump((int)'012345');     // Приводит к целому числу
    var_dump((float)123.0 === (int)123.0); // Сравнение по значению и типу. Значения одинаковый но разные типы
    var_dump((int)0 === (int)'hello, world'); // Приведение строкового типа к целому числу работает по принципу: Если строка начинается с верного числового значения, будет использовано это значение. Иначе значением будет 0 (ноль).
?>

<!--   Задание 4   -->
<?php 
    $title = "Привет я заголовок";
    $paragraph1 = "А я параграф 1";
    $paragraph2 = "А я параграф 2";    
?>

<h1> <?=$title?></h1>
<p> <?=$paragraph1?></p>
<p> <?=$paragraph2?></p>

<!--   Задание 5   -->
<?php
    $c = 1;
    $d = 2;
    $c++;
    --$d;
    echo "Я переменная \$c=$c <br/>";
    echo "Я переменная \$d=$d <br/>";
    $c -=1;
    $d +=1;
    echo "Я переменная \$c=$c <br/>";
    echo "Я переменная \$d=$d <br/>";
?>
</body>
</html>