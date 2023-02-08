<?php

//配列を作成
$programmingLanguageArr = [
    'JavaScript',
    'PHP',
    'Ruby'
];

//要素の追加
$programmingLanguageArr[] = 'Java';

//要素を指定して出力
echo $programmingLanguageArr[0] . '<br>';

//要素を順番に出力
foreach ($programmingLanguageArr as $language) {
    echo $language . '<br>';
}

// var_dump($programmingLanguageArr);
