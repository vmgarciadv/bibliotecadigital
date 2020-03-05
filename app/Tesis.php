<?php

namespace QA;

use Illuminate\Database\Eloquent\Model;

class Tesis extends Model
{
    protected $table = 'tesis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre', 
        'autor', 
        'tutor', 
        'year_publicacion'
    ];
    
}
