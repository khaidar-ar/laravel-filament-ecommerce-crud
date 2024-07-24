<?php

namespace App\Models;

use App\Models\OrderModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CostumerModel extends Model
{
    use HasFactory;

    public function order(){
        $this->hasMany(OrderModel::class);
    }

}
