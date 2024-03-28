<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{asset('/assets/css/edit.css')}}">
    <title>アカウント編集</title>
</head>
<body>
<h1>アカウント編集</h1>
    <form action="login.php" method="post">
        <div>
            <label>
                ユーザーID:
                <input type="text" name="ID" required>
            </label>
        </div>
        <div>
            <label>
                パスワード:
                <input type="password" name="pass" required>
            </label>
        </div>
            <input type="submit" value="編集" class="button">
    </form>
</body>
</html>


