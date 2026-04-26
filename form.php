<!DOCTYPE html>
<html lang="ja">


<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>フォーム入力</h1>

    <form action="form.php" method="post">
        <label for="name">名前：</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">年齢:</label>
        <input type="text" id="age" name="age" required><br><br>

        <label for="phone">電話番号：</label>
        <input type="tel" id="tell" name="tell" required><br><br>

        <label for="email">メールアドレス：</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">住所：</label>
        <input type="text" id="place" name="place" required><br><br>

        <label for="qestion">質問：</label>
        <input type="text" id="question" name="question" required><br><br>

        <select name="jender">性別：
        <option value="">男性</option>
        <option value="">女性</option>
        <option value="">その他</option>
        </select><br><br>

        <buttin type="submit">送信</button>
</form>
    </body>
</html>