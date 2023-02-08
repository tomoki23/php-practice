<?php

//多次元配列
$animal = [
    ['イヌ', 'ネコ', 'トリ'],
    ['パンダ', 'コアラ', 'クマ'],
    ['トラ', 'ライオン', 'キリン'],
];

// var_dump($animal);

//要素を取り出す
foreach ($animal as $values) {
    echo '動物一覧' . $values[0] . 'と' . $values[1] . 'と' . $values[2] . '<br>';
}

echo '<hr>';

$tools = [
    ['name' => '刷毛', 'count' => 30],
    ['name' => 'ローラー', 'count' => 50],
    ['name' => 'シンナー', 'count' => 5],
];

var_dump($tools2);

foreach ($tools as $tool) {
    echo $tool['name'] . 'は' . $tool['count'] . '個です<br>';
}
