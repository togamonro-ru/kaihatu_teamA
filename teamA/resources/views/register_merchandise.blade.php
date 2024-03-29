<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
</head>
<body>
    <h1>商品登録</h1>
    <form action="products" method="post" enctype="multipart/form-data">
        @csrf
        <p>商品名：<input type="text" name="name"></p>
        <select name="category">
            <p><option>おつまみ</option></p>
            <p><option>お食事</option></p>
            <p><option>デザート</option></p>
            <p><option>飲み物</option></p>
            <p><option>コースメニュー</option></p>
            <p><option>サービス</option></p>
        </select>
        <p>原価：<input type="number" name="costprice"></p>
        <p>税率：<input type="number" name="taxrate"></p>
        <p>画像：<input type="file" name="img"></p>
        <p>備考：<textarea name="remarks" cols="30" rows="10"></textarea></p>
        <p>飲み放題：<input type="radio" name="drinkber_flg"></p>
        <p>コース：<input type="radio" name="course_flg"></p>
        <p><input type="submit"></p>
    </form>
</body>
</html>