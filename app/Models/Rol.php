<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function views()
    {
        return $this->belongsToMany(View::class, 'rol_views');
    }

}
