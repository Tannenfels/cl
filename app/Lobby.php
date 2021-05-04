<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lobby extends Model
{
    protected $table = 'lobbies';

    public function map()
    {
        return $this->hasOne('App\Map');
    }
}
