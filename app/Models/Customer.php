<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->morphTo();
    }

    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
