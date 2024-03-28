@extends('layouts.app')

@section('content')
<h1>商品登録</h1>
    <form action="login.php" method="post">
        <div>
            <label>
                ユーザーID:
                <input type="text" name="ID" required>
            </label>
        </div>
        <div>
            <label>
                　　商品名:
                <input type="password" name="pass" required>
            </label>
        </div>
        <div>
            <label>
                　　　値段:
                <input type="text" name="price" reqired>
            </label>
        </div>
        <div>
            <label>
                　　　　　　画像:
                <input type="text" name="image" reqired>
            </label>
        <input type="submit" value="参照"><br>
        </div>
            <input type="submit" value="登録" class="button">
    </form>


@endsection