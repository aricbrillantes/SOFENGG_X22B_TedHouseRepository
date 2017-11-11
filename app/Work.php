<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    // Table Name
    protected $table = 'works';
    
    // Primary key
    public $primarykey = '$id';

    // Timestamps
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
