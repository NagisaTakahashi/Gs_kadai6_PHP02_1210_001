<?php

  // XSS対策関数
  // function h($val){
  //   return htmlspecialchars($val,ENT_QUOTES);
  // }

  // 1.ファイルを開く
  // ファイルを開く。モードは'r' = 読み込みのみでオープン。
  $openFile = fopen('../data/data.txt', 'r');

  // 2.ファイル内容を1行ずつ読み込んで出力
  // ファイル内容を1行ずつ読み込んで出力
  while ($str = fgets($openFile)) {
    // echo h(nl2br($str));
    echo nl2br($str);
  };

  //セキュリティ対策できてるかチェック
  // <script>alert(1111);</script> 


  // 3.ファイルを閉じる
  fclose($openFile);

?>



