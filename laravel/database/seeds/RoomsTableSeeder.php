<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "room_name" => "test",
            "password" => "0001",
            "build_flg" => true,
            "name" => "yamato",
        ];
        $rooms = new Room;
        $rooms->fill ($param)->save ();

        $param = [
            "room_name" => "test2",
            "password" => "0002",
            "build_flg" => true,
            "name" => "hoge",
        ];
        $rooms = new Room;
        $rooms->fill ($param)->save ();

        $param = [
            "room_name" => "test3",
            "password" => "0003",
            "build_flg" => true,
            "name" => "huga",
        ];
        $rooms = new Room;
        $rooms->fill ($param)->save ();

        $param = [
            "room_name" => "test4",
            "password" => "0004",
            "build_flg" => true,
            "name" => "hage",
        ];
        $rooms = new Room;
        $rooms->fill ($param)->save ();

    }
}
