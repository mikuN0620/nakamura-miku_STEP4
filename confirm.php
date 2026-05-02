<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>チェック</title>
    <link rel="stylesheet" href="stylesheet">
</head>

<body>
    <h1>入力内容確認</h1>

<?php
      //ポストリクエストから名前を取得
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $age = $_POST["age"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $place = $_POST["address"];
        $qestion = $_POST["qestion"];
        $jender = $_POST["jender"];


        //入力規則
        if (!preg_match("/^[ぁ-んァ-ン一-龠A-Za-z\s　]+$/u", $name)) {
          echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
      
      } else if (!is_numeric($age) || $age < 0 || $age > 150) {
          echo "<p>年齢は0から150の間で入力してください。</p>";
      
      } else if (!preg_match("/^[0-9\-]+$/", $phone)) {
          echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";
      
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<p>メールアドレスの形式が正しくありません。</p>";
      
      } else if (!preg_match("/^[ぁ-んァ-ン一-龠A-Za-z0-9\s　]+$/u", $address)) {
          echo "<p>住所はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
      
      } else {
          echo "<p>名前:" . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>";
          echo "<p>年齢:" . htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . "</p>";
          echo "<p>電話番号:" . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . "</p>";
          echo "<p>メールアドレス:" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
          echo "<p>住所:" . htmlspecialchars($address, ENT_QUOTES, 'UTF-8') . "</p>";
          echo "<p>質問:" . htmlspecialchars($question, ENT_QUOTES, 'UTF-8') . "</p>";
          echo "<p>性別:" . htmlspecialchars($gender, ENT_QUOTES, 'UTF-8') . "</p>";
      }

    }
?>
    <a href="form.php">戻る</a>

    </body>
</html>