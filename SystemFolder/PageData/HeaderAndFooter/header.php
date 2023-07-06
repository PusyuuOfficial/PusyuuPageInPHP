<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=6.0, minimum-scale=1.0">
  <meta name='description' content='<?php echo $description; ?>'>
  <meta name="twitter:card" content="Summary_large_Image">
  <meta name="twitter:site" content="@PusyuuOfficial">
  <meta name="twitter:title" content="<?php echo $title; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">
  <meta name="twitter:image" content="https://21emon.wjg.jp/SystemFolder/IconData/logo-black.png">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="../../CssData/Style-1.css">
  <link rel="shortcut icon" href="../../IconData/favicon.ico">
  <script src="../../JsData/Script.js" type="text/javascript" charset="UTF-8"></script>
  <!--
      *----------------------------------
      |  ThisPageVersion: 26.3.0      |
      |  © 2021-2023 By Pusyuu        |
      |  LastUpdate: 2023-07-06       |
      |  ・。・プシューページ㌨       |
    ----------------------------------*
    -->
</head>
<body>
<div id="loading">
  <div class="load_content">
    <img src="../../IconData/avater.jpg" alt="ローディング画像" class="avater_image" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
  </div>
  <div style="margin: 10px;" class="load_content"> みすぼらしい画面消去中。。。少々お待ちください。 </div>
  <div style="margin: 10px;" class="load_content">
    <details class="nav_setumei, center">
      <summary>（ヘルプ）画面が自動的に切り替わりませんか？</summary>
      <div class="box-6">
        <p>次の可能性が考えられます。</p>
        <div class="box-7">
          <h3>このページとの互換性がブラウザに無い↓</h3>
          <p>新しいバージョンのブラウザにアップデートするか別のブラウザで開いてください。</p>
        </div>
        <div class="box-7">
          <h3>途中でキャッシュが削除され、ループ状態になっている↓</h3>
          <p>このページをリロードしてみてください。</p>
        </div>
        <div class="box-7">
          <h3>JavaScriptが無効になっている↓</h3>
          <p>ブラウザ設定で有効になっているか確認してみてください。</p>
        </div>
        <div class="box-7">
          <h3>手動で強制的に画面を切り替える↓</h3>
          <p>こちらのボタンを押して強制的に切り替えてみてください。</p>
          <p>※こちらの機能は、javascriptが有効になってないと機能しません。</p>
          <button style="margin: 10px;" onclick="document.getElementById('loading').classList.add('loaded')">強制切り替え</button>
        </div>
      </div>
    </details>
  </div>
</div>
<header class="header">
  <div class="header_nav">
    <h1 class="header_logo">
      <a href="#hlp">
        <img src="../../IconData/logo-black.png" alt="ロゴ画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
      </a>
    </h1>
    <a href="#modal_ham_nav" class="modal_menu-btn"></a>
    <div id="modal_ham_nav">
      <div class="modal_ham_nav_box">
        <a id="pham" href="#pham" class="close"></a>
        <div class="modal_ham_nav_content">
          <details class="nav_setumei">
            <summary>ユーザビリティ（開く）</summary>
            <p>この画面では、様々なページのセクションにほぼスクロールすることなく、簡単に飛ぶ事ができます。</p>
          </details>
          <nav class="nav_nav">
            <ul class="nav_ul">
              <li class="nav_li"><a class="nav_a" href="../p1/content.php">HOME</a></li>
              <li class="nav_li"><a class="nav_a" href="../p2/content.php">PusyuuLog</a></li>
              <li class="nav_li"><a class="nav_a" href="../p3/content.php">PusyuuRoom</a></li>
              <li class="nav_li"><a class="nav_a" href="../p4/content.php">PusyuuNewsInfo</a></li>
              <li class="nav_li"><a class="nav_a" href="../p5/content.php">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
