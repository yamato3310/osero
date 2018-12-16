<body>
    <h1>部屋制作ページ</h1>
    <form method="post" action="/room/create">
        {{csrf_field ()}}
        <div>ニックネーム</div>
        <input type="text" name="name"><br>
        <div>色</div>
        <input type="text" name="color"><br>
        <div>部屋の名前</div>
        <input type="text" name="room_name"><br>
        <div>パスワード</div>
        <input type="text" name="password"><br>
        <input type="submit" value="制作"><br>
    <form>
    <a href="/room">ルーム選択ページに戻る</a>

</body>
