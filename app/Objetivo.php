<?php

namespace QA;

use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    protected $table = 'objetivo';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];
}
