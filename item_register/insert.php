<?php 
// ini_set('display_errors', 'On');  // ここ：エラーを表示させるようにしてください
// error_reporting(E_ALL);           //ここ：全てのレベルのエラーを表示してください

//1. POSTデータ取得
$comment = $_POST['review_comment'];
$rate = $_POST['review_rate'];


//2. DB接続します（tryからの５行は基本コピペ）
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//3．データ登録SQL作成



// 3-1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO
                        item_review(id, review_comment, review_rate, date)
                        VALUES(NULL, :review_comment, :review_rate, sysdate())");

//  3-2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':review_comment', $comment, PDO::PARAM_STR);
$stmt->bindValue(':review_rate', $rate, PDO::PARAM_INT);

//  3-3. 実行
$status = $stmt->execute();

//4．データ登録処理後
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {

//5．index.phpへリダイレクト(elseの場合の処理)
  header('Location: index.php');
}

?>


<!-- 次に実装すること -->
<!-- 入力されたら、新しいアイテムページを生成してそこに保存する＋表示する -->
<!-- レーティングの星の実装 -->


