<?php

namespace App\Models;

use App\Models\OrderItemModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    public function order_item(){
        $this->hasMany(OrderItemModel::class);
    }
}
