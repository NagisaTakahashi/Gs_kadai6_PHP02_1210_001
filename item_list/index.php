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
      <img src="https://recouture.s3.ap-northeast-1.amazonaws.com/logo.png" alt="eader_logo" class="header_logo">
    </div>

    <div class="header_2">
      <p>マイクローゼット</p>
    </div>


  </header>

  <main>

    <!-- タブ -->
    <ul class="head_tab">
      <li class="tab tab_active">手持ち服(ALL)</li>
      <li class="tab">お気に入り(仮)</li>
      <li class="tab">その他(仮)</li>
    </ul>

    <div class="filter_wrapper">

      <!-- フィルター -->
      <div class="filter" id="filter">
        <!-- jQueryで記入代用 -->
        <!-- <span>tops</span>
        <span>bottoms</span>
        <span>one-piece</span>
        <span>outer</span>
        <span>inner</span>
        <span>shoes</span>
        <span>bag</span>
        <span>leg-wear</span>
        <span>accessory</span>
        <span>other</span> -->
      </div>

      <!-- ソート -->
      <select name="" class="sort sort_icon" id="">
        <option value=""><p>アイテム別</p></option>
        <option value=""><p>ブランド別</p></option>
        <option value=""><p>シーズン別</p></option>
        <option value=""><p>登録日順</p></option>
        <option value=""><p>購入日順</p></option>
      </select>

    </div>

    <!-- アイテム件数表示 -->
    <div class="item_quantity">
      アイテム件数：<span>ここに表示</span>件   
    </div>

    <!-- アイテムコンテンツ -->

    <div class="category-wrapper">

      <!-- カテゴリー区分 -->
       <!-- jQueryで記入代用 -->
      <!-- <div class="category_bar">
        <span>tops</span>
      </div> -->

      <!-- 登録商品 -->
      <!-- jQueryで記入代用 -->
      <!-- <ul class="product-list">


        <li>
          <div class="product-item">
            <div class="product-item__img"><img src="img/item/bg_upload.png" alt="アイテム画像"></div>
            <div class="product-item__info">
              <p class="product-item__brand">ブランド名（●文字まで）</p>
              <p class="product-item__name" >アイテム名（●文字まで）</p>
              <p class="product-item__sku" >サイズ / カラー</p>
              <div class="product-item__desc_wrapper">
                <p class="product-item__desc">顧客記入アイテム名メモ顧客記入アイテム名メモ顧客記入アイテム名メモ</p>
                <img src="img/icon_pencil.svg" alt="鉛筆" class="name_edit">
                <div class="product-item__bar"></div>
              </div>
              <div class="btn-itemdetail_wrapper">
                <a href="#" class="btn-itemdetail">このアイテムを見る</a>
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="product-item">
            <div class="product-item__img"><img src="img/item/bg_upload.png" alt="アイテム画像"></div>
            <div class="product-item__info">
              <p class="product-item__brand">ブランド名（●文字まで）</p>
              <p class="product-item__name" >アイテム名（●文字まで）</p>
              <p class="product-item__sku" >サイズ / カラー</p>
              <div class="product-item__desc_wrapper">
                <p class="product-item__desc">顧客記入アイテム名メモ顧客記入アイテム名メモ顧客記入アイテム名メモ</p>
                <img src="img/icon_pencil.svg" alt="鉛筆" class="name_edit">
                <div class="product-item__bar"></div>
              </div>
              <div class="btn-itemdetail_wrapper">
                <a href="#" class="btn-itemdetail">このアイテムを見る</a>
              </div>
            </div>
          </div>
        </li>


        <li>
          <div class="product-item">
            <div class="product-item__img"><img src="img/item/bg_upload.png" alt="アイテム画像"></div>
            <div class="product-item__info">
              <p class="product-item__brand">ブランド名（●文字まで）</p>
              <p class="product-item__name" >アイテム名（●文字まで）</p>
              <p class="product-item__sku" >サイズ / カラー</p>
              <div class="product-item__desc_wrapper">
                <p class="product-item__desc">顧客記入アイテム名メモ顧客記入アイテム名メモ顧客記入アイテム名メモ</p>
                <img src="img/icon_pencil.svg" alt="鉛筆" class="name_edit">
                <div class="product-item__bar"></div>
              </div>
              <div class="btn-itemdetail_wrapper">
                <a href="#" class="btn-itemdetail">このアイテムを見る</a>
              </div>
            </div>
          </div>
        </li>


        <li>
          <div class="product-item">
            <div class="product-item__img"><img src="img/item/bg_upload.png" alt="アイテム画像"></div>
            <div class="product-item__info">
              <p class="product-item__brand">ブランド名（●文字まで）</p>
              <p class="product-item__name" >アイテム名（●文字まで）</p>
              <p class="product-item__sku" >サイズ / カラー</p>
              <div class="product-item__desc_wrapper">
                <p class="product-item__desc">顧客記入アイテム名メモ顧客記入アイテム名メモ顧客記入アイテム名メモ</p>
                <img src="img/icon_pencil.svg" alt="鉛筆" class="name_edit">
                <div class="product-item__bar"></div>
              </div>
              <div class="btn-itemdetail_wrapper">
                <a href="#" class="btn-itemdetail">このアイテムを見る</a>
              </div>
            </div>
          </div>
        </li>


      </ul> -->

    </div>








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
  <script src="data.js"></script>
  <script src="main.js"></script>

  <!-- Firebase -->

  <script type="module" src="simplewakeru.js"></script>

  <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.0/firebase-app.js";
    import { getDatabase, ref, push, set, onChildAdded, remove, onChildRemoved } 
    from "https://www.gstatic.com/firebasejs/9.1.0/firebase-database.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    const firebaseConfig = {
      apiKey: "AIzaSyAaUPYE_xtV_Puo8xdMPzoxlT5JEYitENM",
      authDomain: "mycloset-test.firebaseapp.com",
      projectId: "mycloset-test",
      storageBucket: "mycloset-test.appspot.com",
      messagingSenderId: "914107919879",
      appId: "1:914107919879:web:79ffee4407a255348804a2"
    };
  
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
  </script>



  <!-- PHP記述 -->

  <!-- ★XSS対策関数：セキュリティ対策追加する★ -->

  <?php

    // XSS対策関数
    function h($val){
      return htmlspecialchars($val,ENT_QUOTES);
    }

    //記述内容の取得
    $review = $_POST["review"];
    // var_dump($review); //変数を表示して中身チェック

    //投稿時間の取得
    $time = date('Y-m-d H:i:s');
    // var_dump($time); //変数を表示して中身チェック
    
    // ファイルに書き込み
      //1.ひらく
      $file = fopen('../data/data.txt','a'); //aは追加書き込みのみの指定
      //2.書く
      fwrite($file, $time . "\t" .  h($review) . "\n");
      //3.閉じる
      fclose($file);
    //文字作成
  ?>


</body>
</html>