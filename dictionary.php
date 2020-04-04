<?php
header('Content-Type: text/html; charset=utf-8');
$en_ru = [
    "house" => "дом",
    "mouse" => "мышь",
    "cat" => ["кот", "кошка"]
];

$ru_en = [];
foreach($en_ru as $en => $ru){
    if (!is_array($en_ru)){
        $ru_en[$ru][] = [$en];
        echo "$en:\t$ru\n";
    }
    else{
        //echo "$en:\n";
        foreach($ru as $word){
            echo "\t$word\n";   
        }
    } 
}