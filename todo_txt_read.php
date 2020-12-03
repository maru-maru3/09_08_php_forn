<?php

$str = ''; // 出力用の空の文字列
$file = fopen('data/data.csv', 'r'); // ファイルを開く（読み取り専用）
flock($file, LOCK_EX); // ファイルをロック
if ($file) {
  while ($line = fgets($file)) { // fgets()で1行ずつ取得→$lineに格納
    //   $str .= "<tr><td>{$line}</td></tr>"; // 取得したデータを$strに入れる
    // }

    $str .=
      "<div><tr><td>{$line}<br><p>-------------------------------------------------------------------------------------------------------------------------</p>
      </td></tr></div>"; // 取得したデータを$strに入れる
  }
}
flock($file, LOCK_UN); // ロック解除
fclose($file); // ファイル閉じる

// （$strに全部の情報が入る！）








?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/layout.css">
  <title>textファイル書き込み型todoリスト（一覧画面）</title>
</head>

<body class="img_area">
  <div class="all-wrapper">
    <fieldset>
      <legend></legend>
      <a href="todo_txt_input.php">入力画面に戻る</a>
      <table class="ichiran">
        <thead>
          <tr>
            <th>
              <h1>アンケート結果<?= $str ?></h1>
            </th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
      <div class="obake-box">
        <div><a href="todo_txt_input.php"><img class="obake" src="img/ghosts.png" alt=""></a></div>
        <div class="space1"><a href="todo_txt_input.php"></a></div>
        <div class='hukkidashi'><a href="todo_txt_input.php">HOGE, HOGE</a></div>
        </a>
      </div>
    </fieldset>
  </div>
</body>

</html>