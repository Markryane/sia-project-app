<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'order_number', 'total_amount', 'order_details'];
    // Define the relationship to Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Define the relationship to OrderDetail
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
