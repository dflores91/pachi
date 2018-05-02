<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    public function dueño()
    {
        return $this->belongsTo('App\User', 'id_creacion');
    }

    public function integrantes()
    {
        return $this->belongsToMany('App\User', 'integrantes', 'id_proyecto', 'id_usuario');
    }
}
