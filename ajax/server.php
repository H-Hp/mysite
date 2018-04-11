<?php
// PHP側で配列データを用意
$data = array(
  "status" => "success",
  "message" => "こんにちは！PHPサーバーからのデータです。"
);

// JSONに変換して出力
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($data);
?>