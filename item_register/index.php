<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>マイクローゼット</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <header>

    <div class="header_1">
      <img src="https://recouture.s3.ap-northeast-1.amazonaws.com/logo.png" alt="header_logo" class="header_logo">
    </div>

  </header>

  <main>

    <div class="main_image">

  
      <div id="selbtn">
        <img src="../img/item/bg_upload.png" alt="商品画像" id="myimg" >
      </div>
      <span id="tag_rfw">既製品</span>
      <span id="tag_rec">Recouture品</span>

      <!-- <form method="post" enctype="multipart/form-data">
        <input type="file" name="main_image" accept="image/*">   -->
        <!-- <button type="submit">送信する</button> -->
      <!-- </form> -->

    </div>


    <!-- ここからアップロード関連 -->

    <label>ImageName</label>
    <input type="text" id="namebox">
    <label id="extlab"></label>
    <label id="upprogress"></label>


    <!-- 商品詳細 -->
    <div class="item_detail_wrapper">
      <p class="item_detail_brandname">brand name</p>
      <p class="item_detail_itemname">item name</p>
      <p class="item_detail_sku">Color / size</p>
      <p class="item_detail_price">¥PRICE</p>
    </div>


    <!-- 寸法 -->
    <div class="category_bar">
      <span>寸法</span>
    </div>


    <!-- 寸法タブ選択ここから -->
    <div class="tab__area">
      <!-- タブここから -->
      <ul class="tab__list">
        <li class="tab__item selected"> <a href="#tab_1" class="js-tab-link selected">Recouture公式</a> </li>
        <li class="tab__item"> <a href="#tab_2" class="js-tab-link">Recouture採寸</a> </li>
        <li class="tab__item"> <a href="#tab_3" class="js-tab-link">セルフ採寸</a> </li>
      </ul>
      <!-- タブここまで -->
      <!-- コンテンツここから -->
      <div class="tab__inner js-tab-inner">
        <div id="tab_1" class="js-tab-box">
          <p>タブ01の内容が入ります。タブ01の内容が入ります。タブ01の内容が入ります。タブ01の内容が入ります。</p>
        </div>
        <div id="tab_2" class="js-tab-box">
          <p>タブ02の内容が入ります。タブ02の内容が入ります。タブ02の内容が入ります。タブ02の内容が入ります。</p>
        </div>
        <div id="tab_3" class="js-tab-box">
          <p>タブ03の内容が入ります。タブ03の内容が入ります。タブ03の内容が入ります。タブ03の内容が入ります。</p>
        </div>
      </div>
      <!-- コンテンツここまで -->
    </div>
    <!-- 寸法タブ選択ここまで -->


    <!-- 仕様 -->
    <div class="category_bar">
      <span>仕様</span>
    </div>

    <div class="tab__inner">
      <p>仕様コメントが入ります。仕様コメントが入ります。仕様コメントが入ります。</p>
    </div>


    <!-- STAFFコメント -->
    <div class="category_bar">
      <span>STAFFコメント</span>
    </div>

    <div class="tab__inner">
      <p>スタッフコメントが入ります。スタッフコメントが入ります。スタッフコメントが入ります。</p>
    </div>

    <!-- 購入タイムライン -->
    <div class="category_bar">
      <span>購入タイムライン</span>
    </div>

    <div class="tab__inner">
      <p>購入タイムラインが入ります。購入タイムラインが入ります。購入タイムラインが入ります。</p>
    </div>

    <!-- レビュー -->
    <div class="category_bar">
      <span>REVIEW</span>
    </div>


 
    <div class="btn_wrapper">
      <form method="post" action="insert.php">
        <!-- <div class="textarea-wrapper"> -->
          <p>総合レビュー</p><input type="text" name="review_rate" >

          <!-- 評価レーティング -->
          <span class="star-rating">
            <input type="radio" name="rating" value="1"><i></i>
            <input type="radio" name="rating" value="2"><i></i>
            <input type="radio" name="rating" value="3"><i></i>
            <input type="radio" name="rating" value="4"><i></i>
            <input type="radio" name="rating" value="5"><i></i>
          </span>
          <strong class="choice">Choose a rating</strong>





          <textarea type="text" name="review_comment" class="text_inner" id="review" placeholder="レビューコメントを入力してね！"></textarea>
   
        <!-- </div> -->
        <button class="btn" id="upbtn" type=”submit” value="send">保存</button>
      </form>
    </div>


    <!-- 絵型 -->
    <div class="category_bar">
      <span>絵型</span>
    </div>

    <div class="tab__inner">
      <p>絵型が入ります。絵型が入ります。絵型が入ります。</p>
    </div>




    <div class="btn_wrapper">
      <button class="btn" id="returnbtn" >戻る</button>
      <!-- <form action="../item_list/index.php" method="post">
        <button class="btn" id="upbtn" type=”submit” value="保存">保存</button> -->
      </form>
    </div>




    <!-- ここまでアップロード関連おわり -->










  </main>







  <footer>

    <div class="footer">
      
      <ul class="footer-icons">
        <Li class="footer_list"><img src="img/footer_bodyinner2.svg" alt="home"><p>ボディ</p></Li>
        <Li class="footer_list"><img src="img/footer_favorite.svg" alt="favorite"><p>お気に入り</p></Li>
        <Li class="footer_list"><img src="img/footer_store.svg" alt="fitting"><p>試着室</p></Li>
        <Li class="footer_list"><img src="img/footer_hanger.svg" alt="myclothes"><p>手持ち服</p></Li>
        <Li class="footer_list"><img src="img/footer_account.svg" alt="account"><p>アカウント</p></Li>
      </ul>

    </div>

  </footer>





  



  <!-- JQueryが先!! -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- 次にJS! -->
  <script src="main.js"></script>
  <!-- <script src="data.js"></script> -->

  <!-- Firebase -->
  <script type="module" src="firestore.js"></script>


</body>
</html>