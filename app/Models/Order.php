<?php

namespace App\Models;

use App\Models\CostumerModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    public function costumer(){
        $this->belongsTo(CostumerModel::class);
    }

    public function order_item(){
        $this->hasOne(OrderItemModel::class);
    }
}
