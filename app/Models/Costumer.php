<?php

namespace App\Models;

use App\Models\OrderModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Costumer extends Model
{
    use HasFactory;


    protected $table = 'costumer';
    public function order(){
        $this->hasMany(OrderModel::class);
    }

}
