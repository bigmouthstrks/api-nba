<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partido extends Model
{
    public $timestamps = false;
    protected $table = 'partidos';

    use SoftDeletes;

    public function equipos(){
        return $this->belongsToMany('App\Equipo');
    }
}
