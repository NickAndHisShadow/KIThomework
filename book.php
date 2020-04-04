<?php
$books = [
    "Sex education" => ["Netflix", 1840],
    "The Wither" => ["Netflix", 2019],
    "Война и мир" => ["Толстой", 1863],
    "Идиот" => ["Паоло Дженовезе", 1868]
];

function format_show($val, $key, $data){
    echo "$data \"$key\": $val[0],  \n";
}
array_walk($books, "format_show", "Роман");
echo "_____________\n";
ksort($books); 
array_walk($books, "format_show", "Роман");

function author($a, $b){
    if ($a[0] < $b[0])
    return -1;
  elseif ($a[0]==$b[0])
    return 0;
  else
    return 1;
}

echo "_____________\n";
uasort($books,"author"); 
array_walk($books, "format_show", "Роман");

