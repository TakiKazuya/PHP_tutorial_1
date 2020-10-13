<?php

// 基本

// コメントはこのように//を先頭に書くとコメントになる。Rubyと一緒
/* このようなコメントの書き方もあり、
この場合は複数行をコメントとして記述することができる(HTMLみたいな)
*/

// PHPは、行の最後に必ず;(セミコロン)を付ける!!
// 出力はecho(Rubyで言うputs)
echo 1 + 1; // 2

echo '<br>'
?> // この閉じ括弧は省略することができる

<?php

// 1.変数

// 変数はこのように$を頭につけて任意の変数名を付けることができる
$test = 123;

echo $test;

$test = 456;

echo $test;

var_dump($test); // int(456) のように、型（値）で表示する

// 変数名の先頭は英数字か_(アンダーバー)
$_test = 'hoge';
$moge = 'fuga';

$test_1 = 123;
$test_2 = 456;

// 変数を.(ピリオド)でつなげると、結合して文字列になる
$test_3 = $test_1 . $test_2;
var_dump($test_3); // string(6) "123456"

echo '<br>'
?>

<?php
// 2.定数

// constant
const WHITE = '#FFFFFF';
const BLACK = '#000000';

echo WHITE;
echo BLACK;

echo '<br>'
?>

<?php
// 3.配列

// 配列
$array_1 = [1, 2, 3];

// 1を出力したい場合は[0]番目を指定する
echo $array_1[0];

// 複数の型を入れれる
$array_2 = ['あいうえお', 2, 3];
echo $array_2[0]; //　あいうえお

// 多重配列
$array_3 = [
    ['赤', '青', '黄'],
    ['緑', '紫', '橙']
];
echo $array_3[0][0]; // 赤
echo $array_3[1][1]; // 紫

echo '<br>'
?>

<?php
// 4.連想配列

$array_member = [
    'name' => 'イチロー',
    'height' => 180,
    'hobby' => '野球'
];

echo $array_member['name']; // イチロー


?>
