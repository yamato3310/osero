<body>
    <a href="/">topページへ</a>
    <div>
        @foreach ($rooms as $room)
        <a href="#">
            <table>
                <tr>
                    <td>ルームネーム</td>
                    <td>{{$room->room_name}}</td>
                </tr>
                <tr>
                    <td>製作者</td>
                    <td>{{$room->name}}</td>
                </tr>
            </table>
        </a>
        @endforeach
    </div>

    <div>
        <a href="room/create">ルーム制作画面へ</a>
</body>
