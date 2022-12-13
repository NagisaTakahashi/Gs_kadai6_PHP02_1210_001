
//テーマ：①functionでまとめる②JSファイルの中で共通で使える変数を持ってみる



const itemCategory = ["tops","bottoms","one-piece","outer","inner","shoes","bag","leg-wear","accessory","other"];


//初期表示設定
for (let i = 0; i < itemCategory.length; i++){
  
  //上部Filterへのアイテムカテゴリー代入
  let filter_span = `
  <span>${itemCategory[i]}</span>
  `;
  $("#filter").append(filter_span); 

  //カテゴリーバーの設置
  let category_wrapper = `

  <div class="category-wrapper">

  <!-- カテゴリー区分 -->
  <div class="category_bar">
    <span>${itemCategory[i]}</span>
  </div>

  <!-- 登録商品 -->
  <ul class="product-list">

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
  
  </ul>
  
  `;

  $("main").append(category_wrapper);
};


// function add_item (){

// };


// //初期表示設定
// for (let i = 0; i < itemCategory.length; i++){
//   add_filter();
// };


// function add_filter(){
//   let html = `
//   <span>${itemCategory[i]}</span>
//   `;
//   $("#filter").append(html); //上部Filterへのアイテムカテゴリー代入

// };