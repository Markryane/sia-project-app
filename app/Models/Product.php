<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'merchant_id'];

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    // Define the relationship to Order
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
