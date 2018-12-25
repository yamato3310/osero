<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "rooms";

    public function people () {
        return $this->hasOne ('App\Person');
    }

    public function scopeFlg ($query, $flg) {
        return $query->where ('build_flg', $flg);
    }

    public function scopeRoomName ($query, $name) {
        return $query->where ('room_name', $name);
    }

    public function scopeName ($query, $name) {
        return $query->where ('name', $name);
    }
}
