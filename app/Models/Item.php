<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Define the relationship to Merchant
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
