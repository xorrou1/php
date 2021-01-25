<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!--   Задание 1   -->
<!--   Логические операции   -->

<?php

$a = (int)rand(-100,100);
$b = (int)rand(-100,100);

echo $a;
echo "<br />";
echo $b;
echo "<br />";

if($a > 0 && $b > 0){
echo '$a - $b ='; 
echo $a - $b;
} elseif ($a < 0 && $b < 0){
echo '$a * $b = '; 
echo $a * $b;
} elseif(($a * $b) < 0 ){
echo '$a + $b = '; 
echo $a + $b;
};

?>

<!--   Задание 2   -->
<!--   Функции арифметических выражений   -->

<?php 

    function addition(int $arg1, int $arg2):int {
        return $arg1 + $arg2;
    };

    function subtraction(int $arg1, int $arg2) {
        return $arg1 - $arg2;
    };

    function multiplication(int $arg1, int $arg2) {
        return $arg1 * $arg2;
    };

    function division(int $arg1, int $arg2) {
        return $arg1 / $arg2;
    };
    
    echo "a + b = ".addition(10 , 5) ."<br />";
    echo "a - b = ".subtraction(10 , 5) ."<br />";
    echo "a * b = ".multiplication(10 , 5) ."<br />";
    echo "a / b = ".division(10 , 5) ."<br />";

?>

<!--   Задание 3   -->
<!--   Функции арифметических выражений, в зависимости от переданного аргумента   -->

<?php 

    echo calculator(5,10, '+');
    echo calculator(5,10, '-');
    echo calculator(5,10, '*');    
    echo calculator(5,10, '/');    
    echo calculator(5,10, "+");    
    echo calculator(5,10, 'dsfs');
    echo calculator(5,10);

    function calculator(?int $arg1, int $arg2, $operation = null){
        if($operation === '+'){
            $composition = $arg1 + $arg2;
            return  dataOutput($composition,$arg1,$arg2,$operation);
        }  elseif($operation === '-'){
            $composition = $arg1 - $arg2;
            return  dataOutput($composition,$arg1,$arg2,$operation);
        }   elseif($operation === '*'){
            $composition = $arg1 * $arg2;
            return  dataOutput($composition,$arg1,$arg2,$operation);
        }   elseif($operation === '/'){
            $composition = $arg1 / $arg2;
            return  dataOutput($composition,$arg1,$arg2,$operation);
        }
        return "В ведите корректный оператор!!! <br />";       
    };
    
    function dataOutput($arg,$arg1,$arg2,$operation){
        return "$arg1 $operation $arg2 = ".$arg."<br />";
    };
?>

<!--   Задание 4   --> 
<!--   Функция даты   --> 
<footer class="footer"> 
    <div > 
        <p class="foterDate">
            <?php 
                $date = date('c');
                 echo 'Сейчас:           '. date('c') ."<br />";
            ?>
        </p>  
    </div>

    <style>
        
        .content {
            min-height: calc(100vh - 70px);
        }
        .footer {
            height: 50px;
            background-color: orange;
        }

    </style>

<!--   Задание 5   -->
<!--   Функция рекурсии возведения в степень   -->
<?php   

    function power( float $val,  float $pow):float{
       define("TEL", $val);
/*         if(($pow-1) <= 0){
            return $val;
        } return power(($val*TEL), --$pow); */
        return (($pow-1) <= 0)? $val : power($val*TEL, --$pow);
    };
    
    echo power(152,7);

?>

<!--   Задание 6   -->
<!--   Отображение текущей даты со склонениями    -->

<?php

    function datehour($argH){
        $residue10 = $argH % 10;
        $residue20 = $argH % 20;
        if($residue10 === 1 && $residue20 < 10){
            return 'Точное время: '.$argH.' час ';
        } elseif($residue10 >= 2 && $residue10 <= 4 && $residue20 < 10){
            return 'Точное время: '.$argH.' часа ';
        } return 'Точное время: '.$argH.' часов ';
    };

    function dateMin($argM){
        $residue10 = $argM % 10;
        $residue20 = $argM % 20;
        if($residue10 === 1 && $residue20 < 10){
            return $argM.' минута.'."<br />";
        } elseif($residue10 >= 2 && $residue10 <= 4 && $residue20 < 10){
            return $argM.' минуты.'."<br />";
        } return $argM.' минут.'."<br />";
    };

    $todayH = date('G');
    $todayM = date('i');

    echo datehour($todayH).dateMin($todayM);

?>

</body>
</html>