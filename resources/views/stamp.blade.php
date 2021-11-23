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
    <h2>{{$guest}}</h2>
  <form action="" method="POST">
    <button type="submit" name="start">勤務開始</button>
    <button type="submit" name="stop">勤務終了</button>
    <button type="submit" name="start">休憩開始</button>
    <button type="submit" name="stop">休憩終了</button>
  </form>
  </main>
  <footer class="footer">
    <small>Atte,inc.</small>
  </footer>
</body>
</html>