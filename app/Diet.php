<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    protected $fillable = [
        'name', 'content',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
