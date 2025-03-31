<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequestEvent extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

}
