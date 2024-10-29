<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Merchant extends Model
{

    use HasFactory;
    protected $fillable = ['id', 'name', 'email'];
    // Define the relationship to Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Define the relationship to Order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
