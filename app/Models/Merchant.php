<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    // Define the relationship to Item
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    // Define the relationship to Order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
