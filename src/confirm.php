<?php
$errors = [];

//名前チェック
if (empty($_POST["name"])){
    $errors[] = "名前が未入力です";
} else {
    if (!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z]+$/u", $_POST["name"])){
        $errors[] = "名前はひらがな、カタカナ、漢字、英字のみ使用できます";
    }
}

//年齢チェック
if (empty($_POST["age"])){
    $errors[] = "年齢が未入力です";
} else {
    $age = $_POST["age"];
    if (!is_numeric($age) || $age < 0 || $age > 150){
        $errors[] = "年齢は0〜150で入力してください";
    }
}

//電話番号チェック
if (empty($_POST["phone"])){
    $errors[] = "電話番号が未入力です";
} else {
    if (!preg_match("/^[0-9-]+$/", $_POST["phone"])){
        $errors[] = "電話番号は半角英数字とハイフンのみ使用できます";
    }
}

//メールチェック
if (empty($_POST["email"])){
    $errors[] = "メールアドレスが未入力です";
} else {
    if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $errors[] = "メールアドレスの形式が正しくありません";
    }
}

//住所チェック
if (empty($_POST["address"])){
    $errors[] = "住所が未入力です";
} else {
    if (!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z0-9\s\-]+$/u", $_POST["address"])){
        $errors[] = "住所はひらがな、カタカナ、漢字、英字のみ使用できます";
    }
}

//質問
if (empty($_POST["question"])){
    $errors[] = "質問が未入力です";
}

//性別
if (empty($_POST["gender"])){
    $errors[] = "性別が選択されていません";
}
?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>確認画面</title>
    </head>
    <body>
        <?php if (empty($errors)): ?>
            <h2>入力内容確認</h2>
            <?php

                echo "名前：" . htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8') . "<br>";
                echo "年齢：" . htmlspecialchars($_POST["age"], ENT_QUOTES, 'UTF-8') . "<br>";
                echo "電話番号：" . htmlspecialchars($_POST["phone"], ENT_QUOTES, 'UTF-8') . "<br>";
                echo "メール：" . htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8') . "<br>";
                echo "住所：" . htmlspecialchars($_POST["address"], ENT_QUOTES, 'UTF-8') . "<br>";
                echo "質問：" . htmlspecialchars($_POST["question"], ENT_QUOTES, 'UTF-8') . "<br>";
                echo "性別：" . htmlspecialchars($_POST["gender"], ENT_QUOTES, 'UTF-8') . "<br>";
            ?>
            <?php else: ?>
                <h2>エラーがあります</h2>
                <?php foreach ($errors as $e): ?>
                    <?php echo $e . "<br>"; ?>
                <?php endforeach; ?>

                <br>
                <a href="form.php">戻る</a>
            <?php endif; ?>
    </body>
</html>