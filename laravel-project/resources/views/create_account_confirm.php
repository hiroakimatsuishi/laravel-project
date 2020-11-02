<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/create_account_confirm.css">
  <title>確認画面</title>
</head>
<body>
  <div class="wrapper">
    <div class="logo">
      <p class="logo-text">R<span class="icon"><img class="icon-image" src="images/icon-image.png"></span>adMan's</p>
    </div>
    <div class="form-inner">
      <form class="create-account" action="" method="post">
        <h1 class="create-account-header">こちらの内容で登録しますか？</h1>
        <div class="create-account-parts">
          <div class="clearfix confirm-contents">
            <div class="confirm-content confirm-label">
              <p>アカウント名</p>
            </div>
            <div class="confirm-content confirm-info">
              <p>roadman</p>
            </div>
          </div>
          <div class="clearfix confirm-contents">
            <div class="confirm-content confirm-label">
              <p>メールアドレス</p>
            </div>
            <div class="confirm-content confirm-info">
              <p>roadman@mail.com</p>
            </div>
          </div>
          <div class="clearfix confirm-contents">
            <div class="confirm-content confirm-label">
              <p>パスワード</p>
            </div>
            <div class="confirm-content confirm-info">
              <p>12345678</p>
            </div>
          </div>
          <div class="confirm-contents">
            <button type="submit" class="btn btn-primary btn-lg btn-block">アカウントを作成する</button>
          </div>
        </div>
        <div class="to-login-page">
          <a href="" class="to-login-text">アカウントをお持ちの方はこちら</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>