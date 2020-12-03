<?php

// データ受け取り
$deadline = $_POST["deadline"];
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$todo = $_POST["todo"];
$eat = $_POST["eat"];
$time = $_POST["time"];
$cinema = $_POST["cinema"];
$book = $_POST["book"];
$music = $_POST["music"];
$who = $_POST["who"];




// データ書き出し divを入れた
$write_data = "{$deadline} / {$name} / {$mobile}  /  Q1. {$todo} / Q2. {$eat} / Q3. {$time} / Q4.  {$cinema} / Q5. {$book} / Q6.  {$music} / Q7.  {$who}\n "; // スペース区切りで最後に改行

$file = fopen('data/data.csv', 'a'); // ファイルを開く 引数はa
flock($file, LOCK_EX); // ファイルをロック
fwrite($file, $write_data); // データに書き込み，
flock($file, LOCK_UN); // ロック解除
fclose($file); // ファイルを閉じる
header("Location:todo_txt_input.php"); // 入力画面に移動
