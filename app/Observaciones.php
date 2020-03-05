<?php

namespace QA;

use Illuminate\Database\Eloquent\Model;

class Observaciones extends Model
{
    public $timestamps = false;
    protected $table = 'observacion';
    protected $primaryKey = 'id';
    protected $fillable = ['descripcion'    
];
}
