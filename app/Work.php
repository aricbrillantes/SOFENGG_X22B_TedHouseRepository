<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    
    protected $table = 'works';
    public $primaryKey = 'id';
    public $timestamps = true;
}
