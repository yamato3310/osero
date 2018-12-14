<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "rooms";

    public function people ($query, $str) {
        return $this->hasMany ('App\Person');
    }
}
