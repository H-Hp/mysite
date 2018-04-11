<?php
// POSTデータを取得
$name = isset($_POST['name']) ? $_POST['name'] : '名無し';

// レスポンスデータを作成
$response = array(
  "status" => "success",
  "message" => $name . " さん、こんにちは！PHPサーバーからの応答です。"
);

// JSON形式で出力
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($response);
?>