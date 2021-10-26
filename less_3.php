<?php
$i = 0;
while ($i <= 100) {
    if ($i % 3 == 0)
    echo $i . ' ';
    $i++;   
}
?>
<br>
<br>
<?php

function whatNum($fromNum, $toNum) {
    do {
        if ($fromNum == 0) {
            echo '0&nbsp;&nbsp;это ноль' . '<br>';
        }
        $fromNum++;
        if ($fromNum % 2 == 0) {
            echo $fromNum . '&nbsp;&nbsp;четное число' . '<br>';
        } else {
            echo $fromNum . '&nbsp;&nbsp;нечетное число' . '<br>';
        }

        } while ($fromNum < $toNum);

}

whatNum(0, 10);

?>
<br>
<br>
 
<?php
$districts = [
    'Московская область' => ['Москва', 'Воскресенск', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Хабаровский край' => ['Хабаровск', 'Комсомольск-на-Амуре', 'Вяземский'],
    'Приморский край' => ['Владивосток', 'Артем', 'Находка', 'Уссурийск'],
];
foreach ($districts as $district => $cities) {
    echo $district . ' : ';
    $i = 0;
foreach ($cities as $city) {

if ($i == count($cities) - 1) {
    echo $city . '. ';
} else {
    echo $city . ', ';
}
    $i++;
}
    echo '<br>';
}

?>
<br>
<br>
<?php
mb_regex_encoding('UTF-8');
mb_internal_encoding("UTF-8");
$alphabet = [
    // строчные буквы
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
    'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm',
    'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => '\'',
    'ы' => 'i', 'ь' => '\'', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
    // прописные буквы
    'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO',
    'Ж' => 'ZH', 'З' => 'Z', 'И' => 'I', 'Й' => 'I', 'К' => 'K', 'Л' => 'L', 'М' => 'M',
    'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U',
    'Ф' => 'F', 'Х' => 'KH', 'Ц' => 'TS', 'Ч' => 'CH', 'Ш' => 'SH', 'Щ' => 'SCH', 'Ъ' => '\'',
    'Ы' => 'I', 'Ь' => '\'', 'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA'
];

$myString = 'Написать функцию транслитерации строк.';

function transLetter($string, $abc)        {
    $stringToArray = preg_split('//u', $string);
    
    $a = 0;
    $b = 0;
    $arrayToString = [];

        foreach ($stringToArray as $rusLetter) {
            foreach ($abc as $abcRus => $abcEng) {

                if ($rusLetter == $abcRus) {
                    $arrayToString[] = $abcEng;
                    $b++;
                    break;
                }
            }
                if ($a == $b) { 
                    $arrayToString[] = $rusLetter; 
                }
            $a = $b;
            }
            $string = implode($arrayToString);
            return $string;

        }

        echo transLetter($myString, $alphabet);

?>
<br>
<br>

<?php
$myString2 = 'Написать функцию, которая заменяет в строке пробелы на подчеркивания.';
function changeSpace($string){
    return str_replace(' ', '_', $string);
}

    echo changeSpace($myString2);

?>
<br>
<br>

<?php
        
$myMenu = [
   'Компания' => false,
   'Продукция' => ['Одежда', 'Обувь', 'Сумки'],
   'О нас' => false,
   'Контакты' => false,
   'Цены' => false
];

function createMenu($Menu) {

    echo '<ul class="list">';
    foreach ($Menu as $menuList => $menuListData) {

        if ($menuListData) {
         echo '<li class="withSubMenu">' . $menuList . '<ul class="subMenu">';

        foreach ($menuListData as $listData) {
            echo '<li>' . $listData . '</li>';
        }
            echo '</ul></li>';

        } else {
            echo '<li>' . $menuList . '</li>';
        }
    }
    echo '</ul>';
}

createMenu($myMenu);

?>

<?php
    for ($i = 0; $i < 10; print ($i++ . ' ')) {
    };
?>
<br>
<br>

<?php
$districts = [
    'Московская область' => ['Москва', 'Воскресенск', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Хабаровский край' => ['Хабаровск', 'Комсомольск-на-Амуре', 'Вяземский'],
    'Приморский край' => ['Владивосток', 'Артем', 'Находка', 'Уссурийск'],
];
foreach ($districts as $district => $cities) {

    echo $district . ' : ';
    $i = 0;
    foreach ($cities as $city) {
        if ($city[0] . $city[1] == 'К') {
        if ($i == count($cities) - 1) {
            echo $city . '. ';
        } else {
            echo $city . ', ';
        }
        }
        $i++;
        }
        echo '<br>';
    }

?>
<br>
<br>

<?php
$myString3 = 'Объединить две ранее написанные функции в одну, которая получает строку на русском языке.';
function transForUrl($string, $abc)
{
     return changeSpace(transLetter($string, $abc));
}

echo transForUrl($myString3, $alphabet);
?>