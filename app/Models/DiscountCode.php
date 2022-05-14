<?php
namespace App\Models;

use Doctrine\Inflector\WordInflector;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    use HasFactory;

    public function factor()
    {
        return $this->hasOne(Factor::class);
    }

    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }

}
