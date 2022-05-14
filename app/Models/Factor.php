<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    use HasFactory;

    public function carModel()
    {
        return $this->hasOne(CarModel::class);
    }

    public function service()
    {
        return $this->hasOne(Service::class);
    }
}
