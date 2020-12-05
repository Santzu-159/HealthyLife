<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $fillable = [
        'weight', 'height',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
