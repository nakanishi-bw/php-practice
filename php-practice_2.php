<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
    if ($i % 20 === 0) {
        echo 'tic-tac' . "\n";
    } elseif ($i % 4 === 0) {
        echo 'tic' . "\n";
    } elseif ($i % 5 === 0) {
        echo 'tac' . "\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
 //q1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

 //q2
foreach($personalInfos as $index => $info){
    $number = $index + 1;
    echo "{$number}番目の{$info['name']}のメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";
    $number++;
}

 //q3
 $ageList = [25, 30, 18];

 foreach($personalInfos as $index => $info){
     $personalInfos[$index]['age'] = $ageList[$index];
 }
 
 var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
   /* ＊*/  if (!is_int($id) || $id <= 0) {
            echo '正の整数で入力してください。';
        }
        
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(120, '山田');//　追加

echo "学籍番号{$student->studentId}番の生徒は{$student->studentName}です。";

// Q4 オブジェクト-2
$yamada->attend('PHP');//　追加

public function attend($subject)
    {
        echo "{$this->studentName}は{$subject}の授業に参加しました。学籍番号：{$this->studentId}";
    }

// Q5 定義済みクラス



?>