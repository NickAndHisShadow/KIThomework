<?php
$n = 5; //Задуманное число
$count = 0; // Количество попыток
$text = ""; // Текст подсказки
$nameErr = ""; // Сообщение об ошибке

if (isset($_POST['Submit'])) { // Если нажата кнопка 'Submit'
    $count = $_POST['hidden'] + 1; // Увеличиваем счетчик на 1

    if (empty($_POST["my_number"])) { // Если ничего не ввели
        $nameErr = "Число обязательно для ввода!";
    } else {
        $my_number = trim($_POST["my_number"]); //Удаляем лишние пробелы

// проверка, содержатся ли только число
        if (!preg_match("/^[1-8]$/", $my_number)) {
            $nameErr = "Разрешается только число от 1 до 8!";
        }
    }
    if ($nameErr === "") { // Если не было ошибки
        if ($my_number > $n) {
            $text = "Слишком много!";
        } elseif ($my_number < $n) {
            $text = "Слишком мало!";
        } else {
            $text = "Точно! Угадано с $count попытки!<br/>";
        }
    }
}
?>
<p>Угадай число от 1 до 8:</p>
<form action="<?=$_SERVER['PHP_SELF']?>" name="myform" method="POST">
    <input type="text" name="my_number" size="5"><?=$text?><?=$nameErr?><br />
    <input type="hidden" name="hidden" size="50" value="<?=$count?>">
    <input name="Submit" type="submit" value="Отправить"><br />
</form>