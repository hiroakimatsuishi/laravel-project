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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>トップページ</title>
</head>
<body>
  <header class="col-md-12 header">
    <p class="logo-text">R<span class="icon"><img class="icon-image" src="images/icon-image.png"></span>adMan's</p>
  </header>
  <main class="container-fluid ">
    <div class="row">
      <nav class="col-md-2 side-nav">
        <ul>
          <li><a href="#">トップページ</a></li>
          <li><a href="#">マイページ</a></li>
          <li><a href="#">アイウエオ</a></li>
          <li><a href="#">カキクケコ</a></li>
          <li><a href="#">サシスセソ</a></li>
        </ul>
      </nav>
      <div class="col-md-10 search-box">
        <div class="search-box-inner">
          <div class="row search-content">
            <p class="col-md-2 input-labels">出発地点</p>
            <div class="row col-md-9">
              <div class="input-labels colons">:</div>
              <p class="col-md-3 input-labels">北海道</p>
            </div>
          </div>

          <div class="row search-content">
            <p class="col-md-2 input-labels">目的地</p>
            <div class="row col-md-9">
              <div class="input-labels colons">:</div>
              <div class="input-group mb-3 col-md-9">
                <input class="form-control" type="text" placeholder="キーワード">
              </div>
            </div>
          </div>

          <div class="row search-content">
            <p class="col-md-2"></p>
            <div class="row col-md-9">
              <div class="blank"></div>
              <select class="form-control col-md-3 search-input">
                <option>都道府県</option>
              </select>
              <select class="form-control col-md-3 search-input">
                <option>市区町村</option>
              </select>
              <select class="form-control col-md-3 search-input">
                <option>ジャンル</option>
              </select>
            </div>
          </div>

          <div class="row">
            <p class="col-md-2"></p>
            <div class="col-md-9">
              <div class="blank"></div>
              <div id="map" class="gmap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="col-md-12 footer">©︎Hiroaki 2020</footer>
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>