<?php

namespace App\Models;

use App\Models\OrderModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Costumer extends Model
{
    use HasFactory;


    protected $table = 'costumer';
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone'
    ];
    public function order(){
        $this->hasMany(Order::class);
    }

}
