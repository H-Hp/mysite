<?php
// 入力データ取得
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

$errors = [];

// バリデーション
if ($name === '') {
    $errors[] = "名前を入力してください。";
}

if ($email === '') {
    $errors[] = "メールアドレスを入力してください。";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "メールアドレスの形式が正しくありません。";
}

if ($message === '') {
    $errors[] = "メッセージを入力してください。";
}

if (count($errors) > 0) {
    echo "<h3>エラーがあります:</h3><ul>";
    foreach ($errors as $e) {
        echo "<li>$e</li>";
    }
    echo "</ul><a href='contact.php'>戻る</a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>確認画面</title>
</head>
<body>
  <h2>確認画面</h2>
  <p>名前: <?= htmlspecialchars($name, ENT_QUOTES) ?></p>
  <p>メール: <?= htmlspecialchars($email, ENT_QUOTES) ?></p>
  <p>メッセージ:<br><?= nl2br(htmlspecialchars($message, ENT_QUOTES)) ?></p>
  <a href="javascript:history.back();">修正する</a>
</body>
</html>
