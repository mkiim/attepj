<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header class="header">
    <h1>Atte</h1>
    <p>ホーム</p>
    <p>日付一覧</p>
    <p>ログアウト</p>
  </header>
  <main class="main">
    <a href="" class="page_btn">＜</a>
    <?php
      print('Y-G-i');
      ?>
    <a href="" class="page_btn">＞</a>
    <table>
      <tr>
        <th>名前</th>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩開始</th>
        <th>休憩終了</th>
      </tr>
      <tr>
        <td>{{$stamp}}</td>
        <?php
        print(date('G:i:s'));
        ?>
    </table>
  </main>
  <footer class="footer">
    <small>Atte,inc.</small>
  </footer>
</body>

</html>