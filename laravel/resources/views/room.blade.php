<body>
    <div>
        @foreach ($rooms as $room)
        <table>
            <tr>
                <td>ルームネーム</td>
                <td>{{$room->room_name}}</td>
            </tr>
            <tr>
                <td>製作者</td>
                <td>{{$room->people->room_id}}</td>
            </tr>
        </table>
        @endforeach
    </div>
</body>
