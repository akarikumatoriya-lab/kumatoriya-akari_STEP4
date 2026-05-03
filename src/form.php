<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>フォーム入力</title>
        <link rel= "stylesheet" href="style.css">
    </head>
    <body>

        <h1>フォーム入力</h1>

        <form action="confirm.php" method="post">

        <div class="form-group">
            <label>名前：</label>
            <input type="text" name="name" value="<?php echo $_POST['name'] ?? ''; ?>">
        </div>

        <div class="form-group">
            <label>年齢：</label>
            <input type="text" name="age" value="<?php echo $_POST['age'] ?? ''; ?>">
        </div>
        
        <div class="form-group">
            <label>電話番号：</label>
            <input type="tel" name="phone" value="<?php echo $_POST['phone'] ?? ''; ?>">
        </div>
        
        <div class="form-group">
            <label>メール：</label>
            <input type="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>">
        </div>

        <div class="form-group">
            <label>住所：</label>
            <input type="text" name="address" value="<?php echo $_POST['address'] ?? ''; ?>">
        </div>

        <div class="form-group">
            <label>質問：</label>
            <textarea name="question"><?php echo $_POST['question'] ?? ''; ?></textarea>
        </div>

        <div class="form-group">
        <label>性別：</label>
            <select name="gender">
                <option value="">選択してください</option>
                <option value="男性" <?php if(($_POST['gender'] ?? '') === '男性') echo 'selected'; ?>>男性</option>
                <option value="女性" <?php if(($_POST['gender'] ?? '') === '女性') echo 'selected'; ?>>女性</option>
            </select>
        </div>

        <button type="submit">送信</button>
        </form>
    </body>
</html>
