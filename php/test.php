<?php
// if文
$age = 20;
if ($age >= 18) {
    echo "大人です<br>";
} else {
    echo "未成年です<br>";
}

// 配列とループ
$fruits = ["りんご", "バナナ", "みかん"];
foreach ($fruits as $fruit) {
    echo "果物: $fruit<br>";
}

// 連想配列
$user = [
    "name" => "あいｐふぁ",
    "email" => "fasfl@yahoo.com"
];

echo "名前: " . $user["name"] . "<br>";
echo "メール: " . $user["email"] . "<br>";
?>
