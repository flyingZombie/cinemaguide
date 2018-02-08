<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['mov_id', 'mov_title', 'mov_summary'];

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
