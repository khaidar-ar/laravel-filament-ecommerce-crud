<?php

namespace App\Models;

use App\Models\CostumerModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderModel extends Model
{
    use HasFactory;

    public function costumer(){
        $this->belongsTo(CostumerModel::class);
    }

    public function costumer(){
        $this->hasOne(OrderItemModel::class);
    }
}
