                                
<?                              # Первое задание
$name = 'Dmitriy';
$age = 28;
echo 'Меня зовут '.$name.' <br> Мне '.$age.' лет';

unset($name,$age);

// Если же имелось ввиду не удаление переменных, а обнуление значений переменных, то 
//$name = '';
//$age = '';

?>
<br>
<?
# Второе задание

define('CITY', 'Novosibirsk');

if (defined('CITY') == true) 
    {
    echo CITY;
}

# Либо, можем убедиться, что константа объявлена и существует через 
# var_dump(CITY);
# результат вывода этой команды "string 'Novosibirsk' (length=11)"

#нельзя поменять значение константы, но можно попытаться, если ты индусский кодер

        
        
# Третье задание

$book ['title'] = '"Цюрихские Аксиомы"';
$book ['author'] = 'Макс Гюнтер';
$book ['pages'] = '300';

#можно задать массив как 
#$book=array('title' => 'Цюрихские Аксиомы' , 'author' => 'Макс Гюнтер' , 'pages' => '300');
# Но для меня гораздо читабельнее, когда элемнты массива задаются в столбик.

echo '<br><br> Недавно я прочитал книгу '.$book ['title'].', '
        . 'написанную автором '.$book ['author'].', '
        . 'я осилил все '.$book ['pages'].' страниц, мне она очень понравилась. <br><br>';

# Четвертое задание

$book1  = array( '"Цюрихские Аксиомы"', 'Макс Гюнтер', '300');
$book2  = array('"Как торговать акциями"', 'Джесси Ливермор' ,  '400');

$books = array ($book1,$book2);

#var_dump ($books);

echo 'Недавно я прочитал книги '.$books[0][0].' и '.$books[1][0].', '
        . 'написанные соответственно авторами '.$books[0][1].' и '.$books[1][1].', '
        . 'я осилил в сумме '.($books[0][2] + $books[1][2]).' страниц, не ожидал от себя подобного. <br>';

        ?>

