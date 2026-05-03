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
            <input type="text" id="name" name="name"
            value="<?= htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <div class="form-group">
            <label>年齢：</label>
            <input type="text" id="age" name="age"
            value="<?= htmlspecialchars($_POST['age'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <div class="form-group">
            <label>電話番号：</label>
            <input type="tel" id="phone" name="phone"
            value="<?= htmlspecialchars($_POST['phone'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <div class="form-group">
            <label>メール：</label>
            <input type="email" id="email" name="email"
            value="<?= htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <div class="form-group">
            <label>住所：</label>
            <input type="text" id="address" name="address"
            value="<?= htmlspecialchars($_POST['address'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <div class="form-group">
            <label>質問：</label>
            <textarea id="question" name="question"><?= htmlspecialchars($_POST['question'] ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
        </div>

        <div class="form-group">
        <label for="gender">性別：</label>
            <select id="gender" name="gender">
                <option value="">選択してください</option>
                <option value="男性" <?= (($_POST['gender'] ?? '') === '男性') ? 'selected' : '' ?>>男性</option>
                <option value="女性" <?= (($_POST['gender'] ?? '') === '女性') ? 'selected' : '' ?>>女性</option>
            </select>
        </div>

        <button type="submit">送信</button>
        </form>
    </body>
</html>
