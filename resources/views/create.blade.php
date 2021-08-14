<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

       
    </head>
    <body>
        <h1>Blog Name</h1>
            <form action="/posts" method="POST">
                @csrf
                <div class="title">
                    <h2>Title：</h2>
                    <input type="text" name="post[title]" placeholder="タイトル"><br>
                </div>
                <div class="message">
                    <h2>Body：</h2>
                    <textarea name="post[body]" placeholder="本文を入力してください。"></textarea>
                </div>
                <input type="submit" value="保存">
            </form>
            <div class="back">
                <a href="/">戻る</a>
            </div>
    </body>
</html>