<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php echo Asset::css('test/header.css');?>
  </head>
  <body>
    <div class="main">
      <div class="header">
        <div class="header-top">
            <div class="navigator">
              <ul class="navi-list">
                <li><a href="#">TOP</a></li>
                <li><a href="#">注文</a></li>
                <li><a href="#">メニュー</a></li>
                <li><a href="#">ピザどこ？</a></li>
              </ul>
            </div>
        </div>
        <div class="header-bottom">
            <div class="logo">
              <?php echo Asset::img('test/logo.png');?>
            </div>
            <div class="info-bar">
                <div class="info-login">
                  ログイン
                </div>
                <div class="info-signup">
                  新規登録
                </div>
                <div class="info-cart">
                    商品カート
                </div>
            </div>
        </div>
      </div>

      <div class="inner">
        <?php echo $content ?>
      </div>

    </div>
  </body>
</html>
