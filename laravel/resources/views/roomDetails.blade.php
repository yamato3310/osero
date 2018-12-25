<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <input type="button" value="送信" onclick="pusher({{$id}})">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://js.pusher.com/3.1/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script>
        const pusher = id => {
            let pusher = new Pusher ('{{ env("PUSHER_APP_KEY")}}', {
                cluster: 'ap3',
                encrypted: true,
            });
            var channel = pusher.subscribe (`order.${id}`);
            alert("送信中");

            const locations = () => {
                //window.location = ;
                alert("成功");
            }

            channel.bind ("App\\Events\\enteringTheRoom", locations);

        }
    </script>

</body>
</html>
