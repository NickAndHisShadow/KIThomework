<?php
header('Content-Type: text/html; charset=utf-8');
$n = rand(1, 13);
echo "n = ".$n." ";
switch ($n) {
    case 1:
        echo "Ыыыыыы...";
        break;
    case 2:
        echo "Аф аф аф...";
        break;
    case 3:
        echo "Папа-мама";
        break;
    case 4:
        echo "Как ходить";
        break;
    case 5:
        echo "гАвАрим без Ашибок";
        break;
    case 6:
        echo "2 + 2 = Австралия";
        break;
    case 7:
        echo "2 + 2 = 5";
        break;
    case 8:
        echo "PI = 3.14";
        break;
    case 9:
        echo "Закон Фарадея гласит, что электродвижущая сила прямо пропорциональна скорости изменения магнитного потока.";
        break;
    case 10:
        echo "Второй закон Ньютона утверждает: в инерциальных системах отсчета материальная точка (тело) приобретает ускорение, которое прямо пропорционально равнодействующей всех приложенных к телу сил и обратно пропорционально массе тела.";
        break;
    case 11:
        echo "Теорема Кронекера — Вебера — утверждение в алгебраической теории чисел, согласно которому каждое конечное абелево расширение поля рациональных чисел Q является подполем некоторого кругового поля, то есть поля, полученного присоединением корня из единицы к рациональным числам.";
        break;
    case 12:
        echo "Главная диагональ квадратной матрицы, определителя — (упорядоченная) совокупность элементов aa a 11 22 nn , ,... матрицы, определителя. ";
        break;
    case 13:
        echo "Невероятные знания";
        break;
}
?>