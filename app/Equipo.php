<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipo extends Model
{
    public $timestamps = false;
    protected $table = 'equipos';

    use SoftDeletes;

    public function partidos(){
        return $this->belongsToMany('App\Partido');
    }
}
