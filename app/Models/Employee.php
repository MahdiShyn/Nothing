<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function deskClerk()
    {
        return $this->hasOne(DeskClerk::class);
    }

    public function worker()
    {
        return $this->hasOne(Worker::class);
    }

    public function accountant()
    {
        return $this->hasOne(Accountant::class);
    }
}
