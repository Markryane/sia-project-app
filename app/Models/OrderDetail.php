<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_id', 'quantity', 'price'];
    // Define the relationship to Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
