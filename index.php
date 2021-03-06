                                
<?php 
header('Content-type: text/html; charset=utf-8');
error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
ini_set('display_errors', 1);

# Делаем массив из рандомных значений юникс даты

$time=time();

$date = array(rand(1,$time),rand(1,$time),rand(1,$time),rand(1,$time),rand(1,$time));

#Выводим на экраз все значения в столбик для графического анализа

echo 'День. Мес. Год. Час. Мин. Сек.<br>';

#Нужно сделать массив из значений date('Y.m.d H.m.s', $value);

foreach($date as $value){ 
echo "<br>".date('d.m.Y H.m.s', $value);
$minday[] = date('d',$value);
$maxmounth[] = date('m',$value);
}
echo '<br><br>Наименьший день месяца:'  .min($minday);
echo '<br><br>Наибольший месяц:'  .max($maxmounth)."<br><br>";

echo 'Сортируем даты по возростанию:<br>';

sort ($date);
foreach($date as $value){
echo  date('d.m.Y H.m.s', $value);
echo '<br>';
        }

        echo '<br>Последний элемент массива:<br>';        
#Извлекаем последний элемент массива в переменную $selected и выводим в форомате д.м.Г Ч.м.с

$selected=array_pop($date);

echo date_default_timezone_get();
echo '<br>';

echo date('d.m.Y H.m.s', $value);
echo '<br>';

#Меняем тайм зону и повторяем вывод:

date_default_timezone_set('America/New_York');
echo '<br>';

echo date_default_timezone_get();
echo '<br>';

echo date('d.m.Y H.m.s', $value);
echo '<br>';

?>