<?php
// $arr = [8, 11, 0, 3, -5];
// $min = min($arr);
// $users = [
//     "Ivanov" => 1999,
//     "Petrov" => 2001,
//     "Alexandrov" => 2003
// ];
// ksort($users);
// foreach ($users as $key => $val) {
//     echo "$key = $val\n";
// }
// print_r($users);

$arr2 = [
    [1,3,-6,0],
    [-1,6,4,2],
    [0,8,1,-5]
];

$sum1=0;
function plus($x){
   return $x>0;
}
$total[] = 0;
for ($i=0; $i < count($arr2); $i++) { 
   $total[] = array_sum(array_filter($arr2[$i], "plus"));
}

echo array_sum($total);