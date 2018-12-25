<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>部屋制作ページ</h1>
    <form method="post" action="/room/create">
        {{csrf_field ()}}
        <div>ニックネーム</div>
        <input type="text" name="name"><br>
        <div>色</div>
        <select name="color">
            <option value="black">黒色（先行）</option>
            <option value="white">白色</option>
        </select>
        <div>部屋の名前</div>
        <input type="text" name="room_name"><br>
        <div>パスワード</div>
        <input type="text" name="password"><br>
        <input type="submit" value="制作"><br>
    <form>
    <a href="/room">ルーム選択ページに戻る</a>

</body>
</html>
