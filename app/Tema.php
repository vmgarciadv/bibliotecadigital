<?php

namespace QA;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $table = 'tema';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];
}
