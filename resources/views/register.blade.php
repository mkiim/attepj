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
  </header>
  <main class="main">
    <form action="index.php" method="POST">
      @csrf
      <input type="text" name="name"　placeholder="名前">
      <input type="email" name="email" placeholder="メールアドレス">
      <input type="text" name="password" placeholder="パスワード">
      <input type="text" name="password" placeholder="確認用パスワード">
      <input type="submit" name="btn" value="会員登録">
      <?php 
      print(htmlspecialchars($_POST['name'],ENT_QUOTES));
      ?>
    </form>
      <div>アカウントをお持ちの方はこちらから</div>
      <a href="login.blade.php" class="login_btn">ログイン</a>
  </main>
  <footer class="footer">
    <small>Atte,inc.</small>
  </footer>
</body>
</html>