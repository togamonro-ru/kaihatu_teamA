<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/assets/css/login.css')}}">
        <title>ログイン</title>
</head>
<body>
<h1>ログインページ</h1>
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
            <input type="submit" value="ログイン" class="button">
        
    </form>
</body>
</html>
