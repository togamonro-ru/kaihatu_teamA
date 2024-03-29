<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body{
            font-size:16pt; color:#999;margin:5px;
        }
        h1{
            font-size:50pt; text-align:right; color:#f6f6f6; margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }
        ul{
            font-size: 12pt;
        }
        hr{
            margin: 25px 100px; border-top:1px dashed #ddd; 
        }
        .menutitle{

        }
        .content{

        }
        .footer{
            
        }
        th{
            background-color:#00ffb9; color:#fff; padding:5px 10px;}
        td{
            border:solid 1px #aaa;color:#999;padding:5px 10px;
        }
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menuber')
    <h2 class="menutitle">メニュー</h2>

    <ul>
        <li>@show</li>
    </ul>
    
    <hr size="1">
    <!-- <div class="poem">
        @yield('poem')
    </div> -->
    <div class ="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
</body>
</html>