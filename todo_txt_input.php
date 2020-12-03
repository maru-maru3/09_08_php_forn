<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSSへのリンク -->
  <!-- <link rel="stylesheet" href="css/destyle.css"> -->
  <link rel="stylesheet" href="css/layout.css">
  <title></title>


<body class="img_area">

  <!-- 追加入力した入力漏れアラート機能 -->
  <?php
  // $name = $_POST['name'];

  // if ($name == '') {
  //   alart 'お名前が入力されていません。';
  // } else {
  //   print 'ようこそ';
  //   print $name;
  //   print '様';
  // }

  // 
  ?>

  <div class="all-wrapper">

    <form action="todo_txt_create.php" method="POST">
      <fieldset>
        <legend></legend>
        <a href="todo_txt_read.php">結果一覧</a>
        <br class="space1">
        <div>
          アンケート記入日: <input type="date" name="deadline">
        </div>
        <br>
        <span>
          <h1>休日について質問。即答でお願いします。</h1>
        </span>
        <div>
          <div>
            <div class="input-wrapper">
              <p>name: <input type="text" name="name"></p>
              <p> 　　　mobile: <input type="text" name="mobile"></p>
            </div>
            <ul>
              <li><span class="q">質問１:</span> フルで何もない日。何する？ <input type="text" name="todo"></li>
              <li><span class="q">質問２:</span> 10時に起きた朝、何食べる？ <input type="text" name="eat"></li>
              <li><span class="q">質問３:</span> タイムスケジュールを教えて <input type="text" name="time"></li>
              <li><span class="q">質問４:</span> 休日に見るならどんな映画？ <input type="text" name="cinema"></li>
              <li><span class="q">質問５:</span> 一日中どっぷり読みたい本は？ <input type="text" name="book"></li>
              <li><span class="q">質問６:</span> ライブに行くなら誰のに行く？ <input type="text" name="music"></li>
              <li><span class="q">質問７:</span> 徹夜明け。ベストな過ごし方は？ <input type="text" name="who"></li>

            </ul>
            <div class="submit-box"><button class="submit">Submit</button></div>
          </div>
      </fieldset>
    </form>
  </div>
</body>

</html>