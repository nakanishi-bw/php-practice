<?php
// Q1 変数と文字列
$named = '仲西';
$greeting = '私の名前は「' . $named . '」です。';

echo $greeting;

// Q2 四則演算
$num = 5 * 4;

echo $num;
echo ($num/2);

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');

echo date('現在時刻は、Y年m月d日 H時i分s秒です。');

// Q4 条件分岐-1 if文
$device = 'windows';

if($device === 'windows' || $device === 'mac'){
    echo '使用osは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 17;
$adult = ($age >= 18) ? '成人です。' : '未成年です。';

echo $adult;

// Q6 配列
$prefectures = [
    '東京都', 
    '神奈川県', 
    '千葉県', 
    '栃木県', 
    '埼玉県', 
    '群馬県', 
    '茨城県'
];
echo ($prefectures[3] . 'と' . $prefectures[2] . 'は関東地方の都道府県です。');


// Q7 連想配列-1
$tpc = [
    '東京都' => '新宿区', 
    '神奈川県' => '横浜市', 
    '千葉県' => '千葉市', 
    '埼玉県' => 'さいたま市', 
    '栃木県' => '宇都宮市', 
    '群馬県' => '前橋市', 
    '茨城県' => '水戸市'
];

foreach ($tpc as $value) {
    echo $value."\n";
}

// Q8 連想配列-2
foreach ($tpc as $key => $value) {
    if($key === '埼玉県')
    echo $key . 'の県庁所在地は、' . $value . 'です。';
}

// Q9 連想配列-3
$tpc['愛知県'] = '名古屋市';
$tpc['大阪府'] = '大阪市';
$kantou = [
    '東京都',
    '神奈川県',
    '千葉県',
    '埼玉県',
    '栃木県',
    '群馬県',
    '茨城県'
];

foreach($tpc as $key => $value){
    if(in_array($key,$kantou,true)){
    echo $key . 'の県庁所在地は、' . $value . 'です。'."\n";
}else{
    echo $key . 'は関東地方ではありません。'."\n";
}
}

// Q10 関数-1
function hello($name)
{
    echo $name . 'さん、こんにちは。' . "\n";
}

hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price){
    $taxInPrice = $price * 1.1;
    return $price . '円の商品の税込価格は' . $taxInPrice . 'です。';
}

echo calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($fig){
    if($fig %2 === 0){
        return $fig . 'は偶数です。' . "\n";
    }else{
        return $fig . 'は奇数です。' . "\n";
    }
}

echo distinguishNum(6);
echo distinguishNum(11);

// Q13 関数とswitch文
function evaluateGrade($grade){
    switch($grade){
        case 'A';
        case 'B':
            echo '合格です。' . "\n";
            break;
        
        case 'C':
            echo '合格ですが追加課題があります。' . "\n";
            break;
            
        case 'D':
            echo '不合格です。' . "\n";
            break;
            
        default:
            echo '判定不明です。講師に問い合わせてください。' . "\n";
            break;
    }
}

evaluateGrade('B');
evaluateGrade('i');

?>