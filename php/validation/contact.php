<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
</head>
<body>
  <h2>お問い合わせ</h2>
  <form action="confirm.php" method="POST">
    名前: <input type="text" name="name"><br>
    メール: <input type="text" name="email"><br>
    メッセージ:<br>
    <textarea name="message"></textarea><br>
    <input type="submit" value="確認">
  </form>
</body>
</html>
