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

// ↓この閉じ括弧は省略することができる
?>

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

$x_member_array = [
    'YOSHIKI' => [
        'part' => 'Dr',
        'age' => 54,
        'is_dead' => 'false'
    ],
    'Toshl' => [
        'part' => 'Vo',
        'age' => 54,
        'is_dead' => 'false'
    ],
    'PATA' => [
        'part' => 'Gt',
        'age' => 54,
        'is_dead' => 'false'
    ],
    'Hide' => [
        'part' => 'Gt',
        'age' => 33,
        'is_dead' => 'true'
    ],
    'HEATH' => [
        'part' => 'Ba',
        'age' => 52,
        'is_dead' => 'false'
    ],
    'SUGIZO' => [
        'part' => 'Gt/Vn',
        'age' => 51,
        'is_dead' => 'false'
    ],
    'TAIJI' => [
        'part' => 'Ba',
        'age' => 45,
        'is_dead' => 'true'
    ]
];

echo $x_member_array['YOSHIKI']['age']; // 54
echo $x_member_array['PATA']['is_dead']; // false

echo '<br>'
?>

<?php
// 5.演算子

// 四則演算子
echo 1 + 2; // 3
echo 5 - 3; // 2
echo 2 * 3; // 6
echo 8 / 4; // 2
echo 10 % 3; // 1

// 比較演算子
echo 2 >= 1; // 1
// == ではなく ===を使う？
echo 'abc' === 'acb'; //
echo 'abc' !== 'acb'; // 1

// 論理演算子
echo 'abc' === 'acb' or 'abc' !== 'acb'; // 1

echo '<br>'
?>

<?php
// 6. 条件分岐

// if文
/*
if (条件){
    条件が真なら実行
}
*/

$height = 90;

if ($height === 90){
    echo '身長は' . $height . 'cmです'; // 出力される
}

/*
  == と ===の違い
  == → 一致
  === → 型も一致
*/

$height = '90'; // 文字列の90

if ($height === 90){ // 条件は数字の90
    echo '身長は' . $height . 'cmです'; // この場合、型が違うため出力されない
}

echo '<br>';

// else文

$signal = 'red';

if ($signal === 'red'){
    echo 'とまれ';
}elseif ($signal === 'yellow'){
    echo '一旦停止';
}else{
    echo '進む';
}

echo '<br>';

// ifの中にif(ネスト)
$signal = 'blue';
$speed = 80;

if ($signal === 'blue'){
    if ($speed >= 80){
        echo 'スピード違反'; // 出力される
    }
}// ネストはできるだけしたくない

echo '<br>';

$height = 90;

if ($height >= 90){
    echo '身長は90cm以上です';
}

if ($height <= 90){
    echo '身長は90cm以下です';
}

$height = 91;

if ($height !== 90){ // 基本 !==を使う。 != は使わない？
    echo '身長は90cmではありません';
}

echo '<br>';

// 三項演算子
// if else
//条件 ? 真 : 偽 (Rubyと一緒)

$math = 80;

$comment = $math >= 80 ? '80以上' : '80以下';

echo $comment; // 80以上

echo '<br>';
?>

<?php
// 7. foreach文
foreach ($x_member_array as $member => $info){
    echo '名前は' . $member . 'です。';
    echo '担当は' . $info['part'] . 'です。';
    echo '年齢は' . $info['age'] . 'です。';
    if ($info['is_dead'] === 'true'){
        echo '<br>';
    }else{
        echo 'まだ生きてます。<br>';
    }
}

echo '<br>';
?>

<?php
// 8. for, while

/*
    forとwhileの使い分け
    for -> 繰り返す数が決まっている時
    while -> 繰り返す数が決まっていない時
 */

// for
for($i = 0; $i < 10; $i++){ //$iが10以下の間、{}の中を実行し、$iをインクリメントする
    echo $i;
}

echo '<br>';

// while
$j = 0;
while($j <5){ // $jが5より少ない間
    echo $j; // $jを出力する
    $j++; // $jをインクリメントする
}// 01234

echo '<br>';
?>

<?php
// 9.switch文

// 注意: if文の方が見やすい、読みやすいので、基本的にはif文を使う

$color = 'red';

switch ($color){
    case 'red':
        echo '赤色';
        break; // breakを記述しないと、そのまま下に流れていってしまう(続けてblueが実行されてしまう)
    case 'blue':
        echo '青色';
        break;
    case 'yellow':
        echo '黄色';
        break;
    case 'green':
        echo '緑色';
        break;
    case 'orange':
        echo '橙色';
        break;
    default: // 他に当てはまらない時
        echo '何色か分かりません';
}

?>
