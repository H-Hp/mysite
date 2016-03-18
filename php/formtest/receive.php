<?php
// フォームのPOSTデータを取得
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

echo "<h2>送信内容</h2>";
echo "名前: $name <br>";
echo "メール: $email <br>";
echo "メッセージ:<br>" . nl2br($message);
?>
