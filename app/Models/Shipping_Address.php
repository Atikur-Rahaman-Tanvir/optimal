<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping_Address extends Model
{
    use HasFactory;
    public function divission(){
        return $this->hasMany(Divission::class);
    }
}
