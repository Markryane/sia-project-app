<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Define the relationship to Item
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
