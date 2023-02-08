<?php

//連想配列
$framework = [
    'PHP' => 'Laravel',
    'JavaScript' => 'React',
    'Ruby' => 'Rails'
];

// $frameworkと同じ(作り方の違い)
$framework2['PHP'] = 'Laravel';
$framework2['JavaScript'] = 'JavaScript';
$framework2['Ruby'] = 'Rails';

//キーと値を取り出す
foreach ($framework as $key => $val) {
    echo $key . 'のフレームワークは' . $val . 'です<br>';
}

echo '<hr>';

foreach ($framework2 as $key => $val) {
    echo $key . 'のフレームワークは' . $val . 'です<br>';
}
