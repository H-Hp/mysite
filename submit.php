<?php
// エラー表示を有効化（開発中のみ）
error_reporting(E_ALL);
ini_set('display_errors', 1);

// POSTデータ取得
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$tel = trim($_POST['tel'] ?? '');
$category = trim($_POST['category'] ?? '');
$message = trim($_POST['message'] ?? '');

// エラーメッセージ格納用
$errors = [];

// バリデーション処理
if ($name === '') {
    $errors[] = 'お名前を入力してください。';
}

if ($email === '') {
    $errors[] = 'メールアドレスを入力してください。';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'メールアドレスの形式が正しくありません。';
}

if ($tel === '') {
    $errors[] = '電話番号を入力してください。';
} elseif (!preg_match('/^\d{10,11}$/', $tel)) {
    $errors[] = '電話番号は10桁または11桁の数字で入力してください。';
}

if ($category === '') {
    $errors[] = '種別を選択してください。';
}

if ($message === '') {
    $errors[] = 'お問い合わせ内容を入力してください。';
}

// エラーがある場合は表示して処理を中断
if (!empty($errors)) {
    echo '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>入力エラー</title></head><body>';
    echo '<h1>入力内容にエラーがあります</h1>';
    echo '<ul style="color:red;">';
    foreach ($errors as $error) {
        echo '<li>' . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . '</li>';
    }
    echo '</ul>';
    echo '<a href="javascript:history.back();">戻る</a>';
    echo '</body></html>';
    exit;
}

// 日本語表示用のカテゴリ変換例（必要に応じて変更）
$category_ja = match ($category) {
    'inquiry' => 'お問い合わせ',
    'support' => 'サポート',
    'other' => 'その他',
    default => '未選択',
};
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>送信完了</title>
    <style>
        body { font-family: sans-serif; background: #fafafa; padding: 20px; }
        .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 5px rgba(0,0,0,0.1); }
        .back-btn { display: inline-block; margin-top: 20px; text-decoration: none; color: white; background: #007bff; padding: 8px 16px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>送信完了しました</h1>
        <div class="info">
            <p><strong>お名前:</strong> <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>メール:</strong> <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>電話番号:</strong> <?= htmlspecialchars($tel, ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>種別:</strong> <?= htmlspecialchars($category_ja, ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>内容:</strong><br><?= nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')); ?></p>
        </div>
        <a href="javascript:history.back();" class="back-btn">戻る</a>
    </div>
</body>
</html>
