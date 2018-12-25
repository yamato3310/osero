<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset ('/css/room.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
        <a href="/">topページへ</a>
        <div>
            @foreach ($rooms as $room)
            <a href="/waitingRoom?id={{$room->id}}">
                <table class="table">
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
</html>
