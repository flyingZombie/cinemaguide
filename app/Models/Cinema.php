<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $fillable = ['name', 'address', 'lat', 'lng'];

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
