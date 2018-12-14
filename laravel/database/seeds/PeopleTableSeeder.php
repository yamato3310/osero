<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "name" => "yamato",
            "color" => "white",
            "team" => 1
        ];
       $person = new Person;
       $person->fill ($param)->save ();

        $param = [
            "name" => "hoge",
            "color" => "white",
            "team" => 2
        ];
       $person = new Person;
       $person->fill ($param)->save ();

        $param = [
            "name" => "huga",
            "color" => "white",
            "team" => 3
        ];
       $person = new Person;
       $person->fill ($param)->save ();

        $param = [
            "name" => "hage",
            "color" => "black",
            "team" => 4
        ];
       $person = new Person;
       $person->fill ($param)->save ();

    }
}
