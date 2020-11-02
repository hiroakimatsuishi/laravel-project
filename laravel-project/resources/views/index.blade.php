<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">

  <title>ログイン RoadMan's</title>
</head>
<body>
  <div class="background-image clearfix">
    <div class="login-contents half-width contents-on-the-left">
      <p class="header">R<span class="icon"><img class="icon-image" src="images/icon-image.png"></span>adMan's</p>
    </div>
    <div class="login-contents half-width contents-on-the-right">
      <div class="login-content instruction-content">
        <div class="login-instructions">
          <div class="login-instruction instruction-font-style">
            <div>
              <i class="fas fa-pencil-alt instruction-icon"></i>
            </div>
            <p class="instruction-text"><span class="instruction-text-capital">WRITE</span></br> your journy.</p>
          </div>
          <div class="login-instruction instruction-font-style">
            <div>
              <i class="fas fa-users instruction-icon"></i>
            </div>
            <p class="instruction-text"><span class="instruction-text-capital">SHARE</span></br> your journy.</p>
          </div>
          <div class="login-instruction instruction-font-style">
            <div>
              <i class="fas fa-biking instruction-icon"></i>
            </div>
            <p class="instruction-text"><span class="instruction-text-capital">CREATE</span></br> your journy.</p>
          </div>
        </div>
      </div>
      <form action="" method="post" class="login-content">
        <div class="login-parts">
          <p class="input-label">e-mail</p>
          <input class="login-input" type="text" name="" value="" placeholder=" roadmans@mail.com">
        </div>
        <div class="login-parts">
          <p class="input-label">password</p>
          <input class="login-input" type="password" name="" value="" placeholder=" ********">
        </div>
        <div class="login-parts">
          <button type="button" class="btn btn-primary btn-lg btn-block">ログイン</button>
        </div>
        <div class="login-parts">
          <button type="button" class="btn btn-primary btn-lg btn-block">新規登録</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>