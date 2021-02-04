<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  задание 1  -->
    <!--  С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.  -->

    <?php 

        $num = 0;

        while($num <= 100){
            if(($num % 3 ) === 0)
            echo $num."<br />";
            $num++;
        };

    ?>

    <!--  задание 2  -->
    <!--  С помощью цикла do…while написать функцию для вывода чисел от 0 до 10  -->

    <?php

        $num = 0;

        do {
            if($num === 0 ){    
                echo $num.' - ноль <br />';
            } elseif(($num % 2) != 0){
                echo $num.' - нечетное число <br />';
            } else {
                echo $num.' - четное число <br />';
            }
                $num++;
        } while ($num <= 10);

    ?>


    <!--  задание 3  -->
    <!--  Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области.  -->

    <?php 

        $regionalCities1 = array(
            'Московская область' => array('Москва', 'Зеленоград' , 'Клин'),
            'Ленинградская область' => array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'),
            'Рязанская область ' => array('Рязань', 'Касимов', 'Скопиг')
        );

        $regionalCities2['Московская область'] = ["Москва", "Зеленоград" , "Клин"];
        $regionalCities2['Ленинградская область'] = ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'];
        $regionalCities2['Рязанская область '] = ['Рязань', 'Касимов', 'Скопиг'];

        $regionalCities3 = [
                'Московская область' => ['Москва','Зеленоград', 'Клин'],
                'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
                'Рязанская область ' => ['Рязань' , 'Касимов' , 'Скопиг']
            ];

        foreach($regionalCities1 as $key => $nestedМalue){
            echo $key.": ".implode(', ', $nestedМalue)."<br />";
        };

        echo "<br />";

        foreach($regionalCities2 as $key => $nestedМalue){
            echo $key.": ";
            foreach($nestedМalue as $key => $value1){
            if($key >= count($nestedМalue)-1){
                    echo "$value1";
                    break;
                } echo "$value1".", ";        
            }
                echo "<br />";
        };
    ?>

    <!--  задание 4  -->
    <!--  зОбъявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания  -->

    <?php 

        function convStringlower($arg){
            return mb_strtolower($arg);
        };

        function splited($arg){
            return preg_split('//u', $arg, 0, PREG_SPLIT_NO_EMPTY);

        };


        function transLanguage($text)  {

            $transliterationArre = [
                'а'=> 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g','д' => 'd','е' => 'je','ё' => 'yo','ж' => 'zh','з' => 'z','и' => 'i','й' => 'j','к' => 'k','л' => 'l','м' => 'm','н' => 'n','о' => 'o','п' => 'p','р' => 'r','с' => 's','т' => 't','у' => 'u','ф' => 'f','х' => 'x','ц' => 'cz','ч' => 'ch','ш' => 'sh','щ' => 'shh','ъ' => '``','ы' => 'y`','ь' => '\'','э' => 'e', 'ю' => 'yu', 'я' => 'ya'
            ]; 

            $result = [];

            $str = convStringlower($text);

            $splited = splited($str);

            foreach($splited as $char){
                $result[] = $transliterationArre[$char] ?? " ";
            };

            return implode($result);
        
        };

        $patter = 'Шел Шива по шоссе, сокрушая сущее. 
        Сущее трещит по швам вдоль своей несущей. 
        Шива, вдоль шоссе шагая, Чинит разрушения. 
        И трещат в шести руках 
        Прошлого свершения.';

        transLanguage($patter);

    ?>

    <!--  задание 5  -->
    <!--  Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.  -->

    <?php 

        function replicationExpression($pattern, $replacement,$string){
            return preg_filter($pattern, $replacement, $string);
        };

        $patter = 'Шел Шива по шоссе, сокрушая сущее. 
        Сущее трещит по швам вдоль своей несущей. 
        Шива, вдоль шоссе шагая, Чинит разрушения. 
        И трещат в шести руках 
        Прошлого свершения.';

        $replacement ='/(\s)+/';

        $string ="_";

        echo replicationExpression($replacement, $string, $patter);

    ?>

    <!--  задание 7  -->
    <!--  Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла  -->

    <?php 

        for($i = 0; $i < 10; print $i++){ };

    ?>

    <!--  задание 8  -->
    <!--  Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К»  -->

    <?php 

        $regionalCities3 = [
            'Московская область' => ['Москва','Зеленоград', 'Клин'],
            'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
            'Рязанская область ' => ['Рязань' , 'Касимов' , 'Скопиг']
        ];

        function filterCities( $pattern , $array){
            return preg_grep( $pattern, $array);
        };

        function splitArr($arrey){
            $listOfSities ='';
            foreach($arrey as $key => $nestedМalue){
                $listOfSities .= ($key.": ".implode(', ', filterCities("/(^К)+/", $nestedМalue))."<br />");
            };
            return $listOfSities;
        };

        echo splitArr($regionalCities3);

    ?>

    <!--  задание 9  -->
    <!--  Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания  -->

    <?php 

        function splited9($arg){
            return preg_split('//u', $arg, 0, PREG_SPLIT_NO_EMPTY);
        };

        function replicationExpression9($pattern, $replacement,$string){
            return preg_filter($pattern, $replacement, $string);
        };


        function transLanguage9($pattern, $string, $text)  {
            $transliterationArre = [
                'а'=> 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g','д' => 'd','е' => 'je','ё' => 'yo','ж' => 'zh','з' => 'z','и' => 'i','й' => 'j','к' => 'k','л' => 'l','м' => 'm','н' => 'n','о' => 'o','п' => 'p','р' => 'r','с' => 's','т' => 't','у' => 'u','ф' => 'f','х' => 'x','ц' => 'cz','ч' => 'ch','ш' => 'sh','щ' => 'shh','ъ' => '``','ы' => 'y`','ь' => '\'','э' => 'e', 'ю' => 'yu', 'я' => 'ya'
            ]; 

            $result = [];

            $splited = splited9($text);

            foreach($splited as $char){
                $result[] = $transliterationArre[$char] ?? " ";
            };

            $filter = implode($result);

            return replicationExpression9($pattern, $string, $filter);
        };

        $text = 'Шел Шива по шоссе, сокрушая сущее. 
        Сущее трещит по швам вдоль своей несущей. 
        Шива, вдоль шоссе шагая, Чинит разрушения. 
        И трещат в шести руках 
        Прошлого свершения.';

        $pattern ='/(\s)+/';

        $string ="_";

        echo transLanguage9($pattern, $string, $text);

    ?> 



</body>
</html>