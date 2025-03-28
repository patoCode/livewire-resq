<?php

namespace App\Models;

use Couchbase\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    /** @use HasFactory<\Database\Factories\ViewFactory> */
    use HasFactory;
    protected $guarded = [];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'rol_views');
    }

}
