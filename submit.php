<?php
// POSTデータを取得
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$category = $_POST['category'];
$message = $_POST['message'];

echo $name 
echo $email 
echo $tel 
echo $category 
echo $message 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>送信完了</title>
</head>
<body>
    <div class="container">
        <h1>送信完了しました</h1>
        
        <div class="info">
            <p><strong>お名前:</strong> <?php echo $name; ?></p>
            <p><strong>メール:</strong> <?php echo $email; ?></p>
            <p><strong>電話番号:</strong> <?php echo $tel; ?></p>
            <p><strong>種別:</strong> <?php echo $category_ja; ?></p>
            <p><strong>内容:</strong><br><?php echo nl2br($message); ?></p>
        </div>
        
        <a href="javascript:history.back();" class="back-btn">戻る</a>
    </div>
</body>
</html>