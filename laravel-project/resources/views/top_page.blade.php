<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/top_page.css">
  <title>トップページ</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <main class="background-image clearfix">
  <div id="app" class="content-box">
    <div>
      <p class="logo-text">R<span class="icon"><img class="icon-image" src="images/icon-image.png"></span>adMan's</p>
    </div>
    <calendar-component></calendar-component>
  </div>
  <div class="content-box"></div>
  </main>
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>