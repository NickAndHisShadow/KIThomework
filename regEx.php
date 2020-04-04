<?php
header('Content-Type: text/html; charset=utf-8');
echo "Hello world";
$string = "<p>Права пользователей:</p>
<ul>
  <li>Administrator</li>
  <li>Editor</li>
  <li>Subscriber</li>
</ul>";
echo $string;
$pat = '[<li>(\w+)</li>]';
// if(preg_match_all($pat, $strings, $arr)){
//     print_r($arr);
// }
$replacement = '<li><a href="http://www.php.kh.ua/script.php?role=${1}">${1}</a></li>';
echo preg_replace($pat, $replacement, $string);

$prog = "$x = 3; $y = 4; $sum = $x + $y;";
echo preg_replace('/(\$\w+)/', '<b>\1</b>', $prog);