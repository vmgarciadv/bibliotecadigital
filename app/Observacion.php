<?php

namespace QA;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    protected $table = 'observacion';
    protected $primaryKey = 'id';
    protected $fillable = ['descripcion'];
}
